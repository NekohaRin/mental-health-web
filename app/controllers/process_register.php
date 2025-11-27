<?php
session_start();
include '../config/koneksi.php';

if ($_POST['password'] == $_POST['konpass']) {
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $sql = mysqli_query($koneksi, "SELECT * from users where email ='$email'");
    $swl = mysqli_query($koneksi, "SELECT * from users where no_hp = '$no_hp'");
    if (mysqli_num_rows($sql) > 0 && mysqli_num_rows($swl) > 0) {
        header("Location: ../register.php?status=ada");
    } else if (mysqli_num_rows($sql) > 0) {
        header("Location: ../register.php?status=emailada");
    } else if (mysqli_num_rows($swl) > 0) {
        header("Location: ../register.php?status=nohpada");
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $simpan = mysqli_query($koneksi, "INSERT into users (username, password, email, no_hp, gender, tanggal_lahir) values ('$username', '$password', '$email', '$no_hp', '$gender', '$tanggal_lahir')");
        if ($simpan) {
            $_SESSION['username'] = $username;
            $baca = mysqli_query($koneksi, "INSERT * from users where username ='$username' and password = '$password' and email='$email' and no_hp='$no_hp'");
            $data = mysqli_fetch_assoc($baca);
            $_SESSION['id_user'] = $data['id_user'];
            header("Location: ../../index.php");
        }
    }
} else {
    header("Location: ../../public/pages/register.php?status=passwordsalah");
}
