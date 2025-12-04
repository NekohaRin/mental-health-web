<?php
include '../../app/config/koneksi.php'; //koneksi
include '../../app/config/session_protected.php'; //session_protected
?>

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
            <li><a href="dashboard.php" class=" px-4 rounded-full py-1.5 hover:bg-lime-50">Beranda</a></li>
            <li><a href="teskesehatan.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tes Kesehatan</a></li>
            <li><a href="article&tips.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Artikel & Tips</a></li>
            <li><a href="#" class=" bg-lime-50 px-4 rounded-full py-1.5">Daftar Konsultasi</a></li>
            <li><a href="about.php" class="hover:bg-lime-50 px-4 rounded-full py-1.5">Tentang Kami</a></li>
        </ul>
        <div class="flex flex-row align-center justify-center">
            <p class="mr-4 text-base bg-lime-600 text-white py-3 rounded-full font-bold px-8 hover:bg-lime-400"><?php echo $_SESSION['username'] ?></p>
            <img src="../assets/img/out (2).png" alt="" class=" mr-4 h-12 items-center cursor-pointer" onclick="window.location.href='../../app/controllers/logout.php'">
        </div>
    </nav>

    <?php
    include '../../app/config/koneksi.php';

    $query = mysqli_query($koneksi, "SELECT * FROM dokter ORDER BY id_dokter ASC");
    ?>

    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Daftar Konsultasi Dokter</h1>

        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
            <?php while ($dok = mysqli_fetch_assoc($query)) { ?>
                <div class="bg-white shadow-lg rounded-xl p-5 flex flex-col items-center hover:scale-105 transition">

                    <!-- Foto DEFAULT -->
                    <img src="../assets/img/male1.jpg"
                        class="w-24 h-24 rounded-full mb-4" alt="dokter">

                    <h2 class="text-xl font-semibold text-center">
                        <?= $dok['nama_dokter']; ?>
                    </h2>

                    <p class="text-gray-600 text-center text-sm">
                        <?= $dok['spesialis']; ?>
                    </p>

                    <!-- HARGA -->
                    <p class="mt-3 text-center font-medium text-gray-700">
                        Biaya:
                        <span class="text-green-700">
                            Rp <?= number_format($dok['harga_min'], 0, ',', '.'); ?>
                        </span>
                        -
                        <span class="text-green-700">
                            Rp <?= number_format($dok['harga_max'], 0, ',', '.'); ?>
                        </span>
                    </p>

                    <a href="konsultasi_form.php?id=<?= $dok['id_dokter']; ?>"
                        class="mt-4 px-5 py-2 bg-lime-600 text-white rounded-lg hover:bg-lime-700">
                        Konsultasi
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

    </div>


</body>

</html>