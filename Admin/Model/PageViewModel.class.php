<?php
namespace Admin\Model;
use Think\Model\ViewModel;
/**
 * 单页面视图模型
 */
class PageViewModel extends ViewModel{
    public $viewFields = array(
        'extend_content'=>array('id','channelid','title','_type'=>'LEFT'),
        'channel'=>array('name','_on'=>'extend_content.channelid=channel.id')
        );
}