<html>
<head>
    <title>Koneksi Database Mysql</title>
</head>
<body>
    <h1>Demo koneksi database Mysql</h1>
    <?php
    $conn=mysqli_connect ('localhost','root','');
    if($conn){
        echo "OK";
    }else {
        echo "Server not connected";
    }
   ?>
</body>
</html>