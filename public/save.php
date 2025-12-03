<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa($conn);

$data = [
    'nama' => $_POST['nama'],
    'nim' => $_POST['nim'],
    'prodi' => $_POST['prodi'],
    'angkatan' => $_POST['angkatan'],
    'status' => $_POST['status'],
    'foto' => null
];

if ($mahasiswa->create($data)) {
    header("Location: members.php");
    exit();
} else {
    echo "Gagal menyimpan data.";
}
if ($mahasiswa->create($data)) {
    header("Location: members.php");
    exit();
} else {
    echo "Gagal menyimpan data. NIM sudah ada.";
}
?>