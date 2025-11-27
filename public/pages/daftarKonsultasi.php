<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Konsultasi — MindEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

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
                <img src="https://i.imgur.com/VZr5pGA.jpeg" 
                     class="w-full h-52 object-cover rounded-xl">
                
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
                <img src="https://i.imgur.com/AMqY7Od.jpeg" 
                     class="w-full h-52 object-cover rounded-xl">
                
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
                <img src="https://i.imgur.com/vsGzOUl.jpeg" 
                     class="w-full h-52 object-cover rounded-xl">
                
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
