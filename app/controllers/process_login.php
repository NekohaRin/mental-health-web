
<?php
session_start();
include '../config/koneksi.php';
$login = $_GET['login']; // "email"

$username = $_POST['username'];
$password = $_POST['password'];
if ($_GET['login'] == 'email') {
    $email = $_POST['email'];
    $sql = mysqli_query($koneksi, "SELECT * from users where username ='$username' and email = '$email' and password = '$password'");
} else if ($_GET['login'] == 'nohp') {
    $no_hp = $_POST['no_hp'];
    $sql = mysqli_query($koneksi, "SELECT * from users where username ='$username' and no_hp = '$no_hp' and password = '$password'");
}
if (mysqli_num_rows($sql) > 0) {
    $data = mysqli_fetch_assoc($sql);
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];

    if ($data['username'] == 'atmin19jt') {
        header("Location: ../../public/pages/dokter_list.php");
    } else {
        header("Location: ../../public/pages/dashboard.php");
    }
} else {
    if ($_GET['login'] == 'email') {
        header("Location: ../../public/pages/login_email.php?status=gagal");
    } else if ($_GET['login'] == 'nohp') {
        header("Location: ../../public/pages/login_nohp.php?status=gagal");
    }
}