<?php

use vendor\src\User;

include 'vendor/autoload.php';

$array = [
    ['name' => "Nguyen Gia Hao ", 'age' => 24, 'address' => 'Ha Noi'],
    ['name' => "Nguyen Van A", 'age' => 18, 'address' => 'Nam Dinh'],
    ['name' => 'Vu Van A', 'age' => 20, 'address' => 'Thai Binh'],
    ['name' => 'Le van Chien', 'age' => 22, 'address' => "Hai Phong"]
];

$user = User::from(['name' => 'Vu Van Nghia', 'email' => 'nghiavuxp0202@gmail.com']);
$user->name = "Nguyen Gia Hao";
$book = \vendor\src\Book::collection($array);
print_r($book->all());