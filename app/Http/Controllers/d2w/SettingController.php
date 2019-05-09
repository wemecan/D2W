<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/9
 * Time: 13:43
 */

namespace App\Http\Controllers\d2w;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SettingController extends IndexController {
    public function __construct(){

    }

    public function SetType(){
        if (!Session::has('username')){
            return Redirect::to('/login');
        }
        $res = $_POST;
        if ($res['username']!=session()->get('username')){
            exit('error');
        }
        $is_post = 0;
        $is_del = 0;
        if ($res['is_post']=='是'){
            $is_post = 1;
        }
        if ($res['is_del']=='是 (慎重)'){
            $is_del = 1;
        }
        $updateRes = DB::table('wp_members')->where('username',$res['username'])->update([
            'is_post' => $is_post,
            'is_del' => $is_del
        ]);
        if ($updateRes){
            exit('success');
        }
        else exit('error');
    }

    public function setAccount(){
        if (!Session::has('username')){
            return Redirect::to('/login');
        }
        $res = $_POST;
        if(!(strlen($res['password'])>6)){
            exit('error');
        }
        if ($res['username']!=session()->get('username')){
            exit('error');
        }
        $salt = session()->get('item')['salt'];
        $password = md5(md5($res['password']).$salt);
        $updateRes = DB::table('wp_members')->where('username',$res['username'])->update([
            'password' => $password,
        ]);
        if ($updateRes){
            session()->forget('password');
            session()->put([
                'password' => $res['password']
            ]);
            session()->save();
            exit('success');
        }
        else exit('error');
    }
}