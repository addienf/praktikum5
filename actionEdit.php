<?php 
    include 'koneksi.php';

    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];

    $query = "UPDATE mahasiswa set nama='$nama',
    ttl='$ttl',
    jk='$jk',
    prodi='$prodi',
    email='$email'
    WHERE nrp='$nrp'";

    mysqli_query($koneksi, $query);
    echo "Error: " . mysqli_error($koneksi);

    header("location:viewMhs.php");
    die();
?>