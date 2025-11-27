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

} else if ($_GET['cek']=='bornout'){

}else if ($_GET['cek']=='kecemasan'){

}else if ($_GET['cek']=='k_tidur'){

}
?>