<<?php 
session_start();
include "../config/koneksi.php"; //sambung ke koneksi//

$id_user = $_SESSION['id_user'];
if($_GET['cek']=='stres'){
    $skor=$_POST['satu']+$_POST['dua']+$_POST['tiga']+$_POST['empat']+$_POST['lima']+$_POST['enam']+$_POST['tuju']+$_POST['delapan']+$_POST['sembilan'];
    $sql=mysqli_query($koneksi, "INSERT INTO stres (id_user, skor, tgl_buat) values ('$id_user', '$skor', NOW()");
    if ($sql){
        header(""); //Lokasi recap
    }
} else if ($_GET['cek']=='depresi'){
    $skor=$_POST['satu']+$_POST['dua']+$_POST['tiga']+$_POST['empat']+$_POST['lima']+$_POST['enam']+$_POST['tuju']+$_POST['delapan']+$_POST['sembilan'];
    $sql=mysqli_query($koneksi, "INSERT INTO depresi (id_user, skor, tgl_buat) values ('$id_user', '$skor', NOW()");
    if ($sql){
        header(""); //Lokasi recap
    }
} else if ($_GET['cek']=='burnout'){
    $skor=$_POST['q1']+$_POST['q2']+$_POST['q3']+$_POST['q4']+$_POST['q5']+$_POST['q6']+$_POST['q7']+$_POST['q8']+$_POST['q9'];
    $sql=mysqli_query($koneksi, "INSERT INTO bornout (id_user, skor, tgl_buat) values ('$id_user', '$skor', NOW()");
    if ($sql){
        header(""); //Lokasi recap
    }
}else if ($_GET['cek']=='anxiety'){
    $skor=$_POST['satu']+$_POST['dua']+$_POST['tiga']+$_POST['empat']+$_POST['lima']+$_POST['enam']+$_POST['tuju']+$_POST['delapan']+$_POST['sembilan'];
    $sql=mysqli_query($koneksi, "INSERT INTO kecemasan (id_user, skor, tgl_buat) values ('$id_user', '$skor', NOW()");
    if ($sql){
        header(""); //Lokasi recap
    }
}else if ($_GET['cek']=='k_tidur'){
    
}
?>