<?php
declare(strict_types=1);

$cols = $_GET['cols'] ?? 8;
$rows = $_GET['rows'] ?? 10;
$color =  $_SESSION['color'] ??  'lightblue';

$menu = [
    ['href' => 'index.php', 'link' => 'Домой'],
    ['href' => 'index.php?id=about', 'link' => 'О нас'],
    ['href' => 'index.php?id=contact', 'link' => 'Контакты'],
    ['href' => 'index.php?id=table', 'link' => 'Таблица умножения'],
    ['href' => 'index.php?id=calc', 'link' => 'Калькулятор']
];
?>
