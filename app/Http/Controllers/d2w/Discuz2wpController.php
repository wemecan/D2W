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
            exit('email error');
        }
        $up_data = DB::table('wp_members')->where([
            'username' => session()->get('username'),
        ])->update([
            'is_go'=> 1
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
        if ($insertRes){
            exit('success');
        }
        else exit('error');
    }
}