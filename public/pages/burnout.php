<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Burnout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-gray-100">



    <div class="max-w-3xl mx-auto mt-6 p-4">
        <h1 class="text-3xl font-bold mb-4 text-center text-gray-800">Test Burnout</h1>
        <h1 class="text-2xl font-semibold mb-4 text-center text-gray-800">Seberapa sering kamu mengalami hal berikut:</h1>
        <!-- PROGRESS BAR -->
        <div class="w-full bg-gray-200 rounded-full h-3 mb-6">
            <div id="progressBar" class="hijau-bg h-3 rounded-full transition-all duration-300" style="width: 0%;"></div>
        </div>
        <form action="../app/controllers/proses_ceksehat.php?cek=burnout" method="POST">

            <!-- Loop Card -->
            <!-- 1 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">1. Merasa kelelahan secara emosional.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q1" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q1" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q1" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q1" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 2 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">2. Merasa lelah meski sudah beristirahat.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q2" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q2" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q2" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q2" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 3 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">3. Kehilangan motivasi untuk bekerja atau beraktivitas.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q3" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q3" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q3" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q3" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 4 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">4. Merasa kapok atau ingin menyerah terhadap tugas yang harus dikerjakan.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q4" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q4" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q4" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q4" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 5 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">5. Merasa tidak mampu mengatasi tuntutan sehari-hari.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q5" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q5" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q5" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q5" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 6 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">6. Merasa sinis atau tidak peduli terhadap hal-hal yang biasanya penting.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q6" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q6" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q6" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q6" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 7 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">7. Merasa sulit fokus atau berpikir jernih.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q7" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q7" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q7" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q7" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 8 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-4">
                <p class="font-semibold mb-3">8. Menjauh dari orang lain atau ingin sendirian.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q8" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q8" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q8" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q8" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <!-- 9 -->
            <div class="bg-white p-4 rounded-xl shadow-md mb-6">
                <p class="font-semibold mb-3">9. Merasa tidak ada energi untuk melakukan aktivitas yang sederhana sekalipun.</p>
                <div class="grid grid-cols-2 gap-2">
                    <label><input type="radio" name="q9" value="0" required> Tidak pernah</label>
                    <label><input type="radio" name="q9" value="1" required> Beberapa hari</label>
                    <label><input type="radio" name="q9" value="2" required> Lebih dari setengah hari</label>
                    <label><input type="radio" name="q9" value="3" required> Hampir setiap hari</label>
                </div>
            </div>

            <button type="submit" class="w-full hijau-bg text-white py-3 rounded-xl font-semibold hover:bg-purple-700 transition">
                Lihat Hasil
            </button>

        </form>
    </div>
    <script>
        const total = 9;
        const inputs = document.querySelectorAll("input[type=radio]");
        const progressBar = document.getElementById("progressBar");

        function updateProgress() {
            const answered = new Set();
            inputs.forEach(i => {
                if (i.checked) answered.add(i.name);
            });
            const percent = (answered.size / total) * 100;
            progressBar.style.width = percent + "%";
        }

        inputs.forEach(input => {
            input.addEventListener("change", updateProgress);
        });
    </script>
</body>

</html>