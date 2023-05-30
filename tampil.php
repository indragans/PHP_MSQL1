DAFTAR DATA BASE<br>
<?php
include('koneksi.php');
$hasil = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');
echo '<table border="1">';
echo '<tr><td>NRP</td><td>NAMA_MHS</td><td>JENIS_KELAMIN</td><td>ALAMAT_MHS</td></tr>';
while ($baris = mysqli_fetch_row($hasil)) {
    echo '<tr><td>' . $baris[0] . '</td><td>' . $baris[1] . '</td><td>' . $baris[2] . '</td><td>' . $baris[3] . '</td></tr>';
}
echo '</table>';
mysqli_close($koneksi);
?>



















<?php
// include('koneksi.php');
// $hasil=mysql_query('select * from mahasiswa',$konek);
// echo '<table border=1>';
// echo '<tr><td>NRP/td><td>NAMA_MHS</td><td>JENIS_KELAMIN</td<td>ALAMAT_MHS</td></tr>';
// while($baris=mysql_fetch_row($hasil))
// {
//     echo '<tr><td>$baris[0]</td><td>$baris[1]</td><td>$baris[2]</td><td>$baris[3]</td></tr>';
// }
?>