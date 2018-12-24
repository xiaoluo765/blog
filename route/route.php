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
Route::get('/', 'index/index/index');
// 后台首页
Route::get('admin/index', 'admin/IndexController/index');

// 后台管理员列表页
Route::get('admin/admin/index', 'admin/AdminController/index');
// 后台管理员添加
Route::get('admin/admin/add', 'admin/AdminController/add');
// 后台管理员添加处理
Route::post('admin/admin/doadd', 'admin/AdminController/doadd');
// 后台管理员修改
Route::get('admin/admin/edit', 'admin/AdminController/edit');