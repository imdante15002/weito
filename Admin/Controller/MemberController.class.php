<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends CommonController{
    public function index(){
        $m=M('member');
        $count      = $m->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $m->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    /**
     * 用户组列表中心
     * @return [type] [description]
     */
    public function user(){
        $this->role=M('auth_user')->select();
        $this->display();
    }
    /**
     * 添加用户组执行程序
     */
    public function add_user(){
        $data=I('post.');
        if (M('auth_user')->add($data)) {
            $this->success('添加成功!',U('Member/user'));
        } else {
            $tthis->error('添加失败，请重试或是联系技术人员！');
        }   
    }
    /**
     * 管理组列表
     * @return [type] [description]
     */
    public function role(){
        $this->role=M('auth_group')->select();
        $this->display();
    }
    /**
     * 添加管理组执行程序
     */
    public function add_role(){
        $data=I('post.');
        if (M('auth_group')->add($data)) {
            $this->success('添加成功!',U('Member/role'));
        } else {
            $tthis->error('添加失败，请重试或是联系技术人员！');
        }   
    }
    /**
     * 管理组权限编辑
     * @return [type] [description]
     */
    public function ed_role(){
        $id->id=I('id');
        $ed=M('auth_group')->where($id)->find();
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('auth_rule')->order('id asc')->select();
        $list=$merge::unlimitedForLevel($class,'|-- ');
        $rules=explode(',',$ed['rules']);
        foreach ($list as $k => $v) {
            $status=array_search($v['id'],$rules);
            $status?$list[$k]['s']=1:$list[$k]['s']=0;
        }
        //print_r($list);
        $this->assign('ed',$ed);
        $this->assign('list',$list);
        $this->display();
    }
    public function ed_role_exe(){
        $id->id=I('id');
        $r['rules']=implode(',',I('rules'));
        $save=M('auth_group')->where($id)->save($r);
        if ($save) {
            $this->success('保存成功!');
        } else {
            $this->error('保存失败，请重试或是联系技术人员！');
        }   
    }
    public function add_user_to_role(){
        $data=I('get.');
        $uid->uid=I('uid');
        $a=M('member')->where($uid)->getField('uid');
        if (!$a) {
            $this->error('用户不存在');
        }
        if (M('auth_group_access')->add($data)) {
             $this->success('添加成功!',U('Member/role'));
        } else {
            $tthis->error('添加失败，请重试或是联系技术人员！');
        }   
    }
    public function repassword(){
        $this->display();
    }
    public function repass(){
        $uid->uid=$_SESSION['uid'];
        $verify=strtoupper(I('verify'));
        if(!check_verify($verify)){
            $this->error('验证码输入错误！');
        }
        $m=M('member')->where($uid)->find();
        if (I('spass')==null) {
           $this->error('原密码不能为空！');
        }
        if (I('spass','','md5')<>$m['password']) {
             $this->error('原密码错误');
        }
        if (I('password','','md5')<>I('repass','','md5')) {
            $this->error('两次输入密码不一致！');
        }
        $m_ed=I('password','','md5');
        if (M('member')->where($uid)->setField('password',$m_ed)) {
            $this->success('修改成功！','/');
        } else {
            $this->error('修改失败！');
        }
    }
}