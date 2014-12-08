<?php
/**
 * 后台管理系统函数库
 * @param  [type] $dir [description]
 * @return [type]      [description]
 */
function deldir($dir) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
  closedir($dh);
  if(rmdir($dir)) {
    return true;
  } else {
    return false;
  }
}
/**
 * Auth权限认证
 * @param  [type]  $name     [description]
 * @param  [type]  $uid      [description]
 * @param  integer $type     [description]
 * @param  string  $mode     [description]
 * @param  string  $relation [description]
 * @return [type]            [description]
 */
function authcheck($name, $uid, $type=1, $mode='url', $relation='or'){
    if(!in_array($uid,C('ADMINISTRATOR'))){ 
        $auth=new \Think\Auth();
        return $auth->check($name, $uid, $type, $mode, $relation)?true:false;
      }else{
        return true;
      }
  }