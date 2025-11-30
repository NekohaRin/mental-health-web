<?php
session_start();
include '../../app/config/koneksi.php'; //koneksi
include '../../app/config/koneksi.php'; //session_protection

$id_user = $_SESSION['id_user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
</head>

<body>
    <?php
    if ($_GET['riwayat'] == 'stres') {
    ?>
        <h1>Riwayat Stres</h1>
        <?php
        $skor = [];
        $tanggal = [];
        $sql = mysqli_query($koneksi, "SELECT * from stres where id_user = '$id_user' order by tgl_buat asc");
        if (mysqli_num_rows($sql) > 0) {
            while ($data = mysqli_fetch_assoc($sql)) {
                $skor[] = $data['skor'];
                $tanggal[] = $data['tgl_buat'];
            }
        }
    } else if ($_GET['riwayat'] == 'depresi') {
        ?>
        <h1>Riwayat Depresi</h1>
        <?php
        $skor = [];
        $tanggal = [];
        $sql = mysqli_query($koneksi, "SELECT * from depresi where id_user = '$id_user' order by tgl_buat asc");
        if (mysqli_num_rows($sql) > 0) {
            while ($data = mysqli_fetch_assoc($sql)) {
                $skor[] = $data['skor'];
                $tanggal[] = $data['tgl_buat'];
            }
        }
    } else if ($_GET['riwayat'] == 'burnout') {
        ?>
        <h1>Riwayat Burnout</h1>
        <?php
        $skor = [];
        $tanggal = [];
        $sql = mysqli_query($koneksi, "SELECT * from bornout where id_user = '$id_user' order by tgl_buat asc");
        if (mysqli_num_rows($sql) > 0) {
            while ($data = mysqli_fetch_assoc($sql)) {
                $skor[] = $data['skor'];
                $tanggal[] = $data['tgl_buat'];
            }
        }
    } else if ($_GET['riwayat'] == 'anxiety') {
        ?>
        <h1>Riwayat Kecemasan</h1>
        <?php
        $skor = [];
        $tanggal = [];
        $sql = mysqli_query($koneksi, "SELECT * from kecemasan where id_user = '$id_user' order by tgl_buat asc");
        if (mysqli_num_rows($sql) > 0) {
            while ($data = mysqli_fetch_assoc($sql)) {
                $skor[] = $data['skor'];
                $tanggal[] = $data['tgl_buat'];
            }
        }
    } else if ($_GET['riwayat'] == 'k_tidur') {
        ?>
        <h1>Riwayat Kurang Tidur</h1>
    <?php
        $skor = [];
        $tanggal = [];
        $sql = mysqli_query($koneksi, "SELECT * from k_tidur where id_user = '$id_user' order by tgl_buat asc");
        if (mysqli_num_rows($sql) > 0) {
            while ($data = mysqli_fetch_assoc($sql)) {
                $skor[] = $data['skor'];
                $tanggal[] = $data['tgl_buat'];
            }
        }
    }

    if (!empty($skor)) {
        $tanggal_js = "'" . implode("','", $tanggal) . "'";
        $skor_js = implode(",", $skor);
    } else {
        $tanggal_js = "";
        $skor_js = "";
    }
    ?>

    <?php if (!empty($skor)) { ?>
        <!-- grafik -->
        <canvas id="mentalChart" width="400" height="200"></canvas>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const tanggal = [<?= $tanggal_js ?>];
            const skor = [<?= $skor_js ?>];

            const ctx = document.getElementById('mentalChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: tanggal,
                    datasets: [{
                        label: 'Skor Kesehatan Mental',
                        data: skor,
                        borderWidth: 2,
                        tension: 0.3 // melengkung
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    <?php } ?>
            <button type="button" onclick="window.location.href='dashboard.php'">KEMBALI</button>
</body>

</html>