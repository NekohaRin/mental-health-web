<?php
include '../../app/config/koneksi.php';

if (isset($_POST['submit'])) {
    $nama_dokter = $_POST['nama_dokter'];
    $spesialis   = $_POST['spesialis'];
    $harga_min   = $_POST['harga_min'];
    $harga_max   = $_POST['harga_max'];

    $sql = mysqli_query($koneksi, "
        INSERT INTO dokter (nama_dokter, spesialis, harga_min, harga_max)
        VALUES ('$nama_dokter', '$spesialis', '$harga_min', '$harga_max')
    ");

    if ($sql) {
        header("Location: dokter_list.php?status=berhasil");
        exit;
    } else {
        header("Location: dokter_list.php?status=gagal");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-lime-50">

    <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-5">Tambah Dokter</h2>

        <form action="../../app/controllers/dokter_tambah_proses.php" method="POST">


            <!-- Nama dokter -->
            <label class="block mb-2 font-medium">Nama Dokter</label>
            <input type="text" name="nama_dokter" required
                class="w-full p-2 border border-gray-300 rounded mb-4">

            <!-- Dropdown Spesialis -->
            <label class="block mb-2 font-medium">Spesialis</label>
            <select name="spesialis" required class="w-full p-2 border border-gray-300 rounded mb-4">
                <option value="">-- Pilih Spesialis --</option>
                <option value="Anxiety">Anxiety</option>
                <option value="Burnout">Burnout</option>
                <option value="Depresi">Depresi</option>
                <option value="Stress">Stress</option>
                <option value="Kurang tidur">Kurang tidur</option>
            </select>

            <!-- Harga Min -->
            <label class="block mb-2 font-medium">Harga Minimum</label>
            <input type="number" name="harga_min" required
                class="w-full p-2 border border-gray-300 rounded mb-4">

            <!-- Harga Max -->
            <label class="block mb-2 font-medium">Harga Maksimum</label>
            <input type="number" name="harga_max" required
                class="w-full p-2 border border-gray-300 rounded mb-4">

            <!-- Submit -->
            <button type="submit" name="submit"
                class="w-full bg-lime-600 text-white p-2 rounded hover:bg-lime-700">
                Simpan
            </button>
        </form>
    </div>

</body>

</html>