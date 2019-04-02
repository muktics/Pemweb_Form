<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Some form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col -sm-4"></div>
        <div class="col -sm-4" style="background-color: rosybrown">
        <form class="form-horizontal" method="POST" action="" name="form">
            <h1 style="text-align:center">Form</h1>
            <div class="form-group">
                <label class="control-label" for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                <span id="error_nama"></span>
            </div>
            <div class="form-group">
                <label class="control-label" for="pwd">NIM:</label>
                <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
                <span id="error_nim"></span>
            </div><br>
        <input type="button" onclick="kirim()" class="btn btn-primary" value="Kirim">
    </form>
    <?php
        if (isset($_GET["nama"])&& $_GET["nim"]){
            echo "<br>Nama  : ".$_GET["nama"];
            echo "<br>E-mail  : ".$_GET["nim"];
   }
    ?>
    <script>
        function kirim(){
            var form = document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;
            if(nama !="" && nim !=""){
                    form[0].submit();
                }
            else{
                if (nama == "") {
                    document.getElementById("error_nama").innerHTML = "Nama jangan dikosongkan";
                                } 
                if (nim == "") {
                    document.getElementById("error_nim").innerHTML="NIM jangan dikosongkan";
                                }
                }
            }
    </script>
</body>
</html>