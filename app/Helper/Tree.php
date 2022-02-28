<?php
namespace App\Helper;

Trait Tree
{

    //返回tree数组
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

    //菜单列表视图
    public function getMenuLists($menus, &$html=''){
        foreach ($menus as $v){
            if (isset($v['children'])) {
                $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '. nbsp($v['level']) . $v['title'].' </div></li>';
                $html .= $this->getMenuLists($v['children']);
            } else {
                $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '. nbsp($v['level']) . $v['title'].' </div> </li>';
            }
        }
        return $html;
    }

    //菜单显示
    /*
     * <li class="nav-item nav-item-has-subnav active open">
          <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> 用户</a>
          <ul class="nav nav-subnav">
            <li class="active"> <a href="{{ url('admin/mogujie/user/list') }}">用户列表</a> </li>
     * */
    public function getMenuUl($menus, &$html=''){
        foreach ($menus as $v){
            if (isset($v['children'])) {
                $html .= '<li class="nav-item nav-item-has-subnav"><a href="#"><i class="mdi '. $v['icon'] .'"></i> {$v[\'title\']}</a><ul class="nav nav-subnav">';
                $html .= $this->getMenuUl($v['children']);
                $html .= '</ul></li>';
            } else {
                $html .= '<li class="nav-item"> <a href="'. url("{$v['uri']}") .'"><i class="mdi '. $v['icon'] .'"></i> {$v[\'title\']}</a> </li>';
            }
        }
        return $html;
    }


}
