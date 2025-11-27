<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Anxiety</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-gray-100 p-4">

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-6">

        <h1 class="text-2xl font-bold mb-4">Seberapa sering kamu mengalami hal berikut:</h1>

        <!-- PROGRESS BAR -->
        <div class="w-full bg-gray-200 rounded-full h-3 mb-6">
            <div id="progressBar" class="bg-blue-500 h-3 rounded-full transition-all duration-300" style="width: 0%;"></div>
        </div>

        <form id="form" action="../app/controllers/proses_ceksehat.php?cek=anxiety" method="POST" class="space-y-6">

            <!-- 1 -->
            <div class="space-y-2">
                <label class="font-semibold">Merasa gugup, cemas, atau tegang.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="satu" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="satu" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="satu" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="satu" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 2 -->
            <div class="space-y-2">
                <label class="font-semibold">Tidak bisa menghentikan atau mengontrol rasa khawatir.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="dua" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="dua" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="dua" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="dua" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 3 -->
            <div class="space-y-2">
                <label class="font-semibold">Khwatir berlebihan tentang berbagai hal.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tiga" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tiga" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tiga" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tiga" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 4 -->
            <div class="space-y-2">
                <label class="font-semibold">Kesulitan rileks.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="empat" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="empat" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="empat" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="empat" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 5 -->
            <div class="space-y-2">
                <label class="font-semibold">Terlalu gelisah sehingga sulit duduk diam.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="lima" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="lima" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="lima" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="lima" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 6 -->
            <div class="space-y-2">
                <label class="font-semibold">Mudah tersinggung atau cepat marah.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="enam" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="enam" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="enam" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="enam" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 7 -->
            <div class="space-y-2">
                <label class="font-semibold">Merasa takut seolah akan terjadi sesuatu yang buruk.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tuju" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tuju" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tuju" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="tuju" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 8 -->
            <div class="space-y-2">
                <label class="font-semibold">Kesulitan berkonsentrasi akibat rasa cemas.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="delapan" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="delapan" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="delapan" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="delapan" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <!-- 9 -->
            <div class="space-y-2">
                <label class="font-semibold">Ketakutan tiba-tiba hingga sulit bernapas atau gemetar.</label>
                <div class="grid grid-cols-2 gap-2">
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="sembilan" value="0" required>
                        <span>Tidak pernah</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="sembilan" value="1" required>
                        <span>Beberapa hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="sembilan" value="2" required>
                        <span>Lebih dari setengah hari</span>
                    </label>
                    <label class="flex items-center space-x-2 p-2 bg-gray-50 rounded">
                        <input type="radio" name="sembilan" value="3" required>
                        <span>Hampir setiap hari</span>
                    </label>
                </div>
            </div>

            <button type="submit" class="mt-4 w-full py-3 hijau-bg text-white font-semibold rounded-lg hover:bg-blue-700">
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