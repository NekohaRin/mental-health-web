<?php
    session_start();
    include '../config/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    if($_GET['login']=='email'){
            $email = $_POST['email'];
            $sql=mysqli_query($koneksi,"SELECT * from users where username ='$username' and email = '$email' and password = '$password'");
        } else if ($_GET['login']=='nohp'){
            $no_hp = $_POST['no_hp'];
            $sql=mysqli_query($koneksi,"SELECT * from users where username ='$username' and no_hp = '$no_hp' and password = '$password'");
        }
    if(mysqli_num_rows($sql)>0){
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        header("Location: ../../public/pages/dashboard.php");
    }else{
        if($_GET['login']=='email'){
            header("Location: ../login_email.php?status=gagal");
        } else if ($_GET['login']=='nohp'){
            header("location: ../login_nohp.php?status=gagal");
        }
    }
?>