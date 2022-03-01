<?php

namespace App\Admin\Controllers\Mogujie;

use App\Helper\Tree;
use App\Model\Admin\AdminMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    use Tree;
    public function index()
    {
        $menuM = new AdminMenu();
        $menus = $menuM->get()->toArray();

        $menusHtml = $this->getMenuLists($this->menuTree($this->getTree($menus)));

        $menusArr  = getMenuList($this->menuTree($this->getTree($menus)));

//        $a = getMenuUl(menuTree(getTree($menus)));
//        dd($menusHtml);
        $icons = json_decode(file_get_contents('upload/icons.json'),true);
        return view('admin\mogujie\menu\index', compact('menusArr','menusHtml','icons'));
    }

    public function post(Request $request)
    {
        $menuM = new AdminMenu();
        $validateData = $menuM->validate($request);

        dd($validateData);

        return 'success';
    }


}
