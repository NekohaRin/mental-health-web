<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM dokter WHERE id_dokter='$id'");

header("Location: ../../public/pages/dokter_list.php");
