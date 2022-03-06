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


        return view('admin/mogujie/permission/index', compact('permissions'));
    }

    public function create()
    {
        $permissionModel = new AdminPermissions();
        $permissionArray = $permissionModel->get()->toArray();
        $tree = $this->treeArray($this->getTreeLevel($permissionArray));

        $permissionSelect = $this->getPermissionSelect($tree);
        return view('admin/mogujie/permission/create', compact('permissionSelect'));
    }

    public function store(Request $request)
    {

        $permissionModel = new AdminPermissions();
        $permissionModel->validate($request);
        $result = $permissionModel->addPermission($request);
        if ($result) {
            $message = '创建成功！';
        } else {
            $message = '创建失败！';
        }
        return back()->with([
            'message'  => $message,
            'url'      => route('permission.index'),
            'jumpTime' => 1,
            'pageName' => '权限'
        ]);
    }

    // public function show($id)
    // {
    //     return view('admin/mogujie/permission/show');
    // }

    public function edit($id)
    {
        $permissionModel = new AdminPermissions();
        $permission = $permissionModel->where('id', $id)->first()->toArray();
        $permission['parent_name'] = $permissionModel->where('id', $permission['parent_id'])->value('name');

        $permissionArray = $permissionModel->get()->toArray();
        $tree = $this->treeArray($this->getTreeLevel($permissionArray));
        $permissionSelect = $this->getPermissionSelect($tree);

        return view('admin/mogujie/permission/edit',compact('permission','permissionSelect'));
    }

    public function update(Request $request, $id)
    {
        $permissionModel = new AdminPermissions();
        $permissionModel->validate($request,$id);
        $result = $permissionModel->editPermission($request, $id);
        if ($result) {
            $message = '修改成功！';
        } else {
            $message = '修改失败！';
        }
        return back()->with([
            'message'  => $message,
            'url'      => route('permission.index'),
            'jumpTime' => 1,
            'pageName' => '权限列表'
        ]);
    }

    public function destroy($id)
    {
        $permissionModel = new AdminPermissions();
        $ids = $permissionModel->getChildrenIds($id);
        $idsArray = explode(',', $ids);
        array_pop($idsArray);
        
        $result = $permissionModel->withoutGlobalScope('status')->whereIn('id',$idsArray)->update(['status'=>2]);

        if ($result) {
            return 'success';
        } else {
            return 'error';
        }
    }
}
