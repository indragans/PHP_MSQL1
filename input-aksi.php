<?php
$NRP = $_POST["NRP"];
$NAMA_MHS = $_POST["NAMA_MHS"];
$JENIS_KELAMIN = $_POST["JENIS_KELAMIN"];
$ALAMAT_MHS = $_POST["ALAMAT_MHS"];
include("koneksi.php");
$hasil = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$NRP','$NAMA_MHS','$JENIS_KELAMIN','$ALAMAT_MHS')");
echo "Penambahan data telah berhasil dilakukan";
mysqli_close($koneksi);
?>



















<!-- <?php
$NRP = $_POST["NRP"];
$NAMA_MHS = $_POST["NAMA_MHS"];
$JENIS_KELAMIN = $_POST["JENIS_KELAMIN"];
$ALAMAT_MHS = $_POST["ALAMAT_MHS"];
include("keneksi.php");
$hasil = msql_query("insert into mahasiswa values('$NRP','$NAMA_MHS','$JENIS_KELAMIN','$ALAMAT_MHS')",$koneksi);
echo"Penambahan data telah berhasil dilakukan";
mysql_close($konek);
?> -->