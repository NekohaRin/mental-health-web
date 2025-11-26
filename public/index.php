<?php
// include "config/session_protected.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MindEase</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="assets/img/mindease.ico" type="image/x-icon">
</head>

<body class="bg-lime-50">
    <nav class="flex flex-row max-w-full mx-auto justify-between items-center mt-3">
        <h2 class="ml-9 text-3xl hover:text-lime-400 font-semibold">MindEase</h2>
        <ul class="list-none flex flex-row gap-x-6 bg-lime-200 px-1.5 py-2 rounded-full">
            <li><a href="#" class=" bg-lime-50 px-4 rounded-full py-1.5">Beranda</a></li>
            <li><a href="pages/teskesehatan.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tes Kesehatan</a></li>
            <li><a href="" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Artikel & Tips</a></li>
            <li><a href="" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Daftar Konsultasi</a></li>
            <li><a href="" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tentang Kami</a></li>
        </ul>
        <a href="pages/login_email.php" class="mr-9 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400">Login</a>
    </nav>

    <!-- MAIN SECTION -->
    <div class="container mx-auto flex flex-col items-center justify-center mt-4 text-center">
        <div class="hero">
            <img src="assets/img/beground1.png" alt="" class="rounded-xl">

            <audio id="bg-audio" autoplay loop>
                <source src="assets/audio/audio.mp3" type="audio/mpeg">
            </audio>

            <button id="audioToggle"
                class="fixed bottom-4 left-4 p-2 px-3 bg-gray-800 text-white rounded-full hover:bg-gray-700 mt-3">
                🔊
            </button>
        </div>

        <div class="description mt-7 mb-5">
            <h1 class="text-3xl mt-4 mb-3">About MindEase</h1>
            <p class="mt-2">
                MindEase adalah platform kesehatan mental yang dirancang untuk membantu pengguna memahami, memantau, dan meningkatkan kesejahteraan emosional mereka. Dengan tampilan yang sederhana, modern, dan ramah pengguna, MindEase menghadirkan berbagai fitur yang memudahkan siapa saja untuk mulai peduli pada kondisi mental mereka tanpa rasa canggung atau keraguan. Setiap bagian aplikasi dibuat agar mudah diakses, baik oleh pemula maupun pengguna yang sudah terbiasa dengan layanan digital. </p>
            </p>

            <p class="mt-5">
                MindEase menyediakan berbagai tes kesehatan mental yang telah disesuaikan dengan standar psikologi populer, seperti tes tingkat stres, kecemasan, suasana hati, hingga keseimbangan hidup. Hasil tes akan ditampilkan secara jelas sehingga pengguna dapat memahami kondisi diri mereka dengan lebih baik. Platform ini juga dilengkapi artikel dan tips kesehatan mental yang kredibel untuk membantu pengguna belajar menangani tantangan emosional sehari‑hari. Selain itu, MindEase menawarkan fitur konsultasi yang memungkinkan pengguna mengatur jadwal atau mendaftarkan sesi dengan konselor atau psikolog yang tersedia.
            </p>
        </div>
        <div class="cards mt-5 flex gap-5 mb-7 justify-between w-full">
            <div class="w-xs h-30 bg-lime-400 border-2 rounded-2xl border-amber-200">Burnout</div>
            <div class="w-xs h-30 bg-lime-400 border-2 rounded-2xl border-amber-200">Depresi</div>
            <div class="w-xs h-30 bg-lime-400 border-2 rounded-2xl border-amber-200">Kecemasan</div>
            <div class="w-xs h-30 bg-lime-400 border-2 rounded-2xl border-amber-200">Stress</div>
        </div>
    </div>

    <script>
        const audio = document.getElementById('bg-audio');
        const btn = document.getElementById('audioToggle');

        let muted = false;

        btn.onclick = () => {
            muted = !muted;
            audio.muted = muted;

            btn.textContent = muted ? "🔇" : "🔊";
        };
    </script>

</body>

</html>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kesehatan Mental</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../assets/img/mindease.ico" type="image/x-icon">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden !important;
            position: relative;
            overflow: hidden;
        }

        body {
            width: 100%;
            height: 100vh;
            background-image: url("assets/img/beground1.png");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-family: 'Lora', serif;
            color: #0c2500;
            text-shadow: 0px 3px 10px rgba(0, 0, 0, 0.4);
            font-size: 90px;
            font-weight: 700;
            margin-bottom: 50px;
            margin-top: 150px;
        }

        button {
            background-color: rgba(255, 255, 255, 0.635);
            border: none;
            padding: 15px 55px;
            font-size: 25px;
            color: #343616;
            border-radius: 40px;
            cursor: pointer;
            font-family: 'Nunito', serif;
            margin-top: 265px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
        }

        a {
            color: #c5b392;
            text-decoration: none;
            font-size: 20px;
            display: block;
            text-align: center;
            text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
            margin-top: -10px;
            transition: color 0.3s ease;

        }

        button:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <h1>Kesehatan Mental</h1>
    <button type="button" onclick="window.location.href='pages/dashboard.php'">Masuk</button>
    <br>
    <a href="pages/login_email.php">Login</a>
    <br>
    <a href="pages/informasi.php">Tentang Kami</a>
    <br>
</body>

</html> -->