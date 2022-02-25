<?php

namespace App\Http\Middleware;

use App\Model\Admin\AdminMenu as ModelAdminMenu;
use App\Model\User;
use Closure;

class AdminMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //权限判断
        $menuM = new ModelAdminMenu();
        $menus = $menuM->get()->toArray();
        $menus = menuTree($menus);
        view()->share('menus',$menus);

        return $next($request);
    }
}
