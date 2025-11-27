<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Stres</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-gray-100 p-6">

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-6">
        <h1 class="text-3xl font-bold mb-4 text-center text-gray-800">Test Burnout</h1>
        <h1 class="text-2xl font-semibold mb-6 text-center">Seberapa sering kamu mengalami hal berikut:</h1>
        <!-- PROGRESS BAR -->
        <div class="w-full bg-gray-200 rounded-full h-3 mb-6">
            <div id="progressBar" class="bg-blue-500 h-3 rounded-full transition-all duration-300" style="width: 0%;"></div>
        </div>


        <form action="../app/controllers/proses_ceksehat.php?cek=stres" method="POST" class="space-y-6">

            <!-- 1 -->
            <div class="space-y-3">
                <p class="font-medium">Sedikit minat atau kesenangan dalam melakukan sesuatu.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="satu" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="satu" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="satu" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="satu" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 2 -->
            <div class="space-y-3">
                <p class="font-medium">Merasa murung, sedih, atau putus asa.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="dua" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="dua" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="dua" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="dua" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 3 -->
            <div class="space-y-3">
                <p class="font-medium">Sulit tidur, sering terbangun, atau tidur terlalu banyak.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tiga" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tiga" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tiga" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tiga" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 4 -->
            <div class="space-y-3">
                <p class="font-medium">Merasa lelah atau kurang energi.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="empat" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="empat" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="empat" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="empat" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 5 -->
            <div class="space-y-3">
                <p class="font-medium">Nafsu makan buruk atau makan berlebihan.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="lima" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="lima" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="lima" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="lima" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 6 -->
            <div class="space-y-3">
                <p class="font-medium">Merasa buruk tentang diri sendiri—seperti merasa gagal atau mengecewakan diri/keluarga.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="enam" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="enam" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="enam" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="enam" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 7 -->
            <div class="space-y-3">
                <p class="font-medium">Kesulitan berkonsentrasi pada hal-hal seperti membaca atau menonton TV.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tujuh" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tujuh" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tujuh" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="tujuh" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 8 -->
            <div class="space-y-3">
                <p class="font-medium">Bergerak atau berbicara sangat lambat hingga orang lain menyadarinya, atau merasa gelisah dan tidak bisa diam.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="delapan" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="delapan" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="delapan" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="delapan" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- 9 -->
            <div class="space-y-3">
                <p class="font-medium">Memiliki pikiran bahwa lebih baik mati atau menyakiti diri sendiri.</p>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="sembilan" value="0" required>
                        Tidak pernah
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="sembilan" value="1" required>
                        Beberapa hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="sembilan" value="2" required>
                        Lebih dari setengah hari
                    </label>
                    <label class="flex items-center gap-2 p-3 border rounded-lg hover:bg-gray-50">
                        <input type="radio" name="sembilan" value="3" required>
                        Hampir setiap hari
                    </label>
                </div>
            </div>

            <!-- SUBMIT -->
            <button type="submit" class="w-full mt-6 hijau-bg hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">
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