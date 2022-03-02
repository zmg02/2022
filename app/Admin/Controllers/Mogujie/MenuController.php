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

            $menus = $menuM->orderBy('order','DESC')->get()->toArray();

            $menusHtml = $this->getMenuSelect($this->menuTree($this->getTree($menus)));

            $menusArr  = $this->getMenulists($this->menuTree($this->getTree($menus)));

            $icons = json_decode(file_get_contents('upload/icons.json'),true);
            return view('admin\mogujie\menu\index', compact('menusArr','menusHtml','icons'));
        }

    }

//    public function post(Request $request)
//    {
//        $menuM = new AdminMenu();
//        $validateData = $menuM->validate($request);
//
//        dd($validateData);
//
//        return 'success';
//    }
    public function delete($id)
    {
        $menuM = new AdminMenu();
        $idString = $menuM->getChildernId($id);
        $idArray = explode(',', $idString);
        array_pop($idArray);

        if ($idArray) {
            $res = AdminMenu::withoutGlobalScope('status')->whereIn('id',$idArray)->update(['status' => 2]);
            if ($res) {
                return 'success';
            } else {
                return ['code'=>0,'message'=>'error'];
            }
        }
        return ['code'=>0,'message'=>'error'];
    }

}
