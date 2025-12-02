<?php
include '../../app/config/koneksi.php';
$admin = "atmin19jt";
$password = "123";

session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login_admin.php");
    exit;
}

$query = mysqli_query($koneksi, "SELECT * FROM dokter ORDER BY id_dokter DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Dokter</title>
</head>
<body class="bg-gray-100">

<div class="max-w-6xl mx-auto mt-10 p-5">

    <div class="flex justify-between items-center mb-5">
        <h1 class="text-2xl font-bold">Daftar Dokter</h1>
        <a href="dokter_tambah.php" 
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            + Tambah Dokter
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <div class="bg-white p-5 rounded-xl shadow hover:shadow-xl transition">

            <img src="upload/<?= $row['foto'] ?>" 
                 class="h-40 w-full object-cover rounded-lg mb-3">

            <h3 class="text-lg font-bold"><?= $row['nama'] ?></h3>
            <p class="text-gray-600 text-sm"><?= $row['penanganan'] ?></p>

            <p class="text-blue-600 font-semibold mt-1">
                Rp<?= number_format($row['harga_min']) ?> – 
                Rp<?= number_format($row['harga_max']) ?>
            </p>

            <div class="flex gap-3 mt-4">
                <a href="dokter_edit.php?id=<?= $row['id_dokter'] ?>" 
                   class="flex-1 text-center py-2 bg-yellow-400 text-white rounded-lg">
                   Edit
                </a>

                <a onclick="return confirm('Yakin ingin menghapus?')" 
                   href="dokter_hapus.php?id=<?= $row['id_dokter'] ?>" 
                   class="flex-1 text-center py-2 bg-red-500 text-white rounded-lg">
                   Hapus
                </a>
            </div>

        </div>
        <?php endwhile; ?>

    </div>
</div>

</body>
</html>
