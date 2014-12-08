<?php 
        /*
        *     无限极分类 类
        */
header("Content-Type: text/html; charset=UTF-8");
Class Category {
        //组合一维数组
        Static Public function unlimitedForLevel ($class, $html = '--', $pid = 0, $level = 0) {
            $arr = array();
            foreach ($class as $k => $v) {
                if ($v['pid'] == $pid) {
                    $v['level'] = $level + 1;
                    $v['html']  = str_repeat($html, $level);
                    $arr[] = $v;
                    $arr = array_merge($arr, self::unlimitedForLevel($class, $html, $v['id'], $level + 1));
                }
            }
            return $arr;
        }
        //auth权限认证无限极分类功能
        Static Public function unlimitedForAuth ($class, $html = '--', $type = 0, $level = 0) {
            $arr = array();
            foreach ($class as $k => $v) {
                if ($v['type'] == $type) {
                    $v['level'] = $level + 1;
                    $v['html']  = str_repeat($html, $level);
                    $arr[] = $v;
                    $arr = array_merge($arr, self::unlimitedForAuth($class, $html, $v['id'], $level + 1));
                }
            }
            return $arr;
        }
        //组合多维数组
        Static Public function unlimitedForLayer ($class, $name = 'child', $pid = 0) {
            $arr = array();
            foreach ($class as $v) {
                if ($v['pid'] == $pid) {
                    $v[$name] = self::unlimitedForLayer($class, $name, $v['id']);
                    $arr[] = $v;
                }
            }
            return $arr;
        }
        //传递一个子分类ID返回所有的父级分类  
        Static Public function getParents ($class, $id) {
            $arr = array();
            foreach ($class as $v) {
                if ($v['id'] == $id) {
                    $arr[] = $v;
                    $arr = array_merge(self::getParents($class, $v['pid']), $arr); 
                }
            }
            return $arr;
        }
        //传递一个父级分类ID返回所有子分类ID
        Static Public function getChildsId ($class, $pid) {
            $arr = array();
            foreach ($class as $v) {
                if ($v['pid'] == $pid) {
                    $arr[] = $v['id'];
                    $arr = array_merge($arr, self::getChildsId($class, $v['id']));
                }
            }
            return $arr;
        }
        //传递一个父级分类ID返回所有子分类
        Static Public function getChilds ($class, $pid) {
            $arr = array();
            foreach ($class as $v) {
                if ($v['pid'] == $pid) {
                    $arr[] = $v;
                    $arr = array_merge($arr, self::getChilds($class, $v['id']));
                }
            }
            return $arr;
        }

    }
 ?>