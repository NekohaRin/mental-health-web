<?php
include '../../app/config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter='$id'"));

if (isset($_POST['update'])) {

    $nama = $_POST['nama'];
    $penanganan = $_POST['penanganan'];
    $min = $_POST['harga_min'];
    $max = $_POST['harga_max'];

    // Jika foto diganti
    if ($_FILES['foto']['name'] != "") {

        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp, "upload/".$foto);

        $update = "UPDATE dokter SET 
            nama='$nama',
            penanganan='$penanganan',
            harga_min='$min',
            harga_max='$max',
            foto='$foto'
        WHERE id_dokter='$id'";

    } else {
        // Tanpa upload foto
        $update = "UPDATE dokter SET 
            nama='$nama',
            penanganan='$penanganan',
            harga_min='$min',
            harga_max='$max'
        WHERE id_dokter='$id'";
    }

    mysqli_query($koneksi, $update);
    header("Location: ../../public/pages/dokter_list.php");
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

    <h2 class="text-xl font-bold mb-5">Edit Dokter</h2>

    <form method="POST" enctype="multipart/form-data" class="space-y-4">

        <input name="nama" type="text" value="<?= $data['nama'] ?>"
               class="w-full p-3 border rounded-lg" required>

        <input name="penanganan" type="text" value="<?= $data['penanganan'] ?>"
               class="w-full p-3 border rounded-lg" required>

        <div class="flex gap-3">
            <input name="harga_min" type="number" value="<?= $data['harga_min'] ?>"
                   class="w-1/2 p-3 border rounded-lg" required>

            <input name="harga_max" type="number" value="<?= $data['harga_max'] ?>"
                   class="w-1/2 p-3 border rounded-lg" required>
        </div>

        <p class="text-gray-700">Foto Sekarang:</p>
        <img src="upload/<?= $data['foto'] ?>" class="h-32 rounded-lg">

        <input name="foto" type="file" class="w-full p-3 border rounded-lg">

        <button name="update"
                class="w-full py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
            Update
        </button>

        <a href="dokter_list.php" class="block text-center mt-2 text-gray-600">
            Kembali
        </a>
    </form>

</div>

</body>
</html>
