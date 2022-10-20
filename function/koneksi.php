<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "peduli_diri";

$koneksi = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi ke database gagal");
