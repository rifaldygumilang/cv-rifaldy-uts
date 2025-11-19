<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost'; 
$username = 'cvclassa_Rifaldy'; 
$password = 'Rival030605#';     
$database = 'cvclassa_Rifaldy_database'; 

$conn = new mysqli($host, $username, $password, $database);

function getCVData($conn) {
    $query = "SELECT * FROM biodata LIMIT 1";
    $result = $conn->query($query);
    $cv = $result->fetch_assoc();

    if ($cv) {

        $cv['pendidikan'] = $conn->query("SELECT * FROM pendidikan ORDER BY tahun_selesai DESC")->fetch_all(MYSQLI_ASSOC);
        $cv['pengalaman'] = $conn->query("SELECT * FROM pengalaman ORDER BY tahun_selesai DESC")->fetch_all(MYSQLI_ASSOC);
        $cv['keahlian'] = $conn->query("SELECT * FROM keahlian ORDER BY nama_keahlian ASC")->fetch_all(MYSQLI_ASSOC);
    }
    
    return $cv;
}

$data_cv = getCVData($conn);

if (!$data_cv) {
}

?>
