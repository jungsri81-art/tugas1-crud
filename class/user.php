<?php
class User {
    private $conn;

    public function __construct($dbConn) {
        $this->conn = $dbConn;
    }

    // Contoh fungsi: ambil semua member
    public function getAllMembers() {
        $sql = "SELECT id, username, name, city, join_date, last_login FROM members";
        $result = $this->conn->query($sql);
        return $result;
    }

    // Contoh fungsi: tambah member baru
    public function createMember($username, $password, $name, $city) {
        $stmt = $this->conn->prepare("INSERT INTO members (username, password, name, city, join_date) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $username, $password, $name, $city);
        return $stmt->execute();
    }
}
?>