<?php
session_start();
include '../config/koneksi.php';

if (isset($_POST['submit'])) {

    $nama_dokter = $_POST['nama_dokter'];
    $spesialis   = $_POST['spesialis'];
    $harga_min   = $_POST['harga_min'];
    $harga_max   = $_POST['harga_max'];

    // Validasi sederhana
    if ($harga_min > $harga_max) {
        header("Location: ../../public/pages/dokter_tambah.php?status=harga_salah");
        exit;
    }

    $query = "
        INSERT INTO dokter (nama_dokter, spesialis, harga_min, harga_max)
        VALUES ('$nama_dokter', '$spesialis', '$harga_min', '$harga_max')
    ";

    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
        header("Location: ../../public/pages/dokter_list.php?status=berhasil");
        exit;
    } else {
        header("Location: ../../public/pages/dokter_tambah.php?status=gagal");
        exit;
    }
} else {
    header("Location: ../../public/pages/dokter_tambah.php");
    exit;
}
?>
<?php
include '../../app/config/koneksi.php';

$nama = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

mysqli_query($koneksi, "
    INSERT INTO dokter (nama_dokter, spesialis, email, no_hp)
    VALUES ('$nama', '$spesialis', '$email', '$no_hp')
");

header("Location: ../../public/pages/dokter_list.php");
?>
