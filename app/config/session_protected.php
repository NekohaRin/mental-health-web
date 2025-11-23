<?php 
session_start();
$_SESSION['id_user'];
if (!isset($_SESSION['id_user'])){
    header("Location: login_email.php");
}
?>