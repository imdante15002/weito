<?php
namespace Admin\Controller;
use Think\Controller;
class ForumController extends CommonController{
    public function index(){
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('forumdisplay')->where('status=0')->order('sort')->select();
        $this->forum=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|——&nbsp;');
        $this->display();
    }
    public function add_forum(){
        $data=I('post.');
        if(M('forumdisplay')->add($data)){
            $this->success('添加成功',U('Forum/index'));
        }else{
            $this->error('添加失败');
        }
    }
    public function save_forum(){
        $data=I('post.');
        if(M('forumdisplay')->save($data)){
            $this->success('保存成功',U('Forum/index'));
        }else{
            $this->error('修改失败');
        }
    }
    public function subforum(){
        $c=I('action');
        $this->c=$c;
        $id->id=I('id');
        if($c=='2'){
            $this->f=M('forumdisplay')->where($id)->find();
        }
        $this->pid=I('id');
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('forumdisplay')->where('status=0')->order('sort')->select();
        $this->forum=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $this->display();
    }
    public function upforum(){
        $m=M('forumdisplay');
        foreach ($_POST as $id=>$sort){
            $m->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('Forum/index');
    }
    public function del_forum(){
        $id->id=I('id');
        if (M('forumdisplay')->where($id)->delete()) {
            $this->success('删除成功',U('Forum/index'));
        } else {
            $this->success('删除失败！');
        }    
    }
     public function del_all_forum(){
        $tids=I('tid');
        M('forumdisplay')->where(array('id'=>array('in',$tids)))->delete();
        $this->success('删除成功');
    }
    public function category(){
        $this->list=M('forumdisplay')->field(array('id','name'))->order('sort asc')->select();
        $this->display();
    }
    public function add_category(){
         $data=I('post.');
        if (M('thread_category')->add($data)) {
            $this->success('添加分类成功！');
        } else {
           $this->error('添加失败！');
        }
    }
    public function ajax_category(){
        $pid->pid=I('pid');
        $this->cate=M('thread_category')->where($pid)->order('sort asc')->select();
        $this->display();
    }
    //内容审核
    public function examine(){
        $fwid['id']=array('not in',array('1','2','3','8','9'));
        $this->forum=M('forumdisplay')->where($fwid)->order('pid asc')->select();
        $this->display();
    }
    //所有帖子
    public function thread(){
        $this->display();
    }
}