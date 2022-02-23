<?php

namespace App\Admin\Controllers\Mogujie;

use App\Model\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function list()
    {
        $user = new User();
        $users = $user->paginate(15);
//        dd(config('user.status')[1]);

        return view('admin\mogujie\user\list',['users'=>$users]);
    }

    public function register()
    {

    }

    public function login()
    {

    }

}
