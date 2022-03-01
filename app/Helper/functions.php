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


function nbsp($multiple)
{
    $nbsp = '';
    for ($i=0; $i<=$multiple; $i++) {
        $nbsp .= "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    return $nbsp;
}

//regexHtml('upload/icons.blade.php', 'upload/icons.json');
function regexHtml($path, $pathTo)
{
    if (is_file($path)) {
        $html = file_get_contents($path);
//        $regexStr = '/<i\s+class=\"mdi\s+(.*?)\"><\/i>/Ss';
        $regexStr = '/<\/code><span>(.*?)<\/span><\/div>/Ss';
        preg_match_all($regexStr, $html, $matches);
        $iconsJson = json_encode($matches[1]);
        file_put_contents($pathTo,$iconsJson);
        return true;
    }
    return false;
}
