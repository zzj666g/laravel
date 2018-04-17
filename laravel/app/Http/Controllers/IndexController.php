<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 18/04/02
 * Time: 下午 02:52
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller{
    //展示
    public function index(){
        $ret = DB::table('user')->get();
        return view('show',['data'=>$ret]);
    }
}