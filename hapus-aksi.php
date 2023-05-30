<?php
$NRP = $_POST["NRP"];
include("koneksi.php");
$hasil = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NRP='$NRP'");
echo "<br> Data dengan NRP=", $NRP, " telah berhasil dihapus";
mysqli_close($koneksi);
?>














<?php
//$NRP = $_POST["NRP"];
//include("keneksi.php");
//$hasil=mysql_query(delete from mahasiswa where NRP='$NRP');
//echo "<br> Data dengan NRP=",$NRP,"telah berhasil dihapus";
//mysql_close($konek);
?> 