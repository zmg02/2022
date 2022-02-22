<?php

namespace App\Http\Controllers\Mogujie;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function register(Request $request)
    {
        if (isset($request['submit'])) {
            $validateData = $request->validate([
               'email' => [
                   'required',
                   'unique:user',
                   'max:100',
                   'regex:/^[\w-]+@[\w-]+(\.[\w-]+)+$/S',
               ],
                'phone' => [
                    'required',
                    'unique:user',
                    'max:30',
                    'regex:/^1(?:3[4-9]|47|5[^4]|6\d|7[^1-4]|8\d|9[^4])\d{8}$/S',
                ],
                'password' => [
                    'required',
                    'max:6',
                    'regex:/^[\S]{6,}$/',
//                    'confirmed'
                ],
                'password_confirmation' => [
                    'required',
                    'same:password'
                ]
            ]);
            $userM = new User();
            $result = $userM->createUser($validateData);
            if ($result) {
                return redirect(url('mogujie'));
            }
        }
        return view('mogujie/index/register');
    }

    public function login(Request $request)
    {
        if (isset($request)) {
            $request->validate([
               'account' => [

               ],
               'password' =>[

               ]
            ]);
        }
        return view('mogujie/index/login');
    }
}
