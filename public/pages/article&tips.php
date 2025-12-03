<?php
session_start();
include '../../app/config/koneksi.php'; //koneksi
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
            <li><a href="../index.php" class=" hover:bg-lime-50 px-4 rounded-full py-1.5">Beranda</a></li>
            <li><a href="teskesehatan.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tes Kesehatan</a></li>
            <li><a href="#" class="bg-lime-50 px-4 rounded-full py-1.5">Artikel & Tips</a></li>
            <li><a href="daftarKonsultasi.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Daftar Konsultasi</a></li>
            <li><a href="about.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tentang Kami</a></li>
        </ul>
        <!-- <a href="login_email.php" class="mr-9 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400">Login</a> -->
        <p class="mr-9 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400"><?php echo $_SESSION['username'] ?></p>
    </nav>
    <div class="container mx-auto py-8 px-4">

        <!-- TITLE -->
        <h1 class="text-3xl font-bold mb-6 text-center">Artikel & Tips</h1>
        <p class="text-center text-gray-600 mb-10">Kumpulan artikel terpercaya tentang kesehatan mental.</p>

        <!-- FEATURED ARTICLE -->
        <div class="relative bg-white rounded-3xl overflow-hidden shadow-lg mb-10">
            <img src="../assets/img/stressArticle.jpg"
                class="w-full h-72 object-cover opacity-90">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

            <div class="absolute bottom-6 left-6 text-white">
                <span class="text-sm bg-green-700 px-3 py-1 rounded-full">Featured</span>
                <h2 class="text-3xl font-semibold mt-3">Cara Mengelola Stres Pada Kehidupan Modern</h2>
                <p class="mt-2 text-gray-100 w-2/3">
                    Pelajari langkah efektif untuk mengendalikan stres di tengah aktivitas yang padat.
                </p>

                <a href="https://rsonkologisolo.co.id/artikel/detail/195"
                    class="inline-block mt-4 bg-white text-gray-900 px-5 py-2 rounded-full shadow hover:bg-gray-200 transition">
                    Baca Selengkapnya ↗
                </a>
            </div>
        </div>

        <!-- GRID ARTICLES -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://i.imgur.com/WwCF5Jb.jpeg" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs bg-blue-600 text-white px-3 py-1 rounded-full">Tips</span>
                    <h3 class="text-lg font-semibold mt-3">7 Cara Sederhana Mengatasi Kecemasan</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Panduan singkat untuk meredakan kecemasan sehari-hari tanpa tekanan.
                    </p>

                    <a href="#" class="text-green-700 font-medium mt-3 inline-block">Baca Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://i.imgur.com/rxv3o2t.jpeg" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs bg-red-600 text-white px-3 py-1 rounded-full">Psikologi</span>
                    <h3 class="text-lg font-semibold mt-3">Memahami Tanda Awal Depresi</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Penting untuk mengenali tanda dini depresi agar dapat mengatasinya.
                    </p>

                    <a href="#" class="text-green-700 font-medium mt-3 inline-block">Baca Selengkapnya →</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://i.imgur.com/Mwi5sZb.jpeg" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs bg-yellow-600 text-white px-3 py-1 rounded-full">Mindfulness</span>
                    <h3 class="text-lg font-semibold mt-3">Meditasi 5 Menit Untuk Ketenangan</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Teknik singkat yang dapat kamu lakukan kapan saja untuk menenangkan pikiran.
                    </p>

                    <a href="#" class="text-green-700 font-medium mt-3 inline-block">Baca Selengkapnya →</a>
                </div>
            </div>

        </div>

    </div>

</body>

</html>