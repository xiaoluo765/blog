<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// Route::get('think', function () {
//     return 'hello,ThinkPHP5!';
// });

// Route::get('hello/:name', 'index/hello');

// return [

// ];

// 前台首页
Route::get('/','index/index/index');
// 后台首页
Route::get('admin/index','admin/IndexController/index');
// 后台欢迎页
Route::get('admin/welcome','admin/IndexController/welcome');

// 后台用户列表页
Route::get('admin/admin/index','admin/AdminController/index');