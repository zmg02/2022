<?php

namespace App\Model\Admin;

use App\Model\BaseModel;
use App\Model\User;
use Illuminate\Database\Eloquent\Builder;

class AdminRoles extends BaseModel
{
    protected $table = 'admin_roles';

    protected $fillable = ['slug','name'];

    /**
     * 全局作用域
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('status', function(Builder $builder) {
            $builder->where('status',1);
        });
    } 

    public function menu()
    {
        $relatedModel = new AdminMenu();
        return $this->belongsToMany($relatedModel, 'admin_menu', 'role_id', 'menu_id');
    }

    public function permission()
    {
        $relatedModel = new AdminPermissions();
        return $this->belongsToMany($relatedModel, 'admin_permissions', 'role_id', 'permission_id');
    }

    public function user()
    {
        $relatedModel = new User();
        return $this->belongsToMany($relatedModel, 'user', 'role_id', 'user_id');
    }

    public function validate($request)
    {
        $message = [
            'name.required' => '请填写角色名称！',
            'slug.required' => '请填写角色别称！',
            'name.unique' => '角色重复了！',
            'slug.unique' => '角色别称重复了！',
            'name.max' => '角色名称不能超过255字节！',
            'slug.max' => '角色别称不能超过255字节！',
        ];
        return $request->validate([
            'name' => 'required|unique:admin_roles|max:255',
            'slug' => 'required|unique:admin_roles|max:255'
        ], $message);
    }

    public function addRole($request)
    {
        $this->name = $request->name;
        $this->slug = $request->slug;
        $result = $this->save();
        return $result;
    }
    public function editRole($request, $id)
    {
        $roleModel = $this->find($id);
        $roleModel->name = $request->name;
        $roleModel->slug = $request->slug;
        $result = $roleModel->save();
        return $result;
    }
}
