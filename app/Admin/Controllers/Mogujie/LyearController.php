<?php

namespace App\Admin\Controllers\Mogujie;

class LyearController extends Controller
{
    public function rnameFile()
    {
        $dirArr = [];
        $path = $_SERVER['DOCUMENT_ROOT'] . '/mogujie';
        if (is_dir($path)) {
            $dir = opendir($path);
            while ($name = readdir($dir)) {
                if ($name != '.' && $name != '..') {
                    $ordName = $path . '/' . $name;

                    $regex = '/[-|_]/';
                    $arr = preg_split($regex,$name);
                    if (count($arr) > 1) {
                        $newName = array_pop($arr);
                        $newName = $path . '/' . $newName;
                        $res = rename($ordName,$newName);
                        print_r($res);
                    }
                }
            }
        } else {
            echo '不是目录';
        }

        return $dirArr;
    }

    public function index($fileName = 'index')
    {
        return view("admin\mogujie\\$fileName");
    }


}
