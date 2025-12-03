<?php
session_start();
include '../../app/config/koneksi.php';

// CEK ADMIN (username langsung)
if (!isset($_SESSION['username']) || $_SESSION['username'] != "atmin19jt") {
    header("Location: login_email.php");
    exit;
}

// ambil data dokter
$query = mysqli_query($koneksi, "SELECT * FROM dokter ORDER BY id_dokter DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kelola Dokter — Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="flex justify-between bg-lime-600 p-4 text-white">
        
        <h1 class="text-xl font-bold">Panel Admin — <?php echo $_SESSION['username'] ?></h1>

        <div class="flex gap-4">
            <a href="dokter_tambah.php" class="bg-white text-lime-600 px-4 py-2 rounded-lg font-bold">+ Tambah Dokter</a>
            <a href="../../app/controllers/logout.php" class="bg-red-500 px-4 py-2 rounded-lg font-bold">Logout</a>
        </div>
    </nav>

    <div class="container mx-auto p-6">

        <h2 class="text-2xl font-bold mb-6">Daftar Dokter</h2>

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php while ($data = mysqli_fetch_assoc($query)) : ?>

                <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">

                    <!-- FOTO DEFAULT -->
                    <img src="../assets/img/male1.jpg"
                        class="w-full h-48 object-cover rounded-xl object-top mb-4" />

                    <h2 class="text-xl font-semibold"><?= $data['nama_dokter']; ?></h2>

                    <p class="text-gray-600 mt-1 text-sm">
                        Spesialis: <span class="font-medium text-lime-700"><?= $data['spesialis']; ?></span>
                    </p>

                    <p class="mt-2 text-gray-800 font-medium">
                        Biaya:
                        <span class="text-lime-700">
                            Rp <?= number_format($data['harga_min'], 0, ',', '.'); ?>
                        </span>
                        -
                        <span class="text-lime-700">
                            Rp <?= number_format($data['harga_max'], 0, ',', '.'); ?>
                        </span>
                    </p>

                    <!-- TOMBOL AKSI -->
                    <div class="flex gap-2 mt-4">
                        <a href="dokter_edit.php?id=<?= $data['id_dokter']; ?>"
                            class="flex-1 bg-blue-600 text-white py-2 rounded-xl text-center hover:bg-blue-800">
                            Edit
                        </a>
                        <a href="../../app/controllers/dokter_hapus.php?id=<?= $data['id_dokter']; ?>"
                            onclick="return confirm('Yakin ingin menghapus dokter ini?')"
                            class="flex-1 bg-red-600 text-white py-2 rounded-xl text-center hover:bg-red-800">
                            Hapus
                        </a>
                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>

</body>

</html>

