<?php

namespace App\Helper;

trait Tree
{
    //返回tree数组
    public function treeArray($list, $id = 'id', $pid = 'parent_id', $child = 'children', $root = 0)
    {
        $tree     = array();
        $packData = array();
        foreach ($list as $data) {
            $packData[$data[$id]] = $data;
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
    public function getTreeLevel($list, $pid = 0, $level = 0)
    {
        static $tree = array();
        foreach ($list as $row) {
            if ($row['parent_id'] == $pid) {
                $row['level'] = $level;
                $tree[] = $row;
                $this->getTreeLevel($list, $row['id'], $level + 1);
            }
        }
        return $tree;
    }
    //菜单列表选择
    public function getMenuSelect($menus, &$html = '')
    {
        foreach ($menus as $v) {
            if (isset($v['children'])) {
                $html .= '<li class="dd-item dd3-item" data-id="' . $v['id'] . '"><div class="dd3-content"> ' . nbsp($v['level']) . $v['title'] . ' </div></li>';
                $html .= $this->getMenuSelect($v['children']);
            } else {
                $html .= '<li class="dd-item dd3-item" data-id="' . $v['id'] . '"><div class="dd3-content"> ' . nbsp($v['level']) . $v['title'] . ' </div> </li>';
            }
        }
        return $html;
    }
    //菜单列表显示修改
    public function getMenuLists($menus, &$html = '')
    {
        foreach ($menus as $v) {
            $uri = $v['uri'];
            if (isset($v['children'])) {
                $html .= '<li class="dd-item" data-id="' . $v['id'] . '"><button type="button" class="show-dd-list"><i class="mdi mdi-chevron-down"></i></button><div class="dd-handle"><i class="mdi ' . $v['icon'] . '"></i> <strong>' . $v["title"] . '</strong>&nbsp;&nbsp;&nbsp;<a href="' . url("{$uri}") . '" class="dd-nodrag">' . $uri . '</a><span class="pull-right dd-nodrag"><a data-id="' . $v['id'] . '" class="menu-edit"  data-toggle="modal" data-target="#editMenu"><i class="mdi mdi-lead-pencil"></i></a><a href="javascript:void(0);" data-id="' . $v['id'] . '" class="menu-delete"><i class="mdi mdi-delete"></i></a></span></div><ol class="dd-list">';
                $html .= $this->getMenuLists($v['children']);
                $html .= '</ol></li>';
            } else {
                $html .= '<li class="dd-item" data-id="' . $v['id'] . '"><div class="dd-handle"><i class="mdi ' . $v['icon'] . '"></i> <strong>' . $v["title"] . '</strong>&nbsp;&nbsp;&nbsp;<a href="' . url("{$uri}") . '" class="dd-nodrag">' . $uri . '</a><span class="pull-right dd-nodrag"><a data-id="' . $v['id'] . '" class="menu-edit"  data-toggle="modal" data-target="#editMenu"><i class="mdi mdi-lead-pencil"></i></a><a href="javascript:void(0);" data-id="' . $v['id'] . '" class="menu-delete"><i class="mdi mdi-delete"></i></a></span></div></li>';
            }
        }
        return $html;
    }
    //左侧菜单显示
    public function getMenuUl($menus, &$html = '')
    {
        foreach ($menus as $v) {
            $uri = $v['uri'];
            if (!empty($uri) && substr($_SERVER['REQUEST_URI'], 1) == $uri) {
                $active = 'active';
            } else {
                $active = '';
            }

            if (isset($v['children'])) {
                $html .= '<li class="nav-item nav-item-has-subnav" data-uri="' . $uri . '"><a href="#"><i class="mdi ' . $v['icon'] . '"></i> ' . $v["title"] . '</a><ul class="nav nav-subnav">';

                $html .= $this->getMenuUl($v['children']);
                $html .= '</ul></li>';
            } else {
                $html .= '<li class="nav-item ' . $active . '"> <a href="' . url("{$uri}") . '"><i class="mdi ' . $v['icon'] . '"></i> ' . $v["title"] . '</a> </li>';
            }
        }
        return $html;
    }
    //权限列表
    /*
<li class="dd-item" data-id="' . $item['id'] . '"><button>Expand</button>
    <div class="dd-handle">
        <div class="pull-left" style="min-width:310px"><b>system</b>&nbsp;&nbsp;[<span class="text-primary">system</span>]</div>&nbsp;
        <span class="pull-right dd-nodrag">
            
                            <a href="javascript:void(0);" data-url="http://127.0.0.1:8000/admin/auth/permissions/7/edit" class="tree-quick-edit"><i class="feather icon-edit"></i></a>
            
                        <a href="javascript:void(0);" data-message="ID - 7" data-url="http://127.0.0.1:8000/admin/auth/permissions/7" data-action="delete"><i class="feather icon-trash"></i></a>
                    </span>
    </div>
        <ol class="dd-list">
                                </ol>
    </li>
*/
    public function getPermissionlists($permissions, &$html = '')
    {
        foreach ($permissions as $item) {
            $edit_url = route('permission.edit',[$item['id']]);
            $del_url  = route('permission.destroy',[$item['id']]);
            
            if (isset($item['children'])) {
                $html .= '<li class="dd-item" data-id="' . $item['id'] . '"><div class="dd-handle"><div class="pull-left" style="min-width:310px"><b>' . $item['name'] . '</b>&nbsp;&nbsp;[<span class="text-primary">' . $item['slug'] . '</span>]</div>&nbsp; <span class="label bg-primary">ANY</span>&nbsp;<a class="dd-nodrag"><code style="color:#495abf">' . $item['http_path'] . '</code></a><span class="pull-right dd-nodrag"><a href="" data-url="'.$edit_url.'" class="tree-quick-edit"><i class="mdi mdi-lead-pencil"></i></a><a href="" data-message="ID - '.$item['name'].'" data-url="'.$del_url.'" data-action="delete"><i class="mdi mdi-delete"></i></a></span></div><ol class="dd-list">';
                $html .= $this->getPermissionlists($item['children']);
                $html .= '</ol></li>';
            } else {
                $html .= '<li class="dd-item" data-id="' . $item['id'] . '"><div class="dd-handle"><div class="pull-left" style="min-width:310px"><b>' . $item['name'] . '</b>&nbsp;&nbsp;[<span class="text-primary">' . $item['slug'] . '</span>]</div>&nbsp; <span class="label bg-primary">ANY</span>&nbsp;<a class="dd-nodrag"><code style="color:#495abf">' . $item['http_path'] . '</code></a><span class="pull-right dd-nodrag"><a href="" data-url="'.$edit_url.'" class="tree-quick-edit"><i class="mdi mdi-lead-pencil"></i></a><a href="" data-message="ID - '.$item['name'].'" data-url="'.$del_url.'" data-action="delete"><i class="mdi mdi-delete"></i></a></span></div></li>';
            }
        }
        return $html;
    }
    
}
