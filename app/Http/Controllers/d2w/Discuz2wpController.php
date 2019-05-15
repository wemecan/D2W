<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/9
 * Time: 15:44
 */

namespace App\Http\Controllers\d2w;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Discuz2wpController extends IndexController {
    public function __construct(){

    }
    public function d2w(){
        if (!Session::has('username')){
            return Redirect::to('/login');
        }
        $res = $_POST;
        if ($res['username']!=session()->get('username')){
            exit('error');
        }
        $partdata = session()->get('item');
        if($partdata['is_go'] == 1 || $partdata['is_go'] == '1'){
            exit('account is sssssed');
        }
        $password = session()->get('password');
        $wp_data = DB::table('wp_users')->where('user_login', $res['username'])->first();
        if ($wp_data){
            $res['username'] = $res['username'].rand(000,999);
            DB::table('wp_members')->where(['username'=>session()->get('username')])->update([
                'username'=> $res['username'],
            ]);
            session()->forget('username');
            session()->put('username',$res['username']);
            session()->save();
            exit('userchange');
        }
        $wp_emdata = DB::table('wp_users')->where('user_email', $partdata['email'])->first();
        if ($wp_emdata){
            $wp_emdata = json_decode(json_encode($wp_emdata), true);
            $up_data = DB::table('wp_members')->where([
                'username' => session()->get('username'),
            ])->update([
                'is_go'=> 1
            ]);
            $is_log_in = DB::table('wp_usermeta')->where([
                'user_id'=> $wp_emdata['ID'],
                'meta_key' => 'zrz_credit_total',
            ])->first();
            if ($is_log_in) {
                $insertCredit = DB::table('wp_usermeta')->where([
                    'user_id' => $wp_emdata['ID'],
                    'meta_key' => 'zrz_credit_total',
                ])->update([
                    'meta_value' => $partdata['credit'],
                ]);
            }else{
                $insertCredit = DB::table('wp_usermeta')->insertGetId([
                    'user_id' => $wp_emdata['ID'],
                    'meta_key' => 'zrz_credit_total',
                    'meta_value' => $partdata['credit']
                ]);
            }
            if ($insertCredit&&$up_data)exit('emailSS');
            else exit('email error');

        }
        $up_data = DB::table('wp_members')->where([
            'username' => session()->get('username'),
        ])->update([
            'is_go'=> 1,
        ]);
        if(!$up_data){
            exit('update error');
        }
        $insertRes = DB::table('wp_users')->insertGetId([
            'user_login' => $res['username'],
            'user_pass'  => md5($password),
            'user_nicename' => $res['username'],
            'user_email'  => $partdata['email'],
            'user_registered' => date('Y-m-d H:i:s'),
            'display_name'   => $res['username'],
        ]);

        // 7B2 主题积分迁移
        $insertCredit = DB::table('wp_usermeta')->insertGetId([
            'user_id' => $insertRes,
            'meta_key' => 'zrz_credit_total',
            'meta_value' => $partdata['credit']
        ]);
        if ($insertRes && $insertCredit){
            exit('success');
        }
        else exit('error');
    }
}