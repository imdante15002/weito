<?php
namespace Admin\Controller;
use Think\Controller;
class AuthController extends CommonController{
    public function index(){
    	import('Common.Common.Category');
        $merge = new \Category();
        $class=M('auth_rule')->order('id asc')->select();
        $this->list=$merge::unlimitedForLevel($class,'|-- ');
        $this->pid=M('auth_rule')->where('pid=0')->field('id,title')->select();
    	$this->display();
    }
    public function add_model(){
    	$data=I('post.');
    	if (M('auth_rule')->add($data)) {
    		$this->success('添加成功');
    	}else{
            $this->error('添加失败');
    	}
    }
    public function console(){
    	$this->display();
    }
    public function auth(){
    	$this->display();
    }
    public function qmenu(){
        $this->display();
    }
}