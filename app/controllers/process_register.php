<?php
// session_start();
// include '../config/koneksi.php';
// $password = $_POST['password'];
// $konpass = $_POST['konpass'];

// // if ($_POST['password'] == $_POST['konpass']) {
// if ($password == $konpass) {
//     $email = $_POST['email'];
//     $no_hp = $_POST['no_hp'];
//     $sql = mysqli_query($koneksi, "SELECT * from users where email ='$email'");
//     $swl = mysqli_query($koneksi, "SELECT * from users where no_hp = '$no_hp'");
//     if (mysqli_num_rows($sql) > 0 && mysqli_num_rows($swl) > 0) {
//         header("Location: ../register.php?status=ada");
//     } else if (mysqli_num_rows($sql) > 0) {
//         header("Location: ../register.php?status=emailada");
//     } else if (mysqli_num_rows($swl) > 0) {
//         header("Location: ../register.php?status=nohpada");
//     } else {
//         $username = $_POST['username'];
//         $password = $_POST['password'];
//         $gender = $_POST['gender'];
//         $tanggal_lahir = $_POST['tanggal_lahir'];
//         $simpan = mysqli_query($koneksi, "INSERT into users (username, password, email, no_hp, gender, tanggal_lahir) values ('$username', '$password', '$email', '$no_hp', '$gender', '$tanggal_lahir')");
//         if ($simpan) {
//             $_SESSION['username'] = $username;
//             $baca = mysqli_query($koneksi, "INSERT * from users where username ='$username' and password = '$password' and email='$email' and no_hp='$no_hp'");
//             $data = mysqli_fetch_assoc($baca);
//             $_SESSION['id_user'] = $data['id_user'];
//             header("Location: ../../public/pages/dashboard.php");
//         }
//     }
// } else {
//     header("Location: ../../public/pages/register.php?status=passwordsalah");
// }
session_start();
include '../config/koneksi.php';

// Cek apakah password & konfirmasi cocok
if ($_POST['password'] !== $_POST['konpass']) {
    header("Location: ../../public/pages/register.php?status=passwordsalah");
    exit();
}

$username       = trim($_POST['username']);
$email          = trim($_POST['email']);
$no_hp          = trim($_POST['no_hp']);
$gender         = $_POST['gender'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$password_plain = $_POST['password'];

// Hash password agar aman
$password_hash = password_hash($password_plain, PASSWORD_DEFAULT);

// -------------------------------
// CEK EMAIL DAN NO HP (AMANKAN)
// -------------------------------
$stmt = $koneksi->prepare("SELECT email, no_hp FROM users WHERE email = ? OR no_hp = ?");
$stmt->bind_param("ss", $email, $no_hp);
$stmt->execute();
$result = $stmt->get_result();

$email_terdaftar = false;
$nohp_terdaftar = false;

while ($row = $result->fetch_assoc()) {
    if ($row['email'] === $email) {
        $email_terdaftar = true;
    }
    if ($row['no_hp'] === $no_hp) {
        $nohp_terdaftar = true;
    }
}

if ($email_terdaftar && $nohp_terdaftar) {
    header("Location: ../../public/pages/register.php?status=ada");
    exit();
} elseif ($email_terdaftar) {
    header("Location: ../../public/pages/register.php?status=emailada");
    exit();
} elseif ($nohp_terdaftar) {
    header("Location: ../../public/pages/register.php?status=nohpada");
    exit();
}

// -------------------------------
// INSERT DATA USER (AMANKAN)
// -------------------------------
$stmt = $koneksi->prepare(
    "INSERT INTO users (username, password, email, no_hp, gender, tanggal_lahir) 
     VALUES (?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param("ssssss", $username, $password_hash, $email, $no_hp, $gender, $tanggal_lahir);

if ($stmt->execute()) {

    // Ambil ID user yang baru terbuat
    $id_user = mysqli_insert_id($koneksi);

    // Set sesi
    $_SESSION['username'] = $username;
    $_SESSION['id_user'] = $id_user;

    header("Location: ../../public/pages/dashboard.php");
    exit();
} 
else {
    header("Location: ../../public/pages/register.php?status=error");
    exit();
}

?>