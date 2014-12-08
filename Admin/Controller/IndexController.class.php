<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display();
    }
    public function cache(){
        $this->display();
    }
    public function cache_action(){
       if(I('cache')==1) {
            $dir1=RUNTIME_PATH.'Cache/';
        }
        if(I('logs')==1) {
            $dir2=RUNTIME_PATH.'Logs/';
        }
        if(I('temp')==1) {
            $dir3=RUNTIME_PATH.'Temp/';
        }
        if(I('data')==1) {
            $dir4=RUNTIME_PATH.'Data/';
        }
        if(is_dir($dir1))
            {
            $file_list= scandir($dir1);
            foreach ($file_list as $file)
                {
                if( $file!='.' && $file!='..')
                    {
                    deldir($dir1.'/'.$file);
                    }
                }
                rmdir($dir1);      
            }
            else
            {
                unlink($dir1);    
            }
            if(is_dir($dir2))
            {
            $file_list= scandir($dir2);
            foreach ($file_list as $file)
                {
                if( $file!='.' && $file!='..')
                    {
                    deldir($dir2.'/'.$file);
                    }
                }
                rmdir($dir12);      
            }
            else
            {
                unlink($dir2);    
            }
            if(is_dir($dir3))
            {
            $file_list= scandir($dir3);
            foreach ($file_list as $file)
                {
                if( $file!='.' && $file!='..')
                    {
                    deldir($dir3.'/'.$file);
                    }
                }
                rmdir($dir3);      
            }
            else
            {
                unlink($dir4);    
            }
            if(is_dir($dir4))
            {
            $file_list= scandir($dir4);
            foreach ($file_list as $file)
                {
                if( $file!='.' && $file!='..')
                    {
                    deldir($dir4.'/'.$file);
                    }
                }
                rmdir($dir4);      
            }
            else
            {
                unlink($dir4);    
            }
        $this->success('更新成功');
    }
    public function prompt(){
        $t=I('t');
        $id=I('id');
        switch ($t) {
            case 'art':
                $a="/index.php/Admin/Content/del_article?tid=$id";
                $type="招聘";
                break;
            case 'chn':
                $a="/index.php/Admin/Content/del_channel?id=$id";
                $type="栏目";
                break;
            case 'page':
                $a="/index.php/Admin/Content/del_page?id=$id";
                $type="页面";
                break;
            case 'cat':
                $a="/index.php/Admin/Content/del_category?id=$id";
                $type="分类";
                break;
            case 'sld':
                $a="/index.php/Admin/Content/del_slides?id=$id";
                $type="幻灯片";
                break;
            case 'forum':
                $a="/index.php/Admin/Forum/del_forum?id=$id";
                $type="板块";
                break;
        }
        $this->a=$a;
        $this->id=$id;
        $this->type=$type;
        $this->display();
    }
}