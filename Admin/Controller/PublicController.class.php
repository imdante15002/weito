<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{
    public function index(){
        $this->display();
    }
    public function login(){
        $this->g=M('config')->where("id=1")->find();
        $this->display();
    }
    public function verify(){
        $Verify =     new \Think\Verify();
        // 验证码字体使用 ThinkPHP/Library/Think/Verify/ttfs/5.ttf
        $Verify->useZh = false; 
        $Verify->imageW = 274; 
        $Verify->imageH = 45; 
        $Verify->length = 4; 
        $Verify->fontSize = 24; 
        $Verify->entry();
    }
    public function login_do(){
        $verify=I('verify');
        if(!check_verify($verify)){
                $this->error('验证码输入错误！');
        }
        $username = I('username');
        $pwd = I('password','','sha1');
        
        $user=M('Member')->where(array('username'=>$username))->find();
        if(!$user||$user['password']!=$pwd){
            $this->error('账号或密码错误');
        }
        if(!$user['status']) $this->error('用户锁定');
        
        $data = array(
            'lasttime'=>time(),
            'lastip'=>get_client_ip()
        );
        M('member')->save($data);       
        session('uid' , $user['uid']);
        session('username' , $user['username']);
        session('lasttime' , time() , $user['lasttime']);
        session('lastip' , $user['lastip']);   
        $this->success('登录成功！欢迎回来！',U('Index/index'));
    }
    //退出登录
    public function logout(){
        session_unset();
        session_destroy();
        $this->success('退出成功',U('Public/login'));
    }
}