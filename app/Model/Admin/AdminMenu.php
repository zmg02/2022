<?php

namespace App\Model\Admin;

use App\Model\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class AdminMenu extends BaseModel
{
    protected $table = 'admin_menu';

    protected $fillable = ['parent_id', 'order', 'title', 'icon', 'uri'];
    /**
     * 指示是否自动维护时间戳
     *
     * @var bool
     */
//    public $timestamps = false;

    /**
     * 模型的「booted」方法
     * 全局作用域
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('status', function (Builder $builder) {
            $builder->where('status', '=', 1)->orderBy('order','DESC');
        });
    }

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
        $message = [
            'parent_id.required' => '必须选择上级ID',
            'title.required'  => '必须填写菜单名称',
        ];
        return $request->validate([
            'parent_id' => 'required',
            'title' => 'required|max:255'
        ], $message);
    }

    public function addMenu($request)
    {
        $this->parent_id = $request->parent_id;
        $this->order = $request->order;
        $this->title = $request->title;
        $this->icon = $request->icon ?? '';
        $this->uri = $request->uri ?? '';

        if (isset($request->id)) {
//            $this->id = $request->id;
            $icon = $request->icon ?? '';
            $uri =$request->uri ?? '';
            $update = ['parent_id' => $request->parent_id,'order' => $request->order,'title' => $request->title,'icon' => $icon,'uri' => $uri];
            $sqlRes = $this->where('id',$request->id)->update($update);
        } else {
            $sqlRes = $this->save();
        }

        return $sqlRes;
    }

    //返回该菜单的所有子菜单
    public function getChildernMenu($id, &$childern=[])
    {
        $menu = $this->where('parent_id',$id)->get();
        if (!empty($menu->toArray())) {
            $childern[] = $this->where('id',$id)->first()->toArray();
            foreach ($menu->toArray() as $item) {
                $childern[] = $this->getChildernMenu($item['id']);
            }
        } else {
            $childern[] = $this->where('id',$id)->first()->toArray();
        }
        return $childern;
    }
    //返回当前菜单和所有子菜单的ID
    public function getChildernId($id, &$ids='')
    {
        $menu = $this->where('status','<>', 2)->where('parent_id',$id)->pluck('id');
        if (!empty($menu->toArray())) {
            $ids .= $this->where('status','<>', 2)->where('id',$id)->value('id') . ',';
            foreach ($menu->toArray() as $val) {
                $ids .= $this->getChildernId($val);
            }
        } else {
            $ids .= $this->where('status','<>', 2)->where('id',$id)->value('id') . ',';
        }

        return $ids;
    }
}
