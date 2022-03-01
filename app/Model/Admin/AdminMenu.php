<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    protected $table = 'admin_menu';

    protected $fillable = ['parent_id', 'order', 'title', 'icon', 'uri'];

    public function roles()
    {
        $relatedModel = new AdminRoles();
        return $this->belongsToMany($relatedModel, 'admin_roles', 'menu_id', 'role_id');
    }

    public function permissions()
    {
        $relateModel = new AdminPermissions();
        return $this->belongsToMany($relateModel, 'admin_permissions', 'menu_id', 'permission_id');
    }

    public function validate($request)
    {
        return $request->validate([
            'parent_id' => [
                'required',
            ],
            'order' => [
                'required',
            ],
            'title' => [
                'required',
                'max:255',
            ]
        ]);
    }
}
