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

    public function delete($id)
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

    public function icon($name)
    {
        $search = [];
        $iconsArray = json_decode(file_get_contents('upload/icons.json'), true);
        foreach ($iconsArray as $icon) {
            if (strstr($icon, $name)) {
                $search[] = $icon; 
            }
        }
        
        return $search;
    }
}
