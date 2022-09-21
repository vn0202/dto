<?php
use vendor\src\User;

spl_autoload_register(function ($classname){
    $pathfile = __DIR__ . DIRECTORY_SEPARATOR . str_replace("\\","/",$classname). ".php";
    if(file_exists($pathfile))
    {
        include $pathfile;
    }

});

$array = [
    ['name' => 'Nguyễn Gia Hào','age' => '23', 'email' => 'giahao9899@gmail.com', 'phone' => '01283180231'],
    ['name' => 'VNP Group','age' => '15', 'email' => 'vnp@gmail.com', 'phone' => '01283180231'],
    ['name' => 'MinhHN','age' => '21', 'email' => 'nhatminh7721@gmail.com', 'phone' => '0943199776'],
    ['name' => 'Phong','age' => '19', 'email' => 'phong@gmail.com', 'phone' => '0348203434'],
    ['name' => 'Hưng','age' => '21', 'email' => 'hung@gmail.com', 'phone' => '04394802384'],
    ['name' => 'Đăng','age' => '20', 'email' => 'dang@gmail.com', 'phone' => '10230121'],
    ['name' => 'Chiến','age' => '22', 'email' => 'chien@gmail.com', 'phone' => '34230429834'],
];

$user = User::from($array);
$book = \vendor\src\Book::collection($array);
print_r($book->all());