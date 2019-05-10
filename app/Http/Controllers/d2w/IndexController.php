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
        $is_ok = '已迁移';
        if ($partdata['is_go'] == 0){
            $is_ok = '未迁移';
        }
        return view('indexone',[
            'username' => $username,
            'credit' => intval($partdata['credit']/9),
            'post_count' => '102',
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

}
