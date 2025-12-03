<?php
include '../../app/config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id'"));

if (isset($_POST['update'])) {

    $nama        = $_POST['nama_dokter'];
    $spesialis   = $_POST['spesialis'];
    $min         = $_POST['harga_min'];
    $max         = $_POST['harga_max'];

    // UPDATE TANPA UPLOAD FOTO
    $update = "
        UPDATE dokter SET 
            nama_dokter = '$nama',
            spesialis   = '$spesialis',
            harga_min   = '$min',
            harga_max   = '$max'
        WHERE id_dokter = '$id'
    ";

    mysqli_query($koneksi, $update);
    header("Location: ../../public/pages/dokter_list.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Dokter</title>
</head>
<body class="bg-gray-100">

<div class="max-w-xl mx-auto p-6 mt-10 bg-white rounded-xl shadow">

    <h2 class="text-2xl font-bold mb-5">Edit Data Dokter</h2>

    <form method="POST" class="space-y-4">

        <!-- NAMA DOKTER -->
        <div>
            <label class="text-sm font-semibold text-gray-600">Nama Dokter</label>
            <input name="nama_dokter" type="text"
                   value="<?= $data['nama_dokter']; ?>"
                   class="w-full p-3 border rounded-lg" required>
        </div>

        <!-- SPESIALIS DROPDOWN -->
        <div>
            <label class="text-sm font-semibold text-gray-600">Spesialis</label>
            <select name="spesialis"
                    class="w-full p-3 border rounded-lg" required>

                <option value="<?= $data['spesialis']; ?>" selected hidden>
                    <?= $data['spesialis']; ?>
                </option>

                <option value="Depresi">Depresi</option>
                <option value="Cemas">Cemas</option>
                <option value="Trauma">Trauma</option>
                <option value="Konseling Umum">Konseling Umum</option>
                <option value="Keluarga">Keluarga</option>
            </select>
        </div>

        <!-- HARGA -->
        <div class="flex gap-3">
            <div class="w-1/2">
                <label class="text-sm font-semibold text-gray-600">Harga Min</label>
                <input name="harga_min" type="number"
                       value="<?= $data['harga_min']; ?>"
                       class="w-full p-3 border rounded-lg" required>
            </div>

            <div class="w-1/2">
                <label class="text-sm font-semibold text-gray-600">Harga Max</label>
                <input name="harga_max" type="number"
                       value="<?= $data['harga_max']; ?>"
                       class="w-full p-3 border rounded-lg" required>
            </div>
        </div>

        <!-- FOTO DEFAULT -->
        <div class="text-center">
            <p class="text-sm text-gray-500 mb-2">Foto Default (PNG)</p>
            <img src="../assets/img/dokter.png" class="mx-auto h-28 rounded-full mb-3">
        </div>

        <!-- SUBMIT -->
        <button name="update"
            class="w-full py-3 bg-lime-500 text-white rounded-lg hover:bg-lime-600">
            Update
        </button>

        <a href="dokter_list.php" class="block text-center mt-2 text-gray-600 hover:underline">
            Kembali
        </a>
    </form>

</div>

</body>
</html>
