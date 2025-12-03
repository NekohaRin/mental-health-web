<?php
include '../../app/config/koneksi.php'; //koneksi
include '../../app/config/session_protected.php'; //session_protected
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MindEase</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../assets/img/mindease.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-lime-50">
    <nav class="flex flex-row max-w-full mx-auto justify-between items-center mt-3">
        <h2 class="ml-9 text-3xl hover:text-lime-400 font-semibold">MindEase</h2>
        <ul class="list-none flex flex-row gap-x-6 bg-lime-200 px-1.5 py-2 rounded-full">
            <li><a href="../index.php" class=" bg-lime-50 px-4 rounded-full py-1.5">Beranda</a></li>
            <li><a href="teskesehatan.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tes Kesehatan</a></li>
            <li><a href="article&tips.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Artikel & Tips</a></li>
            <li><a href="daftarKonsultasi.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Daftar Konsultasi</a></li>
            <li><a href="#" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tentang Kami</a></li>
        </ul>
        <!-- <a href="pages/login_email.php" class="mr-9 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400">Login</a> -->
        <p class="mr-9 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400"><?php echo $_SESSION['username'] ?></p>
    </nav>

</body>

</html>