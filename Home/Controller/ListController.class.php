<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends CommonController {
    public function index(){
		$this->display();
	}
	public function jingcaijietu(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
    	$this->display('index');
	}
	public function tuwengushi(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
	    $this->display('index');
	}
	public function egaotupian(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
	    $this->display('index');
	}
	public function youxibizhi(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
	    $this->display('index');
	}
	public function wanjiazuopin(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
	    $this->display('index');
	}
	public function wanjiacos(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
	    $this->display('index');
	}
	public function sigemanhua(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
	    $this->display('index');
	}
	public function wanjiashouhui(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('TopicView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
	    $this->display('index');
	}
}