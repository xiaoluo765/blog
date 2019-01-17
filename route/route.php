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
Route::get('/', 'home/IndexController/index');
// 我的相册页
Route::get('home/album', 'home/AlbumController/index');
// 我的日记页
Route::get('home/diary', 'home/DiaryController/index');
// 关于我
Route::get('home/about', 'home/AboutController/index');
// 留言页
Route::get('home/message', 'home/MessageController/index');


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
// 后台管理员修改处理
Route::post('admin/admin/doedit', 'admin/AdminController/doedit');
// 后台管理员删除
Route::get('admin/admin/del', 'admin/AdminController/del');

// 文章列表
Route::get('admin/article/list', 'admin/ArticleController/list');
// 文章添加
Route::get('admin/article/add', 'admin/ArticleController/add');
// 文章添加处理
Route::post('admin/article/doadd', 'admin/ArticleController/doadd');
// 文章修改
Route::get('admin/article/edit', 'admin/ArticleController/edit');
// 文章修改处理
Route::post('admin/article/doedit', 'admin/ArticleController/doedit');
// 文章删除
Route::get('admin/article/del', 'admin/ArticleController/del');










