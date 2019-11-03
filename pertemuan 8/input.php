<head>
        <title>MAHASISWA</title>
</head>

<body>
<h1>Tambah Data</h1>
<?php
    $NRP = $_POST["NRP"];
    $Nama = $_POST["nama"];
    $alamat = $_POST["foto"];
    $ID_Jur = $_POST["jurusan"];
    $conn=mysqli_connect ('localhost','root','') or die ("koneksi gagal");
    mysqli_select_db($conn, "dataprak");
        echo "NRP : $NRP <br>";
        echo "Nama : $Nama <br>";
        echo "alamat : $Foto <br>";
        echo "Jurusan : $ID_Jur <br>";
    $sqlstr="insert into dataprak (NRP,nama,alamat,Jurusan) values ('$NRP','$Nama','$alamat','$Foto', '$ID_Jur')";
    $hasil = mysqli_query($conn, $sqlstr);
    echo "Simpan Data berhasil dilakukan";
?>
</body>
</html>