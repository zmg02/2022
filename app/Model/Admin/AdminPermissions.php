<?php

namespace App\Model\Admin;

use App\Model\BaseModel;
use Illuminate\Database\Eloquent\Builder;

class AdminPermissions extends BaseModel
{
    protected $table = 'admin_permissions';

    protected $fillable = ['parent_id', 'name', 'slug', 'http_method', 'http_path', 'order'];

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('order', 'DESC');
        });
    }

    public function validate($request)
    {
        $message = [
            'name.required' => '请填写名称',
            'slug.required' => '请填写Slug',
            'slug.unique' => 'Slug已被使用',
            'name.max' => '名称超出了最多长度',
            'slug.max' => 'Slug超出了最多长度',
        ];
        $request->validate([
            'name'      => 'required|max:255',
            'slug'      => 'required|unique:admin_permissions|max:255',
        ], $message);
    }


}
