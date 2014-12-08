<?php
namespace Member\Controller;
use Think\Controller;
class PostController extends CommonController {
    public function index(){
    	$id->id<>9;
        $this->video_cate=M('channel')->field('id,name')->where($id)->order('sort asc')->select();
     	$this->display();   
    }
    public function post_do(){
        if (I('title')==null) {
           $this->error('标题怎么能为空呢！');
        }
        if (I('src')==null) {
           $this->error('亲，视频地址不能为空哦');
        }
        if (I('cid')==null) {
           $this->error('亲，您还未选分类哦！');
        }
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        $upload->savePath  =      '/image/'; // 设置附件上传目录  
        $info=$upload->upload();  // 上传
        $lit='Uploads'.$info['litpic']['savepath'].$info['litpic']['savename'];
        if($info){
            $thumb=$lit.'thumb320x180.png';
            $image = new \Think\Image();//实例化图像处理，缩略图功能
            $image->open($lit);// 生成一个居中裁剪为240*160的缩略图
            $unlink=$image->thumb(320, 180,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb);
        }else{
            $thumb='';
        }
        $data=I('post.');
        $data['uid']=$_SESSION['uid'];
        $data['dateline']=time();
        $data['pubip']=get_client_ip();
        $data['lipic']=$thumb;
        if ($status=M('video_contents')->add($data)) {
            $this->redirect('member/post/post_thread_success',array('id'=>$status));
        }else{
            $this->error('哦哦！发布失败了，请重试！');
        }
    }
}