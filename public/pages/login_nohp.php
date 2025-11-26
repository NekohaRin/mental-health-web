<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../assets/img/mindease.ico" type="image/x-icon">
    <style>
        .diagonal-bg {
            clip-path: polygon(65% 0, 100% 0, 100% 100%, 0 100%, 0 93%);
            background: rgba(255, 255, 255, .5);
            backdrop-filter: blur(4px);
        }
    </style>
</head>

<body class="h-screen w-full bg-cover bg-center" style="background-image: url(../assets/img/beground1.png) ">
    <?php
    // if(isset($_get['status'])){
    //     if ($_get['status']=='gagal'){
    //         echo ("gagal login");
    // }else if ($_GET['status']=='buatakun'){
    //     echo ("Akun berhasil di buat silahkan login");
    // }
    // }
    ?>
    <div class="relative h-full w-full flex">

        <div class="absolute right-0 top-0 h-full w-full diagonal-bg"></div>
        <div class="z-10 w-full flex justify-center items-center">
            <div class="w-[500px]"></div>
            <div class="w-[435px] mr-7">
                <h1 class="text-9xl font-playfair font-bold mb-5">Login</h1>
                <p class="mb-10 text-lg">Ingin menggunakan email? <a href="login_email.php">Klik disini</a>
                <p>
                <form action="scr/pro_login.php?login=no_hp" method="POST" class="items-center">
                    <div class="flex mb-4 items-center">
                        <label for="username" class="w-32 text-xl font-semibold">Username</label><br>
                        <span class="mx-3 text-xl font-bold ml-25">:</span>
                        <input type="text" id="username" name="username" class="border px-3 py-1 w-full rounded" placeholder="Masukkan Username" required>
                    </div>

                    <div class="flex mb-6 items-center">
                        <label class="w-90 text-xl font-semibold" for="no_hp">Nomer Handphone</label>
                        <span class="mx-3 text-xl font-bold">:</span>
                        <input class="border px-3 py-1 w-full rounded" type="tel" id="no_hp" name="no_hp" pattern="^(\+62|62|0)8[0-9]{8,11}$" placeholder="08xxxx" required>
                    </div>

                    <!-- <div class="flex mb-6 items-center">
                        <label class="w-32 text-xl font-semibold" for="email">Email</label><br>
                        <span class="mx-3 ml-7 text-xl font-bold">:</span>
                        <input class="border px-3 py-1 w-full rounded" type="email" id="email" name="email" placeholder="Masukkan Email" required>
                    </div> -->

                    <div class="flex mb-6 items-center">
                        <label for="password" class="w-32 text-xl font-semibold">Password</label><br>
                        <span class="mx-3 ml-26 text-xl font-bold">:</span>
                        <input type="password" class="border px-3 py-1 w-full rounded" id="password" name="password" placeholder="Masukkan Password" required>
                    </div>

                    <div class="flex mb-6 items-center">
                    <button type="submit" id="submit" class="bg-lime-600 font-bold text-xl px-7 py-3 rounded-full items-center" name="submit">Login</button>
                    </div>
                </form>
                <p>Belum mempunyai akun? <a href="register.php?login=email" class="text-lime-600 font-semibold">Daftar di sini</a>
            </div>
        </div>
    </div>
</body>

</html>