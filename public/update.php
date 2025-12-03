<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa($conn);

// Ambil data lama berdasarkan ID
$id = $_GET['id'] ?? null;
if (!$id) {
    die("ID tidak ditemukan.");
}

$data = $mahasiswa->getById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        Nama: <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required><br>
        NIM: <input type="text" name="nim" value="<?= htmlspecialchars($data['nim']) ?>" required><br>
        Prodi: <input type="text" name="prodi" value="<?= htmlspecialchars($data['prodi']) ?>" required><br>
        Angkatan: <input type="number" name="angkatan" value="<?= htmlspecialchars($data['angkatan']) ?>" required><br>
        Status: 
        <select name="status">
            <option value="aktif" <?= $data['status']=='aktif'?'selected':'' ?>>Aktif</option>
            <option value="nonaktif" <?= $data['status']=='nonaktif'?'selected':'' ?>>Nonaktif</option>
        </select><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>