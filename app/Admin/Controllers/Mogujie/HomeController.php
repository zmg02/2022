<?php

namespace App\Admin\Controllers\Mogujie;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd($user);
        return view('admin\mogujie\index');
    }





}
