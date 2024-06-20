<?php
    $servername = "localhost";
    $database = "csorder";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Tidak Terkoneksi : " .mysqli_connect_error());
    } else {
        echo "Koneksi Berhasil";
    }