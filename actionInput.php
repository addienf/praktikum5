<?php 
include 'koneksi.php';

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$query = "INSERT INTO mahasiswa VALUES ('$nrp', '$nama', '$ttl', '$jk', '$prodi', '$email')";
mysqli_query($koneksi, $query);

header("location: viewMhs.php");
die();

?>