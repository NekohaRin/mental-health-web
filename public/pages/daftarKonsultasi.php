<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Konsultasi — MindEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-lime-50">
    <nav class="flex flex-row max-w-full mx-auto justify-between items-center mt-3">
        <h2 class="ml-9 text-3xl hover:text-lime-400 font-semibold">MindEase</h2>
        <ul class="list-none flex flex-row gap-x-6 bg-lime-200 px-1.5 py-2 rounded-full">
            <li><a href="../index.php" class=" px-4 rounded-full py-1.5 hover:bg-lime-50">Beranda</a></li>
            <li><a href="teskesehatan.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tes Kesehatan</a></li>
            <li><a href="pages/article&tips.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Artikel & Tips</a></li>
            <li><a href="#" class=" bg-lime-50 px-4 rounded-full py-1.5">Daftar Konsultasi</a></li>
            <li><a href="pages/about.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tentang Kami</a></li>
        </ul>
        <a href="pages/login_email.php" class="mr-9 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400">Login</a>
    </nav>

    <div class="container mx-auto py-10 px-4">

        <!-- TITLE -->
        <h1 class="text-3xl font-bold text-center mb-4">Daftar Konsultasi</h1>
        <p class="text-center text-gray-600 mb-10">
            Pilih konselor atau psikolog yang sesuai dengan kebutuhanmu.
        </p>

        <!-- GRID CARD DOKTER -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">
                <img src="../assets/img/female1.jpg"
                    class="w-full h-52 object-cover rounded-xl object-top">

                <h2 class="text-xl font-semibold mt-4">Dr. Amanda Putri</h2>
                <p class="text-gray-600 mt-1">Psikolog Klinis</p>

                <div class="mt-3">
                    <p class="text-sm font-medium text-gray-700">Penanganan:</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <span class="px-3 py-1 text-xs bg-green-700 text-white rounded-full">Depresi</span>
                        <span class="px-3 py-1 text-xs bg-blue-600 text-white rounded-full">Anxiety</span>
                        <span class="px-3 py-1 text-xs bg-yellow-600 text-white rounded-full">Stress</span>
                    </div>
                </div>

                <p class="mt-4 text-gray-800 font-medium">
                    Biaya: <span class="text-green-700">Rp 40.000 - Rp 80.000</span>
                </p>

                <button class="w-full mt-4 bg-green-700 text-white py-2 rounded-xl hover:bg-green-800 transition">
                    Booking Sekarang
                </button>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">
                <img src="../assets/img/male1.jpg"
                    class="w-full h-52 object-cover object-top rounded-xl">

                <h2 class="text-xl font-semibold mt-4">Dr. Budi Santoso</h2>
                <p class="text-gray-600 mt-1">Konselor Mental Health</p>

                <div class="mt-3">
                    <p class="text-sm font-medium text-gray-700">Penanganan:</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <span class="px-3 py-1 text-xs bg-red-600 text-white rounded-full">Burnout</span>
                        <span class="px-3 py-1 text-xs bg-yellow-600 text-white rounded-full">Stress</span>
                    </div>
                </div>

                <p class="mt-4 text-gray-800 font-medium">
                    Biaya: <span class="text-green-700">Rp 50.000 - Rp 90.000</span>
                </p>

                <button class="w-full mt-4 bg-green-700 text-white py-2 rounded-xl hover:bg-green-800 transition">
                    Booking Sekarang
                </button>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">
                <img src="../assets/img/female2.jpg"
                    class="w-full h-52 object-cover object-top rounded-xl">

                <h2 class="text-xl font-semibold mt-4">Dr. Clara Wijaya</h2>
                <p class="text-gray-600 mt-1">Psikiater</p>

                <div class="mt-3">
                    <p class="text-sm font-medium text-gray-700">Penanganan:</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <span class="px-3 py-1 text-xs bg-blue-600 text-white rounded-full">Anxiety</span>
                        <span class="px-3 py-1 text-xs bg-red-600 text-white rounded-full">Burnout</span>
                        <span class="px-3 py-1 text-xs bg-green-700 text-white rounded-full">Depresi</span>
                    </div>
                </div>

                <p class="mt-4 text-gray-800 font-medium">
                    Biaya: <span class="text-green-700">Rp 70.000 - Rp 100.000</span>
                </p>

                <button class="w-full mt-4 bg-green-700 text-white py-2 rounded-xl hover:bg-green-800 transition">
                    Booking Sekarang
                </button>
            </div>

        </div>

    </div>

</body>

</html>