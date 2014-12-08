<?php
namespace Admin\Model;
use Think\Model\ViewModel;
/**
 * 单页面视图模型
 */
class FcateViewModel extends ViewModel{
    public $viewFields = array(
        'thread_category'=>array('id','pid','name','sort','_type'=>'LEFT'),
        'forumdisplay'=>array('name'=>'fname','_on'=>'thread_category.pid=forumdisplay.id'),
        );
}