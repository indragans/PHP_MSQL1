Menampilkan Rekap Data <br>
<?php
include('koneksi.php');
$hasil = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');
$kolom = mysqli_num_fields($hasil);
echo '<br>Jumlah Field:', $kolom, '<br>';
$data = mysqli_num_rows($hasil);
echo 'Jumlah Record:', $data;
mysqli_close($koneksi);
?>














<?php
// include('koneksi.php');
// $hasil= msql_query('select * from mahasiswa',$konek);
// $kolom = mysql_num_field($hasil);
// echo'<br>Jumlah Field:',$kolom,'<br>';
// $data=mysql_num_rows($hasil);
// echo'Jumlah Record:',$data;
// mysql_close($konek);
?>