<?php

use App\Model\User;

function add($num1, $num2) {
    return intval($num1) + intval($num2);
}

//用户数据填充
function addUsers($number) {
    //        $user = factory(User::class, $number)->states('status')->make();
    $user = factory(User::class, $number)->create();
    dd($user);
}
