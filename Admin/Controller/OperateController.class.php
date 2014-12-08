<?php
namespace Admin\Controller;
use Think\Controller;
class OperateController extends CommonController{
    public function index(){
        $this->display();
    }
    public function advertisement(){
        $this->display();
    }
    public function flink(){
        $this->list=M('flink')->order('sort')->select();
        $this->display();
    }
    public function add_flink(){
        $data=I('post.');
        if (M('flink')->add($data)) {
           $this->success('添加成功');
        } else {
            $this->error('添加失败！');
        } 
    }
    public function recommend(){
        $this->display();
    }
    public function site_notice(){
        $count= M('announce')->count();
        $Page = new \Think\Page($count,20);// 实例化分页类
        $show = $Page->show();// 分页显示输出
        $list = M('announce')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    public function add_notice(){
        $this->display();
    }
    public function add_notice_exe(){
        $data=I('post.');
        $data['dateline']=time();
        $data['uid']=$_SESSION['uid'];
        if (M('announce')->add($data)) {
            $this->success('发布成功',U('Operate/site_notice'));
        } else {
            $this->error('发布失败了！请联系技术人员');
        }   
    }
}