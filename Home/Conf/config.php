<?php
return array(
	//'SHOW_PAGE_TRACE'       =>true, //trace开关
  'TMPL_ACTION_ERROR'     =>  'common/dialog', // 默认错误跳转对应的模板文件
  'TMPL_ACTION_SUCCESS'   =>  'common/dialog', // 默认成功跳转对应的模板文件/
	//----------------------缓存设置--------------------//
    'DATA_CACHE_COMPRESS'   =>  true,   // 数据缓存是否压缩缓存
    'DATA_CACHE_TIME'       =>  180, 
    'DATA_CACHE_PREFIX'     =>  'dantes_',     // 缓存前缀
    'DATA_CACHE_TYPE'       =>  'File',  // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'DATA_CACHE_SUBDIR'     =>  true,    // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
    'DATA_PATH_LEVEL'       =>  1,        // 子目录缓存级别
    'HTML_CACHE_ON'         =>    false, // 开启静态缓存
	  'HTML_FILE_SUFFIX'      =>    '.html', // 设置静态缓存文件后缀
	  'HTML_CACHE_RULES'      =>     array(  // 定义静态缓存规则
	     'Index:index'        => 'index',
       'list:'=>array('{$_SERVER.REQUEST_URI}','600'),
       'Video:'=>array('{$_SERVER.REQUEST_URI}','600'),
       'user:'=>array('{$_SERVER.REQUEST_URI}','600'),
	),
	//------------------------路由设置-------------------//
	'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
	//'URL_PATHINFO_DEPR'     =>  '/',    // PATHINFO模式下，各参数之间的分割符号
	'URL_ROUTER_ON'         => true,
  'URL_ROUTE_RULES'       =>array(
      'video/:id\d'         => 'Video/index',
      'topic/:id\d'         => 'Topic/index',
      'jingcaijietu'      =>'List/jingcaijietu',
      'tuwengushi'        =>'List/tuwengushi',
      'egaotupian'        =>'List/egaotupian',
      'youxibizhi'        =>'List/youxibizhi',
      'wanjiazuopin'      =>'List/wanjiazuopin',
      'wanjiacos'         =>'List/wanjiacos',
      'sigemanhua'        =>'List/sigemanhua',
      'wanjiashouhui'     =>'List/wanjiashouhui',
       //用户操作模块
      'login'             => 'Member/Public/login',
      'register'          => 'Member/Public/register',
      'forumdisplay/:id\d'  => 'Forum/forumdisplay',
      'thread/:tid'       => 'Forum/thread'
     )
);