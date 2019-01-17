<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use Db;

class ArticleController extends Controller
{
    /**
     * 后台文章列表
     */
    public function list()
    {
        // var_dump($where);die;
        $data = Db::name('article')
            ->field('id,title,author,images,zan,post_status,createtime,updatetime')
            ->where(['post_status' => 0])
            ->whereor(['post_status' => 1])
            ->select();

        return view('article/index',['data' => $data]);
    } 

    /**
     * 文章添加
     */
    public function add()
    {
        return view('article/add');
    }

    /**
     * 文章添加处理
     */
    public function doadd()
    {
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['author'] = $_POST['author'];

        $data['createtime'] = time();
        $res = Db::name('article')->insert($data);
        if($res !== false){
            $this->success('添加成功', 'admin/article/list');
        }else{
            $this->error('添加失败', 'admin/article/add');
        }
    }

    /**
     * 文章修改
     */
    public function edit()
    {
        $id = $_GET['id'];
        $data = Db::name('article')
            ->where(['id' => $id])
            ->find();

        return view('article/edit', ['data' => $data]);
        
    }

    /**
     * 文章修改处理
     */
    public function doedit()
    {
        $data['id'] = $_POST['id'];
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['author'] = $_POST['author'];
        $data['updatetime'] = time();

        $res = Db::name('article')->where(['id' => $data['id']])->update($data);
        if($res !== false){
            return $this->success('修改成功','/admin/article/list');
        }else{
            return $this->error('修改信息失败','/admin/article/edit?id='.$data['id']);
        }
    }

    /**
     * 文章删除
     */
    public function del()
    {
        $id = $_GET['id'];
        $data['post_status'] = 4;
        $res = Db::name('article')
            ->where(['id' => $id])
            ->update($data);
        if($res !== false){
            return $this->success('删除成功','/admin/article/list');
        }else{
            return $this->error('删除失败','/admin/article/list');
        }
    }








}
