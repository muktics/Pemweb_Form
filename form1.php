<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="nama" id="nama" placeholder="Inputkan Nama"><br>
        <input type="text" name="email"0 id="email" placeholder="Inputkan Email"><br>
        <textarea name="pesan" id="pesan" placeholder="Inputkan Pesan"></textarea><br>
        <button>Kirim</button>
    </form>
    <?php
        if (isset($_GET["nama"])&& $_GET["email"]&&$_GET["pesan"]){
            echo "<br>Nama  : ".$_GET["nama"];
            echo "<br>E-mail  : ".$_GET["email"];
            echo "<br>Pesan  : ".$_GET["pesan"];
        }
        ?>

        
</body>
</html>