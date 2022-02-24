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
        $loginError = [];
        if (isset($request['submit'])) {
            $validateData = $request->validate([
               'account' => [
                    'required'
               ],
               'password' =>[
                    'required'
               ]
            ]);
            $userInfo = User::where('email',$validateData['account'])->orWhere('phone',$validateData['account'])->first();
            if (empty($userInfo->toArray())) {
                $loginError['code'] = 4001;
                $loginError['message'] = '未找到用户，请确认填写的邮箱或手机号码正确！';
                return view('mogujie/index/login',compact('loginError'));
            }
            if (md5($validateData['password']) !== $userInfo['password']) {
                $loginError['code'] = 4002;
                $loginError['message'] = '密码错误，请重新输入！';
                return view('mogujie/index/login',compact('loginError'));
            }
            $key = 'user'.$validateData['account'];
//            $request->session()->put($key, json_encode($validateData));
            session([$key=>json_encode($validateData)]);
            return redirect(url('mogujie'));
        }
        return view('mogujie/index/login');
    }

    public function logout()
    {
        session()->flush();
        return view('mogujie/index/login');
    }
}
