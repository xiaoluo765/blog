<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use Db;

class AdminController extends Controller
{
    /**
     * 管理员列表页
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = Db::name('admin')->select();
        return view('admin/index', ['data' => $data]);
    }

    /**
     * 管理员添加
     */
    public function add()
    {
        return view('admin/add');
    }

    /**
     * 管理员添加处理
     */
    public function doadd()
    {
        // var_dump($_POST);
        $data['username'] = $_POST['username'];
        $data['nickname'] = $_POST['nickname'];
        // $data['phone'] = $_POST['phone'];
        // $data['email'] = $_POST['email'];
        // $data['password'] = $_POST['pass'];
        $res = Db::name('admin')->insert($data);  
        // if($res !== false){
        //     return view('admin/add');
        //     // $this->success('添加成功', '/admin/admin/add');
        // }else{
        //     $this->error('添加失败', [], 2);
        // }
        if ($res !== false) {
           $date=[
                  'status'=>0,
                  'msg'=>'成功'
                 ];
        }else{
           $date=[
                  'status'=>1,
                  'msg'=>'失败'
                 ];
         }
         return json($date);

    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
