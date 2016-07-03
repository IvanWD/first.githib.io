<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$title = 'Главная';
$page_title = "Сегодня $day день $month месяц $year год";
$include = 'index.php';


switch ($page) {
    case 'table':
        $title = 'Таблица Умножения';
        $page_title = 'Таблица Умножения';
        $include = 'table.php';
        break;
    case 'contacts':
        $title = 'Контакты';
        $page_title = 'Контакты';
        $include = 'contacts.php';
        break;

}
