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

//菜单列表视图
function getMenuList($menus, &$html = ''){
    foreach ($menus as $v){
        if (isset($v['children'])) {
            $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '.$v['title'].' </div><ol class="dd-list">';
            $html .= getMenuList($v['children']);
            $html .= '</ol></li>';
        } else {
            $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '.$v['title'].' </div> </li>';
        }
    }
    return $html;
}

//菜单列表视图
function getMenuLists($menus, &$html = ''){
    foreach ($menus as $v){
        if (isset($v['children'])) {
            $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '. nbsp($v['level']) . $v['title'].' </div></li>';
            $html .= getMenuLists($v['children']);
        } else {
            $html .= '<li class="dd-item dd3-item" data-id="'.$v['id'].'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '. nbsp($v['level']) . $v['title'].' </div> </li>';
        }
    }
    return $html;
}

//后台左侧菜单
function getMenuUl($menus, &$html=''){
    $active = '';
    foreach ($menus as $v){
        if (isset($v['children'])) {
            $html .= '<li class="nav-item nav-item-has-subnav '.$active.'" data-uri="'.$v['uri'].'"><a href="#"><i class="mdi '. $v['icon'] .'"></i> '.$v["title"].'</a><ul class="nav nav-subnav">';
            $html .= getMenuUl($v['children']);
            $html .= '</ul></li>';
        } else {
            $html .= '<li class="nav-item"> <a href="'. url("{$v['uri']}") .'"><i class="mdi '. $v['icon'] .'"></i> '.$v["title"].'</a> </li>';
        }
    }
    return $html;
}

function nbsp($multiple)
{
    $nbsp = '';
    for ($i=0; $i<=$multiple; $i++) {
        $nbsp .= "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    return $nbsp;
}

//regexHtml('upload/icons.blade.php', 'upload/icons.json');
function regexHtml($path, $pathTo)
{
    if (is_file($path)) {
        $html = file_get_contents($path);
//        $regexStr = '/<i\s+class=\"mdi\s+(.*?)\"><\/i>/Ss';
        $regexStr = '/<\/code><span>(.*?)<\/span><\/div>/Ss';
        preg_match_all($regexStr, $html, $matches);
        $iconsJson = json_encode($matches[1]);
        file_put_contents($pathTo,$iconsJson);
        return true;
    }
    return false;
}
