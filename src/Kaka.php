<?php

namespace App;

class Kaka
{
    public function test()
    {
        return 'kaka';
    }

    public function kaka2()
    {
        if (false) {
            return 'ssss';
        }
        $t = 'kaka2';
        if (true) {
            $k = $t;
        }

        return $k;
    }
//
//    public function kaka3()
//    {
//        return 'kaka4';
//    }
}
