<?php

$day = date('d');
$month = date('m');
$year = date('Y');
$hour = date('H');



$greet = 'Добрый ночи';

if($hour >= 6 and $hour < 12){
    $greet = 'Доброе утро';
}elseif($hour >= 12 and $hour < 18){
    $greet = 'Добрый день';
}elseif($hour >= 18 and $hour < 24){
    $greet = 'Добрый вечер';
}


$menu = [
    ['href' => '/index.php?page=index', 'label' => 'Главня'],
    ['href' => '/index.php?page=table', 'label' => 'Таблица умножения'],
    ['href' => '/index.php?page=contacts', 'label' => 'Контакты']
];