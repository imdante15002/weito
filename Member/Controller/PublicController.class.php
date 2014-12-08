<?php
namespace Member\Controller;
use Think\Controller;
class publicController extends CommonController {
     public function login(){
    	$email = I('email');
        $pwd = I('password','','sha1'); 
        $user=M('Member')->where(array('email'=>$email))->find();
        if(!$user||$user['password']!=$pwd){
            $this->error('邮箱或密码错误');
        }
        if(!$user['status']) $this->error('用户锁定');
        
        $data = array(
        	'uid'     =>$user['uid'],
            'lasttime'=>time(),
            'lastip'  =>get_client_ip()
        );
        M('member')->save($data);       
        session('uid' , $user['uid']);
        $this->success('登录成功！欢迎回来！');
    }
    public function register(){
        $this->display();
    }
    public function register_do(){
    	extract($_POST);
        //用户名需过滤的字符的正则
        $stripChar = '?<*.>\'';
        $verify=strtoupper(I('verify'));
        if(!check_verify($verify)){
                $this->error('验证码输入错误！');
        } else if (preg_match('/[' . $stripChar . ']/is', $username) == 1) {
            $this->error('用户名中包含' . $stripChar . '等非法字符！');
        } else if ($password <> $repass) {
            $this->error("两次密码输入不一致！");
        } else if (strlen($password) < 5 || strlen($password) > 12) {
            $this->error("密码长度至少5位，最多12位！");
        } else if (ereg("/^[a-z]([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?$/i;", $email)) {
            $this->error("邮箱格式不正确！");
        } else {
            $result = M('member')->where("username='$username' or email='$email'")->count();
            if ($result) {
                $this->error("用户名或者该邮箱已经存在！");
            } else {
                $data = array(
                    'username'   => $username,
                    'email'      => $email,
                    'avtimg'     => 'Static/common/images/avtimg.png',
                    'password'           => sha1($password),
                    'lastip'         => get_client_ip(),
                    'regtime'        => time(),
                    'lasttime'   => time(),
                );
                $rst = M('member')->add($data);
                $this->success("注册成功！",'/member');
            }
        }
    }
    public function logout(){
        session_unset();
        session_destroy();
        $this->success('退出成功');
    }
}