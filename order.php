<?php
    require "connection.php";
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $nomor = $_POST["nomor"];
    $alamat = $_POST["alamat"];

    $querySQL = "INSERT INTO tb_order (fullname, email, nomor, alamat)
                Values ('$fullname', '$email', '$nomor', '$alamat')";
    
    if(mysqli_query($conn, $querySQL)) { 
        header("Location: index.html");
        echo "Order Berhasil!";
    }else {
        echo "Order Tidak Berhasil" . mysqli_error($conn);
    }