<?php
/**
 * Created by PhpStorm.
 * User: ai0by
 * Date: 2019/4/12
 * Time: 14:59
 */

namespace App\Http\Controllers\d2w;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller {
    public function __construct(){

    }
    public function is_login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $partdata = DB::table('wp_members')->where('username', $username)->first();
        $partdata = json_decode(json_encode($partdata), true);
        if (!isset($partdata['username'])){
            exit('error');
        }
        if ($partdata['is_del'] == 1){
            exit('error');
        }
        $realpassword = md5(md5($password).$partdata['salt']);
        if ($partdata['password'] == $realpassword){
            session()->put([
                'username'=>$username,
                'item' => $partdata,
                'password' => $password,
            ]);
            session()->save();
            exit('success');
        }
        else exit($password);
    }
    public function index(){
        if (!Session::has('username')){
            return Redirect::to('/login');
        }
        $username = session()->get('username');
        $partdata = session()->get('item');
        $post_count = DB::table('pre_forum_post')->where(['authorid'=>$partdata['uid']])->count();
        $is_ok = '已迁移';
        if ($partdata['is_go'] == 0){
            $is_ok = '未迁移';
        }
        return view('indexone',[
            'username' => $username,
            'credit' => $partdata['credit'],
            'money' => intval($partdata['credit']/9),
            'post_count' => $post_count,
            'is_ok' => $is_ok,
        ]);
    }

    public function setting(Request $request){
        if (!Session::has('username')){
            return Redirect::to('/login');
        }
        $username = session()->get('username');
        $partdata = session()->get('item');
        return view('setting',[
            'username' => $username,
            'email'   => $partdata['email'],
        ]);
    }

    public function login(){
        return view('login');
    }

    public function logout(Request $request){
        session()->flush();
        return view('logout');
    }

    public function forget(Request $request){
        $data = $_POST;
        $partdata = DB::table('wp_members')->where(['email'=> $data['email']])->first();
        $partdata = json_decode(json_encode($partdata), true);
        if (!isset($partdata['username'])){
            exit('forget pass email error');
        }
        $newPass = rand(00000000,99999999);
        $is_setpass = DB::table('wp_members')->where(['email'=> $data['email']])->update([
            'password' => md5(md5($newPass).$partdata['salt']),
        ]);
        if (!$is_setpass){
            exit('pass update error');
        }
        $message = '用户名:'.$partdata['username'].'  新密码:'.$newPass;
        $to = $data['email'];
        $subject = '请查收您的新密码';
        Mail::send(
            'emails',
            ['content' => $message],
            function ($message) use($to, $subject) {
                $message->to($to)->subject($subject);
            }
        );
        if (!Mail::failures()){
            exit('success');
        }
    }

    public function pass(){
        return view('foget');
    }

}
