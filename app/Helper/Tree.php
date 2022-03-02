<?php
namespace App\Helper;

Trait Tree
{
    //返回菜单tree数组
    public function menuTree($menu, $pk = 'id', $pid = 'parent_id', $child = 'children', $root = 0)
    {
        $tree     = array();
        $packData = array();
        foreach ($menu as $data) {
            $packData[$data[$pk]] = $data;
        }
        foreach ($packData as $key => $val) {
            if ($val[$pid] == $root) {
                //代表跟节点
                $tree[] = &$packData[$key];
            } else {
                //找到其父类
                $packData[$val[$pid]][$child][] = &$packData[$key];
            }
        }

        return $tree;
    }
    //返回菜单级别
    public function getTree($list,$pid=0,$level=0) {
        static $tree = array();
        foreach($list as $row) {
            if($row['parent_id']==$pid) {
                $row['level'] = $level;
                $tree[] = $row;
                $this->getTree($list, $row['id'], $level + 1);
            }
        }
        return $tree;
    }
    //菜单列表选择
    public function getMenuSelect($menus, &$html=''){
        foreach ($menus as $v){
            if (isset($v['children'])) {
                $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd3-content"> '. nbsp($v['level']) . $v['title'].' </div></li>';
                $html .= $this->getMenuSelect($v['children']);
            } else {
                $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd3-content"> '. nbsp($v['level']) . $v['title'].' </div> </li>';
            }
        }
        return $html;
    }
    //菜单列表显示修改
    public function getMenuLists($menus, &$html=''){
        foreach ($menus as $v){
            $uri = $v['uri'];
            if (isset($v['children'])) {
                $html .= '<li class="dd-item" data-id="'.$v['id'].'"><button type="button" class="show-dd-list"><i class="mdi mdi-chevron-down"></i></button><div class="dd-handle"><i class="mdi '. $v['icon'] .'"></i> <strong>'.$v["title"].'</strong>&nbsp;&nbsp;&nbsp;<a href="'.url("{$uri}").'" class="dd-nodrag">'.$uri.'</a><span class="pull-right dd-nodrag"><a data-id="'.$v['id'].'" class="menu-edit"  data-toggle="modal" data-target="#editMenu"><i class="mdi mdi-lead-pencil"></i></a><a href="javascript:void(0);" data-id="'.$v['id'].'" class="menu-delete"><i class="mdi mdi-delete"></i></a></span></div><ol class="dd-list">';
                $html .= $this->getMenuLists($v['children']);
                $html .= '</ol></li>';
            } else {
                $html .= '<li class="dd-item" data-id="'.$v['id'].'"><div class="dd-handle"><i class="mdi '. $v['icon'] .'"></i> <strong>'.$v["title"].'</strong>&nbsp;&nbsp;&nbsp;<a href="'.url("{$uri}").'" class="dd-nodrag">'.$uri.'</a><span class="pull-right dd-nodrag"><a data-id="'.$v['id'].'" class="menu-edit"  data-toggle="modal" data-target="#editMenu"><i class="mdi mdi-lead-pencil"></i></a><a href="javascript:void(0);" data-id="'.$v['id'].'" class="menu-delete"><i class="mdi mdi-delete"></i></a></span></div></li>';
            }
        }
        return $html;
    }
    //左侧菜单显示
    public function getMenuUl($menus, &$html=''){
        foreach ($menus as $v){
            $uri = $v['uri'];
            if (!empty($uri) && substr($_SERVER['REQUEST_URI'],1) == $uri) {
                $active = 'active';
            } else {
                $active = '';
            }

            if (isset($v['children'])) {
                $html .= '<li class="nav-item nav-item-has-subnav" data-uri="'.$uri.'"><a href="#"><i class="mdi '. $v['icon'] .'"></i> '.$v["title"].'</a><ul class="nav nav-subnav">';

                $html .= $this->getMenuUl($v['children']);
                $html .= '</ul></li>';
            } else {
                $html .= '<li class="nav-item '.$active.'"> <a href="'. url("{$uri}") .'"><i class="mdi '. $v['icon'] .'"></i> '.$v["title"].'</a> </li>';

            }
        }
        return $html;
    }



}
