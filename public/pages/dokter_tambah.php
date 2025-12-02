<?php
include '../../app/config/koneksi.php';

if (isset($_POST['save'])) {

    $nama = $_POST['nama'];
    $penanganan = $_POST['penanganan'];
    $min = $_POST['harga_min'];
    $max = $_POST['harga_max'];

    // Upload foto
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "upload/" . $foto);

    $query = mysqli_query($koneksi, 
        "INSERT INTO dokter VALUES(
            NULL,
            '$nama',
            '$penanganan',
            '$min',
            '$max',
            '$foto'
        )"
    );

    header("Location: ../../public/pages/dokter_list.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah Dokter</title>
</head>
<body class="bg-gray-100">

<div class="max-w-xl mx-auto p-6 mt-10 bg-white rounded-xl shadow">

    <h2 class="text-xl font-bold mb-5">Tambah Dokter</h2>

    <form method="POST" enctype="multipart/form-data" class="space-y-4">

        <input name="nama" type="text" placeholder="Nama Dokter"
               class="w-full p-3 border rounded-lg" required>

        <input name="penanganan" type="text" placeholder="Penanganan (Depresi, Stress...)"
               class="w-full p-3 border rounded-lg" required>

        <div class="flex gap-3">
            <input name="harga_min" type="number" placeholder="Harga Min"
                   class="w-1/2 p-3 border rounded-lg" required>

            <input name="harga_max" type="number" placeholder="Harga Max"
                   class="w-1/2 p-3 border rounded-lg" required>
        </div>

        <input name="foto" type="file" class="w-full p-3 border rounded-lg" required>

        <button name="save"
                class="w-full py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Simpan
        </button>

        <a href="../../public/pages/dokter_list.php" class="block text-center mt-2 text-gray-600">
            Kembali
        </a>
    </form>

</div>

</body>
</html>
