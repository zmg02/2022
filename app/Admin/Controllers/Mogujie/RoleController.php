<?php

namespace App\Admin\Controllers\Mogujie;

use App\Helper\Tree;
use App\Model\Admin\AdminMenu;
use App\Model\Admin\AdminRoles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roleModel = new AdminRoles();
        $query = $roleModel->query();
        if (!empty($request['keywords'])) {
            $query = $query->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . trim($request['keywords']) . '%')->orWhere('slug', 'like', '%' . trim($request['keywords']) . '%');
            });
        }
        $roles = $query->paginate(15);
        return view('admin\mogujie\role\index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\mogujie\role\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roleModel = new AdminRoles();
        $roleModel->validate($request);
        $result = $roleModel->addRole($request);
        if ($result) {
            $message = '创建成功！';
        } else {
            $message = '创建失败！';
        }
        return back()->with([
            'message'  => $message,
            'url'      => route('role.index'),
            'jumpTime' => 2,
            'pageName' => '角色列表'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roleModel = new AdminRoles();
        $role = $roleModel->where('id', $id)->first()->toArray();
        return view('admin\mogujie\role\show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roleModel = new AdminRoles();
        $role = $roleModel->where('id', $id)->first()->toArray();

        return view('admin\mogujie\role\edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roleModel = new AdminRoles();
        $message = [
            'name.required' => '请填写角色名称！',
            'slug.required' => '请填写角色别称！',
            'name.max' => '角色名称不能超过255字节！',
            'slug.max' => '角色别称不能超过255字节！',
        ];
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255'
        ], $message);
        $result = $roleModel->editRole($request, $id);
        if ($result) {
            $message = '修改成功！';
        } else {
            $message = '修改失败！';
        }
        return back()->with([
            'message'  => $message,
            'url'      => route('role.index'),
            'jumpTime' => 2,
            'pageName' => '角色列表'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roleModel = new AdminRoles();
        $result = $roleModel->where('id', $id)->update(['status'=>2]);
        if ($result) {
            return 'success';
        } else {
            return false;
        }
    }

}
