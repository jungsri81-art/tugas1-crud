<?php
// Autoload class
spl_autoload_register(function ($class_name) {
    include __DIR__ . "/../class/" . $class_name . ".php";
});
try {
    $conn = new PDO("mysql:host=localhost;dbname=tugas1_crud", "root", "jungis");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
