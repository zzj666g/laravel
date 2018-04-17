<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
//use Illuminate\Http\Request; //连接数据库
use Illuminate\Support\Facades\DB; //引用DB类
//use Illuminate\Support\Facades\Input;  //引入input框
//use Illuminate\Support\Facades\Redis;   //引入redis

class UserController extends Controller{
    //展示    如果展示（show）页面放在index文件夹里面 写法就是Index/show
    public function index(){
         $data = DB::table('user')->get();
         return view('Index/show',['data'=>$data]);
    }

    //添加
    public function ad(){
         return view('add');
    }

    //添加方法
    public function add(){
        $data = $_POST;
        unset($data['_token']);
        $res = DB::table('user')->insert($data);
        if($res){
            echo "<script>alert('添加成功');location.href='index'</script>";
//            return redirect('user/index');
         } else {
             return redirect('user/add');
        }
    }

    //登录时间插件
    public function login(){
        return view('login');
    }

    //轮播图插件
    public function log(){
        return view('log');
    }

    //删除
    public function deletes(){
        $id=$_GET;
        $data= DB::table('user')->where(['id'=>$id])->delete();
        if ($data) {
            return redirect('user/index');
        } else {
            echo '删除失败';
        }
    }

    //修改页面
    public function updates(){
        $id = $_GET;
        $arr = DB::table('user')->where(['id'=>$id])->get()->toArray();
        //var_dump($arr);die;   //得一个实际的数组，这个数组包含了列表的内容 toArray来调用
        return view('update',['arr'=>$arr[0]]);
    }

    //修改数据
    public function update(){
        $data = $_POST;
        unset($data['_token']);
        $res = DB::table('user')->where(['id'=>$data['id']])->update($data);
        if($res){
            return redirect('user/index');
        }else{
            echo '修改失败';
        }
    }
}
