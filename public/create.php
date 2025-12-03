<?php
// require necessary files
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../class/Utility.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Mahasiswa</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Tambah Data Mahasiswa</h1>
    <?php Utility::showNav(); ?>
  </header>

  <main>
    <section>
      <form action="save.php" method="post" id="form-mahasiswa">
        <div class="row">
          <label for="nama">Nama:</label>
          <input type="text" id="nama" name="nama" required>
        </div>

        <div class="row">
          <label for="nim">NIM:</label>
          <input type="text" id="nim" name="nim" required>
        </div>

        <div class="row">
          <label for="prodi">Prodi:</label>
          <select id="prodi" name="prodi" required>
            <option value="TI">TI</option>
            <option value="SI">SI</option>
          </select>
        </div>

        <div class="row">
          <label for="angkatan">Angkatan:</label>
          <input type="number" id="angkatan" name="angkatan" required>
        </div>

        <div class="row">
          <label for="status">Status:</label>
          <select id="status" name="status">
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
          </select>
        </div>

        <div class="row">
          <button type="submit">Simpan</button>
        </div>
      </form>
    </section>
  </main>
</body>
</html>