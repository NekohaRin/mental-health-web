<?php
    $server = "localhost";
    $user = "root";
    $password = "Sc1encen";
    $database = "kesehatan";

    $koneksi = mysqli_connect($server, $user, $password, $database);

    if (!$koneksi){
        die("Koneksi gagal: ".mysqli_connect_error());
    }

?>