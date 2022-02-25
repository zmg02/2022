<?php

namespace App\Admin\Controllers\Mogujie;

use App\Model\Admin\AdminMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        $menuM = new AdminMenu();
        $menus = $menuM->get()->toArray();
        dd(menuTreeHtml(menuTree($menus)));
        $menus = menuTree($menus);

        return view('admin\mogujie\menu\index', compact('menus'));
    }

    public function post(Request $request)
    {
        dd($request);
        return 'success';
    }


}
