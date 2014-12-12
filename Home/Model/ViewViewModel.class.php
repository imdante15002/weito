<?php
namespace Home\Model;
use Think\Model\ViewModel;
class ViewViewModel extends ViewModel {
    public $viewFields = array(
        'article'=>array('id','uid','cid','title','lipic','views','body','dateline','_type'=>'LEFT'),
        'member'=>array('username','avtimg','_on'=>'article.uid=member.uid'),
        'channel'=>array('name','url','_on'=>'article.cid=channel.id')
        );
}