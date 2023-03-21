<?php 
    include "koneksi.php";
    session_start();
    if (!isset($_SESSION["login"])) {
        header('location: login.php');
        exit;
    }
    $nrp = $_GET['nrp'];

    $query = "SELECT * FROM mahasiswa WHERE nrp='$nrp'";
    $result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <form action="actionEdit.php" method="post">
            <h1>Edit Mahasiswa</h1>
            <div class="input">
                <input type="text" name="nrp" class="form-control" 
                placeholder="NRP" value="<?php echo $row['nrp']; ?>">
                <i class='bx bx-user' ></i>
            </div>
            <div class="input">
                <input type="text" name="nama" class="form-control" 
                placeholder="Nama" value="<?php echo $row['nama']; ?>">
                <i class='bx bx-user' ></i>
            </div>
            <div class="input">
                <input type="date" name="ttl" class="form-control" 
                placeholder="Tanggal Lahir" value="<?php echo $row['ttl']; ?>">
                <i class='bx bx-user' ></i>
            </div>
            <div class="input">
                <input type="text" name="jk" class="form-control" 
                placeholder="Jenis Kelamin" value="<?php echo $row['jk']; ?>">
                <i class='bx bx-user' ></i>
            </div>
            <div class="input">
                <input type="text" name="prodi" class="form-control" 
                placeholder="Program Studi" value="<?php echo $row['prodi']; ?>">
                <i class='bx bx-user' ></i>
            </div>
            <div class="input">
                <input type="email" name="email" class="form-control" 
                placeholder="Email" value="<?php echo $row['email']; ?>">
                <i class='bx bx-envelope' ></i>
            </div>
            <button action="submit" type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary mt-3" href="viewMhs.php" role="button">View</a>
        </form>
        <?php endwhile; ?>
    </div>
</body>
</html>