<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa($conn);
$list = $mahasiswa->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Daftar Mahasiswa</h1>
    <?php Utility::showNav(); ?>
  </header>

  <main>
    <section>
      <h2>Tabel Mahasiswa</h2>
      <table border="1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if (empty($list)) {
            echo '<tr><td colspan="7">Belum ada data mahasiswa.</td></tr>';
        } else {
            foreach ($list as $m) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($m['id']) . '</td>';
                echo '<td>' . htmlspecialchars($m['nama']) . '</td>';
                echo '<td>' . htmlspecialchars($m['nim']) . '</td>';
                echo '<td>' . htmlspecialchars($m['prodi']) . '</td>';
                echo '<td>' . htmlspecialchars($m['angkatan']) . '</td>';
                echo '<td>' . htmlspecialchars($m['status']) . '</td>';
                echo '<td>
                        <a href="update.php?id=' . $m['id'] . '">Edit</a> | 
                        <a href="delete.php?id=' . $m['id'] . '" onclick="return confirm(\'Yakin hapus?\')">Delete</a>
                      </td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
      </table>
    </section>
  </main>
</body>
</html>