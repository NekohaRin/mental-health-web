<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_GET['status'])){
            if ($_GET['status']=='gagal'){
                echo ("Gagal Login");
            }//else if ($_GET['status']=='buatakun'){
            //     echo ("Akun berhasil di buat silahkan login");
            // }
        }
    ?>
    <h1>Login</h1>
    <p>Ingin menggunakan nomer handphone? <a href="login_nohp.php">Klik disini</a><p>
    <form action="scr/pro_login.php?login=email" method="POST">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
        <br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
        <br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
        <br>

        <button type="submit" id="submit" name="submit">Login</button>
    </form>
    <p>Belum mempunyai akun? <a href="register.php?login=email">Daftar di sini</a>
</body>
</html>