<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize(){
        header("Content-type: text/html; charset=utf-8");
        if(!isset($_SESSION['uid'])||!isset($_SESSION['username'])){
            $this->redirect('Admin/Public/login');
        }
        $this->g=M('config')->where("id=1")->find();
        if ($_SESSION['uid']==1) {
            return true;
        }
        $auth = new \Think\Auth();
         if(!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, session('uid'))){
            $this->error('没有权限');
        }
    }
}