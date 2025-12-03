<?php
class Mahasiswa {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $sql = "SELECT * FROM mahasiswa";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM mahasiswa WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function existsByNim($nim) {
        $sql = "SELECT COUNT(*) FROM mahasiswa WHERE nim = :nim";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['nim' => $nim]);
        return $stmt->fetchColumn() > 0;
    }

    public function create($data) {
        // cek apakah NIM sudah ada
        if ($this->existsByNim($data['nim'])) {
            return false; // bisa diganti lempar exception atau pesan error
        }

        $sql = "INSERT INTO mahasiswa (nama, nim, prodi, angkatan, status, foto) 
                VALUES (:nama, :nim, :prodi, :angkatan, :status, :foto)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $sql = "UPDATE mahasiswa 
                SET nama=:nama, nim=:nim, prodi=:prodi, angkatan=:angkatan, status=:status, foto=:foto 
                WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    public function delete($id) {
        $sql = "DELETE FROM mahasiswa WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
?>