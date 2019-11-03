<html>
    <head>
        <title>Hapus Data</title>
</head>

<body>
<h1>Hapus Data</h1>
<?php
    $NRP = $_POST["NRP"];
    $conn=mysqli_connect ('localhost','root','') or die ("koneksi gagal");
    mysqli_select_db($conn, "dataprak");
        echo "NRP : $NRP <br>";
    $sqlstr="DELETE FROM Data WHERE NRP = '$NRP'";
    $hasil = mysqli_query($conn, $sqlstr);
    echo "Hapus Data berhasil dilakukan";
?>
</body>
</html>