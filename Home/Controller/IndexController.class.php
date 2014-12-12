<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$m          = D('TopicView');
    	$count      = $m->count();// 查询满足要求的总记录数
		$list       = $m->order('id desc')->limit(45)->select();
		$this       ->assign('list',$list);
		/**
		 * 统计视频总数和播放次数
		 */
		$this       ->total=$count;
		/**
		 * 输出模板
		 */
     	$this       ->display();   
    }
    public function page(){
    	$this->display();
    }
}