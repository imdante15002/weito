<?php
namespace Member\Controller;
use Think\Controller;
class PostController extends CommonController {
    public function index(){
        $this->video_cate=M('channel')->field('id,name')->order('sort asc')->select();
     	$this->display();   
    }
    public function post_do(){
       if (!I('cid')) {
            $this->error('栏目没有选择哦！');
        }else if (!I('title')){
            $this->error('标题不能空！');
        }else if(!I('body')){
            $this->error('您没有添加任何内容！');
        }
        $content=I('body');
        $info=getPic($content);
        if(!$info==null){
            $thumb=$info.'_thumb_195_195.png';
            $image = new \Think\Image();
            $image->open($info);
            $unlink=$image->thumb(195,195)->save($thumb);
        }else{
            $thumb='';
        }
        $arr=I('post.');
        $arr['lipic']=$thumb;
        $arr['dateline']=time();
        $arr['pubip']=get_client_ip();
        $arr['uid']=$_SESSION['uid'];
        $uid->uid=$arr['uid'];
        if($status=M('article')->add($arr)){
            M('member')->where($uid)->setInc('score',5);//访问+1
            $this->redirect('member/post/post_status',array('id'=>$status));
        }else{
            $this->error('发布失败，请重试');
        }
    }
    public function post_status(){
        $tid->id=I('id');
        $this->v=M('article')->field(array('id','title'))->where($tid)->find();
        $this->display();
    }
}