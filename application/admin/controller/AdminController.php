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
        // var_dump($data);die;
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
        $data['phone'] = $_POST['phone'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['createtime'] = time();

        $res = Db::name('admin')->insert($data);  
        if($res !== false){
            return $this->success('添加成功','admin/admin/index');
        }else{
            return $this->error('添加失败','amdin/admin/add');
        }
    }

    /**
     * 管理员修改
     */
    public function edit()
    {
        $id = $_GET['id'];
        $data = Db::name('admin')->where(['id'=>$id])->find();
        // var_dump($data);die;
        return view('/admin/edit',['data' => $data]);
    }

    /**
     * 管理员修改处理
     */
    public function doedit()
    {
        // var_dump($id);die;
        // var_dump($_POST);
        $data['id'] = $_POST['id'];
        $data['username'] = $_POST['username'];
        $data['nickname'] = $_POST['nickname'];
        $data['email'] = $_POST['email'];
        $data['phone'] = $_POST['phone'];
        $data['updatetime'] = time();

        $res = Db::name('admin')->where(['id' => $data['id']])->update($data);
        if($res !== false){
            return $this->success('修改成功','/admin/admin/index');
        }else{
            return $this->error('修改信息失败','/admin/admin/edit?id='.$data['id']);
        }

    }

    /**
     * 删除管理员
     */
    public function del()
    {
        $id = $_GET['id'];
        $res = Db::name('admin')->where(['id' => $id])->delete();
        if($res !== false){
            return $this->success('删除成功', '/admin/admin/index');
        }else{
            return $this->error('删除失败', '/admin/admin/index');
        }
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
    public function edit1($id)
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
    public function deletes($id)
    {
        //
    }
}
