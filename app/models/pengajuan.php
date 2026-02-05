<?php
// ==========================================
// MODEL: Pengajuan Bantuan Sosial
// Bertugas berinteraksi langsung dengan database
// ==========================================
class Pengajuan {

    // Properti untuk menyimpan koneksi database (PDO)
    private $db;

    // Constructor: menerima koneksi dari controller
    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // ==========================================
    // Fungsi untuk MENYIMPAN data pengajuan
    // ==========================================
    public function insert($data) {

        // Query SQL menggunakan prepared statement
        $sql = "INSERT INTO pengajuan 
        (nama, nik_encrypted, pendapatan, provinsi, kota, kecamatan, kelurahan, rt, rw, ktp_encrypted)
        VALUES (?,?,?,?,?,?,?,?,?,?)";

        // Siapkan query
        $stmt = $this->db->prepare($sql);

        // Eksekusi query dengan data dari form
        return $stmt->execute($data);
    }

    // ==========================================
    // Fungsi untuk MENGAMBIL semua data pengajuan
    // (digunakan di dashboard admin)
    // ==========================================
    public function all() {

        // Jalankan query SELECT
        $stmt = $this->db->query("SELECT * FROM pengajuan");

        // Ambil semua data sebagai array asosiatif
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
