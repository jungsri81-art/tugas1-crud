<?php
class Utility {
    public static function sanitize($input) {
        return htmlspecialchars(trim($input));
    }

    public static function showNav() {
        echo '
        <nav>
            <a href="index.php">Home</a> |
            <a href="create.php">Tambah Data</a> |
            <a href="members.php">Daftar Member</a> |
            <a href="logout.php">Logout</a>
        </nav>
        ';
    }
}
?>
class Utility {
    // Fungsi untuk menampilkan navigasi
    public static function showNav() {
        echo "Home | Tambah Data | Daftar Member | Logout";
    }

    // Fungsi untuk sanitasi input
    public static function sanitize($input) {
        return htmlspecialchars(trim($input));
    }
}
?>
class Utility {
    public static function sanitize($input) {
        return htmlspecialchars(trim($input));
    }

    // Tambahkan fungsi lain sesuai kebutuhan
}
?>
        <nav>
            <a href="index.php">Home</a> |
            <a href="create.php">Tambah Data</a> |
            <a href="members.php">Daftar Member</a> |
            <a href="logout.php">Logout</a>
        </nav>
        <hr>
        ';
    }

    // fungsi lain seperti sanitize, dll bisa ditambahkan di sini
}
?>
class Utility {
    // Contoh fungsi sederhana untuk sanitasi input
    public static function sanitize($input) {
        return htmlspecialchars(trim($input));
    }

    // Bisa ditambah fungsi lain sesuai kebutuhan
}
?>