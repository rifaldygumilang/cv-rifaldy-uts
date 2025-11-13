<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$username = 'root'; 
$password = '';      
$database = 'cv_uts'; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {

    die("Koneksi Database Gagal: " . $conn->connect_error);
}

function getCVData($conn) {
    
    $query = "SELECT * FROM biodata LIMIT 1";
    $result = $conn->query($query);
    $cv = $result->fetch_assoc();

    if ($cv) {
        $biodata_id = $cv['id'];
        

        $cv['pendidikan'] = $conn->query("SELECT * FROM pendidikan WHERE biodata_id = $biodata_id ORDER BY tahun_selesai DESC")->fetch_all(MYSQLI_ASSOC);
        $cv['pengalaman'] = $conn->query("SELECT * FROM pengalaman WHERE biodata_id = $biodata_id ORDER BY tahun_selesai DESC")->fetch_all(MYSQLI_ASSOC);
        $cv['keahlian'] = $conn->query("SELECT * FROM keahlian WHERE biodata_id = $biodata_id ORDER BY nama_keahlian ASC")->fetch_all(MYSQLI_ASSOC);
    }
    
    return $cv;
}

$data_cv = getCVData($conn);

if (!$data_cv) {
    die("ERROR: Data CV (Tabel Biodata) tidak ditemukan. Pastikan Anda sudah mengisi data di phpMyAdmin.");
}
?>