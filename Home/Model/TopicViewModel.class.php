<?php
namespace Home\Model;
use Think\Model\ViewModel;
class TopicViewModel extends ViewModel {
    public $viewFields = array(
        'article'=>array('id','uid','cid','title','lipic','views','dateline','_type'=>'LEFT'),
        'member'=>array('username','avtimg','_on'=>'article.uid=member.uid'),
        'channel'=>array('name','url','_on'=>'article.cid=channel.id')
        );
}