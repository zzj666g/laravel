<?php
Route::get('/', function () {
    return view('welcome');
});
//配置路由页面
Route::any('user/index','UserController@index');    //前面是路径控制器和方法名//后面是控制器和方法名
Route::any('user/ad','UserController@ad');           //展示页面
Route::any('user/add','UserController@add');         //添加方法
Route::any('user/deletes','UserController@deletes');//删除页面
Route::any('user/update','UserController@update');  //修改
Route::any('user/updates','UserController@updates');//修改方法
Route::any('user/login','UserController@login');  //server 直播摄像头
Route::any('user/log','UserController@log');
//Route::any('index/index','IndexController@index');
//Route::get('test',function(){  //结果和上边输出的结果同样  test 在地址栏输入test
//    // return 'post请求';
//    return view('index');
//});
//Route::any('test',function(){     //对于一些敏感的操作 比如文章啥的
//    return 'any请求';
//});
