<?php
session_start();
session_destroy();

header("Location: ../../public/pages/login_email.php?status=berhasil_logout");
exit;
