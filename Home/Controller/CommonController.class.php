<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 公共调用控制器，自动继承
 */
class CommonController extends Controller {
   public function _initialize(){
        header("Content-type: text/html; charset=utf-8");
        //全局定义输出utf-8编码，防止乱码
    	/** 
         *查询站点配置信息并且设置缓存，设置缓存时间为1天
         * 
         */
    	if (!$config=S('config')) {
    		$config=M('config')->where('id=1')->find();
    		S('config',$config,3600*24);
    	}
    	$this->assign('G',$config);//输出压面显示

        /**
         * 读取栏目表和站点数据表，全局通用，避免多次查询
         * 设置为$Channel(栏目表)/$Contents(内容数据局表);
         */
        $Channel=M('channel');
        $Contents=M('contents');

    	/**
         * 查询栏目、并且设置缓存，设置缓存时间为1天
         */
	    //if (!$channel=S('channel')) {
	    	$channel=$Channel->where('nav=1')->order('sort')->select();
    	// 	S('channel',$channel,3600*24);
	    // }
	    $this->assign('channel',$channel);//输出栏目显示

        /**
         *解释说明：如果访问控制器为LIstController则查询当前路径url地址
         *读取访问栏目的信息,查询channe表
         */
        if (CONTROLLER_NAME=='Nav') {
            $lwhere->url=ACTION_NAME;
            $N=$Channel->where($lwhere)->find();
            $this->assign('N',$N);
        }
        /**
         * 判断当前访问用户是否登录
         * 如果是则获取当前访问用户uid值
         */
        $now_uid=$_SESSION['uid'];
        $this->ukey=$now_uid;//输出查询获取的session中uid的值;
        if ($now_uid<>0) {
            $uwhere->uid=$now_uid;
            $auth_user=M('member')->where($uwhere)->find();
            if ($auth_user['auth_group_id']>0) {
                $gwhe->id=$auth_user['auth_group_id'];
                $auth_user['group']=M('auth_group')->where($gwhe)->getField('title');
                $this->utype="管理组";
            }else{
                $gwhe->id=$auth_user['auth_user_id'];
                $auth_user['group']=M('auth_user')->where($gwhe)->getField('title');
                $this->utype="用户组";
            }
            $this->assign('user',$auth_user);
        }
    }
}