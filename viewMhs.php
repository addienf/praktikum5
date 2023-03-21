<?php 
    include 'koneksi.php';
    session_start();
    if (!isset($_SESSION["login"])) {
        header('location: login.php');
        exit;
    }
    $query = 'SELECT * FROM mahasiswa';
    $result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        <div class="container mt-4">
            <h1>Halaman Data</h1>
            <a class="btn btn-primary mb-3" href="index.html" role="button">Tambah Data</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NRP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo $row['nrp']?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['ttl']?></td>
                        <td><?php echo $row['jk']?></td>
                        <td><?php echo $row['prodi']?></td>
                        <td><?php echo $row['email']?></td>
                        <td>
                            <a href="viewEdit.php?nrp=<?php echo $row['nrp']; ?>" 
                                role="button">Edit</a>
                            <a href="actionDelete.php?nrp=<?php echo $row['nrp']; ?>" 
                                role="button" onclick="return confirm('Data ini akan di hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="logout.php" role="button">Log Out</a>
        </div>
</body>
</html>