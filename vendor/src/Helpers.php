<?php
namespace vendor\src;
class Helpers{
    public static function swap(&$a, &$b)
    {
        $c = $a;
        $a = $b;
        $b = $c;
    }
    public  static  function swapArray(&$ar1,&$ar2){
        foreach ($ar1 as $key => $val)
        {
            static :: swap($ar1[$key],$ar2[$key]);
        }
    }
}