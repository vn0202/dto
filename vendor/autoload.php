<?php

spl_autoload_register(function ($classname){

    $pathfile = str_replace('vendor','',__DIR__) . DIRECTORY_SEPARATOR . str_replace("\\","/",$classname). ".php";
    if(file_exists($pathfile))
    {
        include $pathfile;
    }

});