<?php
// require necessary files
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa($conn);

$id = $_GET['id'] ?? null;
if ($id && $mahasiswa->delete($id)) {
    header("Location: members.php");
    exit();
} else {
    echo "Gagal menghapus data.";
}
?>