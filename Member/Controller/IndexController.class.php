<?php
namespace Member\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	  if (!$_SESSION['uid']) {
            $this->error('请先登录','/');
        }
        $field      = array('id','title','lipic','views');
        $this->videotop=M('video_contents')->field($field)->limit(6)->order('views desc')->select();
    	$this->display();
    }
}