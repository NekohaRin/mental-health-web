<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kesehatan Mental</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../assets/img/mindease.ico" type="image/x-icon">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden !important;
            position: relative;
            overflow: hidden;
        }

        body {
            width: 100%;
            height: 100vh;
            background-image: url("assets/img/beground1.png");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-family: 'Lora', serif;
            color: #0c2500;
            text-shadow: 0px 3px 10px rgba(0, 0, 0, 0.4);
            font-size: 90px;
            font-weight: 700;
            margin-bottom: 50px;
            margin-top: 150px;
        }

        button {
            background-color: rgba(255, 255, 255, 0.635);
            border: none;
            padding: 15px 55px;
            font-size: 25px;
            color: #343616;
            border-radius: 40px;
            cursor: pointer;
            font-family: 'Nunito', serif;
            margin-top: 265px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
        }

        a {
            color: #c5b392;
            text-decoration: none;
            font-size: 20px;
            display: block;
            text-align: center;
            text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
            margin-top: -10px;
            transition: color 0.3s ease;

        }

        button:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
        }

        a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <h1>Kesehatan Mental</h1>
    <button type="button" onclick="window.location.href='pages/dashboard.php'">Masuk</button>
    <br>
    <a href="pages/login_email.php">Login</a>
    <br>
    <a href="pages/informasi.php">Tentang Kami</a>
    <br>
</body>

</html>