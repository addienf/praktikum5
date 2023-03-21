<?php 
    include "koneksi.php";
    session_start();
    if (!isset($_SESSION["login"])) {
        header('location: login.php');
        exit;
    }
    $nrp = $_GET['nrp'];

    $query = "DELETE FROM mahasiswa WHERE nrp='$nrp'";
    mysqli_query($koneksi, $query);

    header("location: viewMhs.php");
    die();
?>