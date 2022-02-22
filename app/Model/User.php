<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'icon', 'session_id', 'order_count', 'payment_count', 'payment_price', 'come_from', 'login_count', 'last_login_time', 'last_login_ip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
//        'create_time' => 'datetime',
    ];
    /**
     * 指示是否自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
    //用户注册，待修改
    public function createUser($userInfo)
    {
//        $this->name = '张三';
        $this->email = $userInfo['email'];
        $this->phone = $userInfo['phone'];
        $this->password = md5($userInfo['password']);
//        $this->icon = '/img/a.jpg';
//        $this->session_id = session_id();
        $this->come_from = 'PC';
        $this->login_count += 1;
        $this->last_login_time = time();
        $this->last_login_ip = $_SERVER["REMOTE_ADDR"];
        $this->create_time = time();
        $this->update_time = time();
        $this->save();

        return true;
    }
}
