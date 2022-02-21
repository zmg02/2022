<?php

namespace App\Http\Controllers\Mogujie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $arr = ['id'=>1,'content'=>'test'];
        return view('mogujie/home/index',compact('arr'));
    }
}
