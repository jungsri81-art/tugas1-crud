<?php
require_once __DIR__ . '/../inc/config.php';
require_once __DIR__ . '/../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa($conn);
$list = $mahasiswa->getAll();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
</head>
<body>
  <h1>Selamat datang di CRUD Mahasiswa</h1>
  <a href="create.php">Tambah Mahasiswa</a> | 
  <a href="members.php">Daftar Mahasiswa</a>
</body>
</html>
require_once("inc/config.php");

// Autoload class
spl_autoload_register(function ($class_name) {
    include __DIR__ . "/class/" . $class_name . '.php';
});

// Contoh penggunaan
$util = new Utility();
$user = new User($conn);
?>

// require necessary files
require_once 'inc/config.php';

// check if user is logged in

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Home</h1>
  </header>
  </header>
<?php Utility::showNav(); ?>
<main>
  <main>
    <section>
      <h2>Welcome to the Dashboard</h2>
      <p>This is your dashboard where you can manage your content. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, numquam illum dolor quia sapiente blanditiis possimus magnam fugiat beatae rerum. Nemo quae quas minus velit soluta aperiam aspernatur hic incidunt.</p>
      <p>Your data:
        <ul>
          <li>ID: </li>
          <li>Username: </li>
          <li>Name: </li>
          <li>City: </li>
          <li>Join Date: </li>
          <li>Last Login: </li>
        </ul>
      </p>
    </section>
  </main>
  
</body>
</html>
