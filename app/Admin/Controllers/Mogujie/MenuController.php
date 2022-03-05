<?php

namespace App\Admin\Controllers\Mogujie;

use App\Helper\Tree;
use App\Model\Admin\AdminMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    use Tree;
    public function index(Request $request)
    {
        $menuM = new AdminMenu();

        if (isset($request['submit'])) {
            $menuM->validate($request);
            $result = $menuM->addMenu($request);
            if ($result) {
                return redirect(route('menu'));
            }
        } else {

            $menus = $menuM->orderBy('order', 'DESC')->get()->toArray();
            $tree = $this->treeArray($this->getTreeLevel($menus));
            $menusHtml = $this->getMenuSelect($tree);

            $menusArr  = $this->getMenulists($tree);

            $icons = json_decode(file_get_contents('upload/icons.json'), true);
            return view('admin\mogujie\menu\index', compact('menusArr', 'menusHtml', 'icons'));
        }
    }

    public function getMenuInfo($id)
    {
        $menu = AdminMenu::withoutGlobalScope('status')->where('id', $id)->first();

        $menuInfo = $menu->toArray();
        $pTitle = AdminMenu::withoutGlobalScope('status')->where('id', $menuInfo['parent_id'])->value('title');
        $menuInfo['parent_title'] = $pTitle ?? 'Root';

        return $menuInfo;
    }

    public function destroy($id)
    {
        $menuM = new AdminMenu();
        $idString = $menuM->getChildernId($id);
        $idArray = explode(',', $idString);
        array_pop($idArray);

        if ($idArray) {
            $res = AdminMenu::withoutGlobalScope('status')->whereIn('id', $idArray)->update(['status' => 2]);
            if ($res) {
                return 'success';
            } else {
                return ['code' => 0, 'message' => 'error'];
            }
        }
        return ['code' => 0, 'message' => 'error'];
    }

    public function create()
    {
        $menuM = new AdminMenu();
        $menus = $menuM->orderBy('order', 'DESC')->get()->toArray();
        $tree = $this->treeArray($this->getTreeLevel($menus));
        $menusSelect = $this->getMenuSelect($tree);

        $icons = json_decode(file_get_contents('upload/icons.json'), true);
        return view('admin\mogujie\menu\create', compact('menusSelect', 'icons'));
    }

    public function store(Request $request)
    {
        $menuM = new AdminMenu();
        $menuM->validate($request);
        $result = $menuM->addMenu($request);
        if ($result) {
            $message = '创建成功！';
        } else {
            $message = '创建失败！';
        }
        return back()->with([
            'message'  => $message,
            'url'      => route('menu.index'),
            'jumpTime' => 1,
            'pageName' => '菜单'
        ]);
    }

    public function edit($id)
    {
        $menuM = new AdminMenu();
        $menus = $menuM->orderBy('order', 'DESC')->get()->toArray();
        $tree = $this->treeArray($this->getTreeLevel($menus));
        $menusSelect = $this->getMenuSelect($tree);

        $icons = json_decode(file_get_contents('upload/icons.json'), true);

        $menu = $menuM->withoutGlobalScope('status')->where('id', $id)->first();
        $menuInfo = $menu->toArray();
        $pTitle = $menuM->withoutGlobalScope('status')->where('id', $menuInfo['parent_id'])->value('title');
        $menuInfo['parent_title'] = $pTitle ?? 'Root';

        return view('admin\mogujie\menu\edit', compact('menusSelect', 'icons','menuInfo'));
    }

    public function update(Request $request, $id)
    {
        $menuModel = new AdminMenu();
        $menuModel->validate($request);
        $result = $menuModel->updateMenu($request,$id);
        if ($result) {
            $message = '修改成功！';
        } else {
            $message = '修改失败！';
        }
        return back()->with([
            'message'  => $message,
            'url'      => route('menu.index'),
            'jumpTime' => 1,
            'pageName' => '菜单'
        ]);
    }

    public function icon($name)
    {
        $search = [];
        $iconsArray = json_decode(file_get_contents('upload/icons.json'), true);
        foreach ($iconsArray as $icon) {
            if (strstr($icon, $name)) {
                $search[] = $icon; 
            }
        }
        if (trim($name) == 'none_search') {
            $search = $iconsArray;
        }
        
        return $search;
    }
}
