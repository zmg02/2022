<?php

namespace App\Http\Controllers;

class MogujieHomeController extends Controller
{
    public function index()
    {
        $arr = ['str'=>'haha'];
        return view('mogujie/home/index',compact('arr'));
    }

}