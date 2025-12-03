<?php

// Start session

// simple autoload
spl_autoload_register(function ($class_name) {
    include 'class/' . $class_name . '.php';
});

// database config
const DB_HOST = 'localhost';
const DB_USER = 'root';       // sesuaikan dengan user MySQL Anda
const DB_PASS = 'jungis';   // sesuaikan dengan password MySQL Anda
const DB_NAME = 'bb243';   // sesuaikan dengan nama database yang sudah dibuat
// Define base URL

// navigasi config
const NAV_PAGES = [
    ['title' => 'Home',    'url' => 'index.php'],
    ['title' => 'Members', 'url' => 'members.php'],
    ['title' => 'New',     'url' => 'create.php'],
    ['title'=> 'profile', 'url' => 'profile.php'],
    ['title' => 'Logout',  'url' => 'logout.php']
];

