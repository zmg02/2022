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
            'slug.max' => 'Slug超出了最多长度'
        ];

        return $request->validate([
            'slug' => 'required|unique:admin_permissions|max:255',
            'name' => 'required|max:255'
        ], $message);
    }

    public function addPermission($request)
    {
        $this->name = $request->name;
        $this->slug = $request->slug;
        $this->http_method = $request->http_method ?? '';
        $this->http_path = $request->http_path ?? '';
        $this->order = $request->order ?? 1;
        $this->parent_id = $request->parent_id ?? 0;
        return $this->save();
    }

}
