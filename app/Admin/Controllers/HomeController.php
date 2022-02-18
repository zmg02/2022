<?php

namespace App\Admin\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $id = [1];
        return view('admin.home',compact('id'));
    }
}
