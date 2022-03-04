<?php

namespace App\Admin\Controllers\Mogujie;

use App\Helper\Tree;
use App\Model\Admin\AdminPermissions;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    use Tree;
    public function index()
    {
        $permissionModel = new AdminPermissions();
        $permissionArray = $permissionModel->get()->toArray();
        $tree = $this->treeArray($this->getTreeLevel($permissionArray));

        $permissions  = $this->getPermissionlists($tree);
        // dd($permissions);
        return view('admin/mogujie/permission/index', compact('permissions'));
    }

    public function create()
    {

        return view('admin/mogujie/permission/create');
    }

    public function store(Request $request)
    {

        return $request;
    }

    public function show($id)
    {

        return view('admin/mogujie/permission/show');
    }

    public function edit($id)
    {

        return view('admin/mogujie/permission/edit');
    }

    public function update(Request $request, $id)
    {

        return $request;
    }

    public function destory($id)
    {
        return $id;
    }
}
