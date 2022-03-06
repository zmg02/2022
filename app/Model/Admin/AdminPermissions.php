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
            $builder->where('status', 1)->orderBy('order', 'DESC');
        });
    }

    public function validate($request, $id = null)
    {
        $message = [
            'name.required' => '请填写名称',
            'slug.required' => '请填写Slug',
            'slug.unique' => 'Slug已被使用',
            'name.max' => '名称超出了最多长度',
            'slug.max' => 'Slug超出了最多长度'
        ];

        return $request->validate([
            'slug' => 'required|max:255|unique:admin_permissions,slug,' . $id,
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

    public function editPermission($request, $id)
    {
        // $permission = $this->where('id', $id)->find($id);
        $update = [
            'parent_id' => $request->parent_id ?? 0,
            'name' => $request->name,
            'slug' => $request->slug,
            'http_method' => $request->http_method ?? '',
            'http_path' => $request->http_path ?? '',
            'order' => $request->order ?? 1,
        ];
        $result = $this->where('id', $id)->update($update);

        return $result;
    }

    //返回子权限id
    public function getChildrenIds($id, &$ids = '')
    {
        $children = $this->where('parent_id', $id)->pluck('id')->toArray();
        if ($children) {
            $ids .= $this->withoutGlobalScope('status')->where('id', $id)->where('status','<>',2)->value('id') . ',';
            foreach ($children as $item) {
                $ids .= $this->getChildrenIds($item);
            }
        } else {
            $ids .= $this->withoutGlobalScope('status')->where('id',$id)->where('status','<>',2)->value('id') . ',';
        }
        return $ids;
    }
}
