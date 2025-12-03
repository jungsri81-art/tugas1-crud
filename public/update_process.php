<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa($conn);

$id = $_POST['id'] ?? null;
if (!$id) {
    die("ID tidak ditemukan.");
}

$data = [
    'nama' => $_POST['nama'],
    'nim' => $_POST['nim'],
    'prodi' => $_POST['prodi'],
    'angkatan' => $_POST['angkatan'],
    'status' => $_POST['status'],
    'foto' => null
];

if ($mahasiswa->update($id, $data)) {
    header("Location: members.php");
    exit();
} else {
    echo "Update gagal.";
}
?>