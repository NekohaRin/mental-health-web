<?php
include '../../app/config/koneksi.php'; //koneksi
include '../../app/config/session_protected.php'; //session_protected
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../assets/img/mindease.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
        <nav class="flex flex-row max-w-full mx-auto justify-between items-center mt-3">
        <h2 class="ml-9 text-3xl hover:text-lime-400 font-semibold">MindEase</h2>
        <ul class="list-none flex flex-row gap-x-6 bg-lime-200 px-1.5 py-2 rounded-full">
            <li><a href="dashboard.php" class=" hover:bg-lime-50 px-4 rounded-full py-1.5">Beranda</a></li>
            <li><a href="#" class="bg-lime-50 px-4 rounded-full py-1.5">Tes Kesehatan</a></li>
            <li><a href="article&tips.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Artikel & Tips</a></li>
            <li><a href="daftarKonsultasi.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Daftar Konsultasi</a></li>
            <li><a href="about.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tentang Kami</a></li>
        </ul>
        <p class="mr-9 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400"><?php echo $_SESSION['username']?></p>
    </nav>

    <section class="w-full bg-gray-100 pb-20 mt-4">

        <!-- HERO / JUDUL -->
        <div class="hijau-bg text-white py-20 px-6 text-center md:text-left md:px-24 fade-in-down">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Tes Kesehatan Mental
            </h1>
            <p class="mt-4 text-lg md:text-xl max-w-2xl">
                Mulailah memahami kondisi kesehatan mentalmu dengan serangkaian tes cepat dan terpercaya.
                Tes ini membantu kamu mengenali gejala awal dan langkah tepat menuju pemulihan.
            </p>
        </div>

        <!-- PENJELASAN SINGKAT -->
        <div class="container mx-auto px-6 md:px-24 mt-12 fade-in-up">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Kenali Kesehatan Mentalmu</h2>
            <p class="text-gray-600 text-lg leading-relaxed max-w-3xl">
                Tes kesehatan mental ini dirancang untuk memberikan gambaran awal mengenai kondisi emosionalmu.
                Dengan menjawab beberapa pertanyaan sederhana, kamu dapat mengetahui apakah kamu sedang mengalami
                stres, kecemasan, depresi, burnout, atau kondisi lainnya.
                <br><br>
                Hasil tes bukanlah diagnosis profesional, tetapi dapat menjadi langkah awal untuk memahami
                kebutuhan mentalmu dan mendapatkan bantuan yang sesuai.
            </p>
        </div>

        <!-- PILIHAN TES -->
        <div class="container mx-auto mt-16 px-6 md:px-24">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 fade-in-up">Pilih Jenis Tes</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- CARD: Stress -->
                <a href="stress-test.html"
                    class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition group opacity-0"
                    style="animation: fadeInUp 0.8s ease forwards; animation-delay: 0.1s">
                    <div class="w-full h-40 bg-gray-200 rounded-xl flex items-center justify-center">
                        <span class="text-gray-500">Image</span>
                    </div>
                    <h3 class="text-xl font-semibold mt-4 group-hover:text-[#0a2740]">Tes Stress</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Ketahui tingkat stres dan bagaimana mengelolanya.
                    </p>
                </a>

                <!-- CARD: Anxiety -->
                <a href="anxiety-test.html"
                    class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition group opacity-0"
                    style="animation: fadeInUp 0.8s ease forwards; animation-delay: 0.25s">
                    <div class="w-full h-40 bg-gray-200 rounded-xl flex items-center justify-center">
                        <span class="text-gray-500">Image</span>
                    </div>
                    <h3 class="text-xl font-semibold mt-4 group-hover:text-[#0a2740]">Tes Anxiety</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Kenali gejala kecemasan dan tingkat keparahannya.
                    </p>
                </a>

                <!-- CARD: Depression -->
                <a href="depression-test.html"
                    class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition group opacity-0"
                    style="animation: fadeInUp 0.8s ease forwards; animation-delay: 0.4s">
                    <div class="w-full h-40 bg-gray-200 rounded-xl flex items-center justify-center">
                        <span class="text-gray-500">Image</span>
                    </div>
                    <h3 class="text-xl font-semibold mt-4 group-hover:text-[#0a2740]">Tes Depression</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Menilai gejala depresi secara objektif.
                    </p>
                </a>

                <!-- CARD: Burnout -->
                <a href="burnout-test.html"
                    class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition group opacity-0"
                    style="animation: fadeInUp 0.8s ease forwards; animation-delay: 0.55s">
                    <div class="w-full h-40 bg-gray-200 rounded-xl flex items-center justify-center">
                        <span class="text-gray-500">Image</span>
                    </div>
                    <h3 class="text-xl font-semibold mt-4 group-hover:text-[#0a2740]">Tes Burnout</h3>
                    <p class="text-gray-600 text-sm mt-2">
                        Lihat apakah kamu mengalami kelelahan fisik & mental.
                    </p>
                </a>

            </div>
        </div>
    </section>


</body>

</html>