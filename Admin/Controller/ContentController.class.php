<?php
namespace Admin\Controller;
use Think\Controller;
class ContentController extends CommonController{
    public function index(){
        $this->count_article=M('article')->count();
        $this->display();
    }
    /**
     * 页面管理首页
     * @return [type] [description]
     */
    public function page(){
        $m = M('channel'); // 实例化User对象
        $count      = $m->where('type=1')->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = M('channel')->where('type=1')->order('pid asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    /**
     * 添加页面内容执行动作
     */
    public function add_page_exe(){
        $content=I('body');
        $info=getPic($content);
        if(!$info==null){
            $thumb=$info.'thumb240x160.png';
            $image = new \Think\Image();//实例化图像处理，缩略图功能
            $image->open($info);// 生成一个居中裁剪为240*160的缩略图
            $unlink=$image->thumb(240, 160,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb);
        }else{
            $thumb='';
        }
        $arr=I('post.');
        $arr['litpic']=$thumb;
        $arr['dateline']=time();
        if(I('keywords')==null){
            $arr['keywords']=I('title');
        }
        if(I('description')==null){
            $arr['description']=I('title');
        }
        if(M('extend_content')->add($arr)){
            $this->success('添加成功',U('Content/page'));
        }else{
            $this->error('添加失败！,请联系技术人员.');
        }
    }
    /**
     * 编辑单页面内容
     * @return [type] [description]
     */
    public function ed_page(){
        $where->cid=I('id');
        $ed=M('extend_content')->where($where)->find();
        $this->channel=M('channel')->where('type=1')->select();
        if (!$ed) {
            $this->id=I('id');
            $this->display('add_page');
        } else {
            $this->id=I('id');
            $this->assign('ed',$ed);
            $this->display();
        }
    }
    /**
     * 单页面编辑保存动作
     * @return [type] [description]
     */
    public function ed_page_exe(){
        $content=I('body');
        $info=getPic($content);
        if(!$info==null){
            $thumb=$info.'thumb240x160.png';
            $image = new \Think\Image();
            $image->open($info);
            $unlink=$image->thumb(240, 160,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb);
        }else{
            $thumb='';
        }
        $arr=I('post.');
        $arr['litpic']=$thumb;
        $arr['dateline']=time();
        if(I('keywords')==null){
            $arr['keywords']=I('title');
        }
        if(I('description')==null){
            $arr['description']=I('title');
        }
        if(M('extend_content')->save($arr)){
            $this->success('修改成功',U('Content/page'));
        }else{
            $this->error('修改失败！');
        }
    }
    /**
     * 删除页面操作
     * @return [type] [description]
     */
    public function del_page(){
        $tid->id=I('id');
        $exe=M('extend_content')->where($tid)->delete();
        if ($exe) {
            $this->success("删除成功！",U('Content/page'));
        } else {
           $this->error("删除失败！");
        }   
    }
    /**
     * 栏目首页 栏目管理首页
     * @return [type] [description]
     */
    public function channel(){
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('channel')->where('status=0')->order('sort')->select();
        $this->channel=$merge::unlimitedForLevel($class,'pl30');
        $this->display();
    }
    /**
     * 添加栏目
     */
    public function add_channel(){
        $this->type=I('id',0,'intval');
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('channel')->where('status=0')->select();
        $this->channel=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $this->display();
    }
    /**
     * 添加栏目执行动作
     */
    public function add_channel_exe(){
        $data=I('post.');
        $data['status']='0';
        if (M('channel')->add($data)) {
            $this->success('成功新增了一个栏目',U('Content/channel'));
        } else {
            $this->error('添加失败！');
        }    
    }
    /**
     * 编辑栏目
     * @return [type] [description]
     */
    public function ed_channel(){
        $where->id=I('id');
        $this->ei=M('channel')->where($where)->find();
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('channel')->where('status=0')->select();
        $this->channel=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $this->display();
    }
    /**
     * 栏目编辑提交执行程序
     * @return [type] [description]
     */
    public function ed_channel_exe(){
        $id->id=I('id');
        $arr=I('post.');
        if (M('channel')->where($id)->save($arr)) {
           $this->success('修改成功！',U('Content/channel'));
        } else {
            $this->error('修改失败！');
        }
        
    }
    /**
     * 删除栏目执行程序
     * @return [type] [description]
     */
    public function del_channel(){
        $id->id=I('id');
        if (M('channel')->where($id)->delete()) {
            $this->success('删除成功',U('Content/channel'));
        } else {
            $this->error('删除失败！');
        }    
    }
    /**
     * 更新栏目排序
     * @return [type] [description]
     */
    public function upchannel(){
        $m=M('channel');
        foreach ($_POST as $id=>$sort){
            $m->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('Content/channel');
    }
    /**
     * 内容管理首页
     * @return [type] [description]
     */
    public function article(){
        $m=M('article');
        $count= $m->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,20);// 实例化分页类
        $show = $Page->show();// 分页显示输出
        $list = D('ContentView')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('channel')->where('type=2')->select();
        $this->channel=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $this->display();
    }
    /**
     * 批量移动文章
     * @return [type] [description]
     */
    public function move(){
        $id=I('tid');
        $cid=I('cid');
        $m=M('article');
        $status=$m->where(array('id'=>array('in',$id)))->setField('cid',$cid);
        if ($status) {
             $this->success('移动成功！');
        }else{
            $this->error('移动失败！');
        }
        
    }
    /**
     * 批量删除文章内容
     * @return [type] [description]
     */
    public function del_all(){
        $tids=I('tid');
        M('article')->where(array('id'=>array('in',$tids)))->delete();
        $this->success('删除成功');
    }
    /**
     * 发布文章页
     */
    public function add_article(){
        $this->catid=I('id');
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('channel')->where('type=2 and status=0')->select();
        $this->channel=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $this->display();
    }
    /**
     * 文章发布动作执行
     */
    public function add_article_exe(){
        if (!I('cid')) {
            $this->error('栏目没有选择哦！');
        }else if (!I('title')){
            $this->error('标题不能空！');
        }else if(!I('body')){
            $this->error('您没有添加任何内容！');
        }
        $content=I('body');
        $info=getPic($content);
        if(!$info==null){
            $thumb=$info.'thumb240x160.png';
            $image = new \Think\Image();//实例化图像处理，缩略图功能
            $image->open($info);// 生成一个居中裁剪为240*160的缩略图
            $unlink=$image->thumb(240, 160,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb);
        }else{
            $thumb='';
        }
        $arr=I('post.');
        $arr['lipic']=$thumb;
        $arr['dateline']=time();
        $arr['pubip']=get_client_ip();
        $arr['uid']=$_SESSION['uid'];
        if(I('keywords')==null){
            $arr['keywords']=I('title');
        }
        if(I('description')==null){
            $arr['description']=I('title');
        }
        if(M('article')->add($arr)){
            $this->success('文章发布成功',U('Content/article'));
        }else{
            $this->error('文章发布失败!');
        }
    }
    /**
     * 编辑文章
     * @return [type] [description]
     */
    public function ed_article(){
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('channel')->where('status=0')->select();
        $this->channel=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $where->tid=I('tid');
        $this->ed=M('article')->where($where)->find();
        $this->display();
    }
    /**
     * 编辑文章保存动作
     * @return [type] [description]
     */
    public function ed_article_exe(){
        $content=I('body');
        $info=getPic($content);
        if(!$info==null){
            $thumb=$info.'thumb240x160.png';
            $image = new \Think\Image();//实例化图像处理，缩略图功能
            $image->open($info);// 生成一个居中裁剪为240*160的缩略图
            $unlink=$image->thumb(240, 160,\Think\Image::IMAGE_THUMB_CENTER)->save($thumb);
        }else{
            $thumb='';
        }
        $arr=I('post.');
        $arr['litpic']=($thumb==null)?(I('litpic')):($thumb);
        $arr['dateline']=time();
        $arr['pubip']=get_client_ip();
        $arr['uid']=$_SESSION['uid'];
        if(I('keywords')==null){
            $arr['keywords']=I('title');
        }
        if(I('description')==null){
            $arr['description']=I('title');
        }
        if(M('article')->save($arr)){
            $this->success('修改成功',U('Content/article'));
        }else{
            $this->error('修改失败！,请联系技术人员.');
        }
    }
    /**
     * 删除文章操作
     * @return [type] [description]
     */
    public function del_article(){
        $tid->tid=I('tid');
        $exe=M('article')->where($tid)->delete();
        if ($exe) {
            $this->success("删除成功！",U('Content/article'));
        } else {
           $this->error("删除失败!");
        }   
    }
    /**
     * 分类管理
     * @return [type] [description]
     */
    public function category(){
        $forum=M('category')->order('sort asc')->select();
        $this->category=forum_display($forum);
        $this->display();
    }
    /**
     * 添加分类
     */
    public function add_category(){
        $this->ds=I('type',0,'intval');
        $this->type=I('id',0,'intval');
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('category')->where('status=0')->select();
        $this->category=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $this->display();
    }
    /**
     * 添加分类执行动作
     */
    public function add_category_exe(){
        $data=I('post.');
        $data['status']='0';
        if (M('category')->add($data)) {
            $this->success('添加成功！',U('Content/category'));
        } else {
            $this->error('添加失败！');
        }      
    }
    /**
     * 编辑分类
     * @return [type] [description]
     */
    public function ed_category(){
        $this->pid=I('pid');
        $where->id=I('id');
        $this->ei=M('category')->where($where)->find();
        import('Common.Common.Category');
        $merge = new \Category();
        $class=M('category')->where('status=0')->select();
        $this->category=$merge::unlimitedForLevel($class,'&nbsp;&nbsp;|--&nbsp;');
        $this->display();
    }
    /**
     * 分类编辑提交执行程序
     * @return [type] [description]
     */
    public function ed_category_exe(){
        $id->id=I('id');
        $arr=I('post.');
        if (M('category')->where($id)->save($arr)) {
           $this->success('修改成功！',U('Content/category'));
        } else {
            $this->error('修改失败！');
        }   
    }
    /**
     * 删除分类
     * @return [type] [description]
     */
    public function del_category(){
        $id->id=I('id');
        if(M('category')->where($id)->delete()){
            $this->success('删除成功！',U('Content/category'));
        }else{
            $this->error('删除失败！');
        }
    }
    /**
     * 幻灯片管理首页
     * @return [type] [description]
     */
    public function slides(){
        $this->slides=M('slides')->order('sort')->select();
        $this->display();
    }
    /**
     * 添加幻灯片执行方法
     */
    public function add_slides_exe(){
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        $upload->savePath  =      '/image/'; // 设置附件上传目录  
        $info=$upload->upload();  // 上传
        $lit='Uploads'.$info['pics']['savepath'].$info['pics']['savename'];
        $sl=I('post.');
        $sl['pic']=($info==null)?(''):($lit);
        $sl['dateline']=time();
        if(M('slides')->add($sl)){
            $this->success('添加成功',U('Content/slides'));
        }else{
            $this->error('添加失败,请重试或是联系技术支持！');
        }
    }
    /**
     * 编辑幻灯片
     * @return [type] [description]
     */
    public function ed_slides(){
        $id->id=I('id');
        $this->ed=M('slides')->where($id)->find();
        $this->display();
    }
    /**
     * 编辑幻灯片保存动作
     * @return [type] [description]
     */
    public function ed_slides_exe(){
        $upload = new \Think\Upload();// 实例化上传类    
        $upload->maxSize   =     3145728 ;// 设置附件上传大小    
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
        $upload->savePath  =      '/image/'; // 设置附件上传目录  
        $info=$upload->upload();  // 上传
        $lit='Uploads'.$info['pics']['savepath'].$info['pics']['savename'];
        $sl=I('post.');
        $pic=I('pic');
        $sl['pic']=($info==null)?($pic):($lit);
        $sl['dateline']=time();
        if ($info) {
                unlink($pic);
        }
        if(M('slides')->save($sl)){
            $this->success('保存成功',U('Content/slides'));
        }else{
            $this->error('保存失败！');
        }
    }
    /**
     * 删除幻灯片动作
     * @return [type] [description]
     */
    public function del_slides(){
        $id->id=I('id');
        if (M('slides')->where($id)->delete()) {
            $this->success('删除成功',U('Content/slides'));
        } else {
           $this->error('删除失败');
        }    
    }
    /**
     * 更新幻灯片排序
     * @return [type] [description]
     */
    public function up_slides(){
        $m=M('slides');
        foreach ($_POST as $id=>$sort){
            $m->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->redirect('Content/slides');
    }
}