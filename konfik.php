<?php

// Koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$db_name = "ck_pialang";

$db = new mysqli($server, $username, $password, $db_name);

if (!$db){
    die("Gagal terhubung: ".$db->connect_error);
}

?>