<?php 
include '../../'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../assets/img/mindease.ico" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body class="h-screen w-full bg-cover bg-center" style="background-image: url(../assets/img/beground1.png) ">
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'passwordsalah') {
            echo ("Gagal registrasi, pasword dan konfirmasi pasword berbeda");
        } else if ($_GET['status'] == 'ada') {
            echo ("Gagal registrasi, email dan nomer handphone telah terdaftar");
        } else if ($_GET['status'] == 'emailada') {
            echo ("Gagal registrasi, email sudah terdaftar");
        } else if ($_GET['status'] == 'nohpada') {
            echo ("Gagal registrasi, nomer handphone sudah terdaftar");
        }
    }
    ?>

    <div class="relative h-full w-full flex">
        <div class="absolute right-0 top-0 h-full w-full diagonal-bg"></div>
        <div class="z-10 w-full flex justify-center items-center">
            <div class="w-[570px]"></div>
            <div class="w-[380px] mr-7">
                <h1 class="text-6xl font-bold mb-5">Buat Akun Baru</h1>
                <form action="../../app/controllers/process_register.php" method="POST" class="items-center">
                    <div class="flex mb-4 items-center">
                        <label class="w-32 text-xl font-semibold" for="username">Username:</label><br>
                        <span class="mx-3 text-xl font-bold">:</span>
                        <input class="border px-3 py-1 w-full rounded" type="text" id="username" name="username" placeholder="Masukkan Nama Anda" required>
                    </div>

                    <div class="flex mb-6 items-center">
                        <label class="w-32 text-xl font-semibold" for="email">Alamat Email:</label>
                        <span class="mx-3 text-xl font-bold">:</span>
                        <input class="border px-3 py-1 w-full rounded" type="email" id="email" name="email" placeholder="Masukkan Alamat Email Anda" required>
                    </div>

                    <div class="flex mb-6 items-center">
                        <label class="w-32 text-xl font-semibold" for="no_hp">Nomer Handphone</label>
                        <span class="mx-3 ml-10 text-xl font-bold">:</span>
                        <input class="border px-3 py-1 w-full rounded" type="tel" id="no_hp" name="no_hp" pattern="^(\+62|62|0)8[0-9]{8,11}$" placeholder="08xxxx" required>
                    </div>

                    <div class="flex mb-6 items-center">
                        <label class="w-32 text-xl font-semibold" for="tanggal_lahir">Tanggal Lahir</label>
                        <span class="mx-3 text-xl font-bold">:</span>
                        <input class="border px-3 py-1 w-full rounded" type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>

                    <div class="flex mb-6 items-center">
                        <label class="w-32 text-xl font-semibold" for="gender">Gender</label>
                        <span class="mx-3 text-xl font-bold">:</span>
                        <select class="border px-3 py-1 w-full rounded" id="gender" name="gender" required>
                            <option value="" disabled selected></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <!-- Password 2X -->
                    <div class="flex mb-6 items-center">
                        <label for="password" class="w-32 text-xl font-semibold">Password</label><br>
                        <span class="mx-3 text-xl font-bold">:</span>
                        <input type="password" class="border px-3 py-1 w-full rounded" id="password" name="Password" maxlength="8" placeholder="Masukkan Pasword Anda maksimal 8 karakter" required>
                    </div>

                    <div class="flex mb-6 items-center">
                        <label for="konpass" class="w-32 text-xl font-semibold">Konfirmasi Password</label>
                        <span class="mx-3 text-xl font-bold">:</span>
                        <input type="password" class="border px-3 py-1 w-full rounded" id="konpass" name="konpass" maxlength="8" placeholder="Masukkan Kembali Password Anda" required>
                    </div>
                    <button type="submit" class="hijau-bg brown-text font-bold text-xl px-7 py-3 rounded-full">Registrasi</button>
                </form>
                <p>Sudah punya akun? <a href="login.php" class="hijau-text font-semibold">Kembali login</a></p>
            </div>
        </div>
    </div>
</body>

</html>