<?php
namespace Home\Controller;
use Think\Controller;
class TopicController extends CommonController{
	public function index(){
		$id->id=I('id');
		$m=D('ViewView');
		$views=$m->where($id)->find();
		$this->assign('views',$views);
		$this->display();
	}
}