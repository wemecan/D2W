<?php
/**
 * Created by PhpStorm.
 * User: ai0by
 * Date: 2019/4/12
 * Time: 14:59
 */

namespace App\Http\Controllers\d2w;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use DB;

class IndexController extends Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index()
    {
        return view('login');
    }

}
