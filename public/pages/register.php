<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        #no_hp {
            color: blue;
        }

        form {
            display: flex;
            flex-direction: column;
            height: 200px;
            width: 800px;
            background-color: salmon;
        }
    </style>
</head>

<body>
        <?php
            if (isset($_GET['status'])){
                if($_GET['status']=='passwordsalah'){
                    echo ("Gagal registrasi, pasword dan konfirmasi pasword berbeda");
                } else if($_GET['status']=='ada'){
                    echo ("Gagal registrasi, email dan nomer handphone telah terdaftar");
                } else if($_GET['status']=='emailada'){
                    echo ("Gagal registrasi, email sudah terdaftar");
                } else if($_GET['status']=='nohpada'){
                    echo ("Gagal registrasi, nomer handphone sudah terdaftar");
                }
            }
        ?>

    <h1>Buat Akun Baru</h1>
    <form action="scr/pro_regist.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Masukkan Nama Anda" required>
        <br>

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan Alamat Email Anda" required>
        <br>

        <label for="no_hp">Nomer Handphone:</label><br>
        <input type="tel" id="no_hp" name="no_hp" pattern="^(\+62|62|0)8[0-9]{8,11}$" placeholder="08xxxx" required>
        <br>

        <label for="tanggal_lahir">Tanggal Lahir</label><br>
        <p>format: Tanggal/Bulan/Tahun</p>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        <br>

        <label for="gender">Gender</label><br>
        <select id="gender" name="gender" required>
            <option value="" disabled selected></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>
        <!-- Password 2X -->
        <label for="password">Password</label><br>
        <input type="password" id="password" name="Password" maxlength="8" placeholder="Masukkan Pasword Anda maksimal 8 karakter" required>
        <br>
        <label for="konpass">Konfirmasi Password</label><br>
        <input type="password" id="konpass" name="konpass" maxlength="8" placeholder="Masukkan Kembali Password Anda" required>
        <br>

        <button type="submit">Registrasi</button>
        <button type="reset">Reset</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Kembali login</a></p>
</body>

</html>