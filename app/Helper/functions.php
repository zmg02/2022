<?php

use App\Model\User;

function add($num1, $num2) {
    return intval($num1) + intval($num2);
}

//用户数据填充
function addUsers($number) {
    //        $user = factory(User::class, $number)->states('status')->make();
    $user = factory(User::class, $number)->create();
    dd($user);
}

//返回菜单
function menuTree($menu, $pk = 'id', $pid = 'parent_id', $child = 'children', $root = 0)
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

function getTree($list,$pid=0,$level=0) {
     static $tree = array();
     foreach($list as $row) {
         if($row['parent_id']==$pid) {
             $row['level'] = $level;
             $tree[] = $row;
             getTree($list, $row['id'], $level + 1);
         }
     }
     return $tree;
}

function menuTreeHtml($menus, $pid=0)
{
//<<<HTML
//        <li class="nav-item nav-item-has-subnav active open">
//          <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> 用户</a>
//          <ul class="nav nav-subnav">
//            <li class="active"> <a href="{{ url('admin/mogujie/user/list') }}">用户列表</a> </li>
//            <li> <a href="{{ url('admin/mogujie/menu') }}">菜单</a> </li>
//{{var_dump($menus)}}
//          </ul>
//        </li>
//HTML;
    foreach ($menus as $item) {

    }
    return $menus;
}

//返回空格
function nbsp($number) {
    $str = '';
    for ($i=0; $i<$number; $i++) {
        $str .= "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo $str;
}
