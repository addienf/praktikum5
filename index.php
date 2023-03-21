<?php 
    session_start();
    if (!isset($_SESSION["login"])) {
        header('location: login.php');
        exit;
    }
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
    <!-- JS -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="package/dist/sweetalert2.all.min.js"></script>
    <script src="external.js"></script>

    <!-- Content -->
    <div class="box">
        <div class="container">
            <div class="top">
                <span>Form Input Mahasiswa</span>
            </div>

            <form method="post" action="actionInput.php">
                <div class="input">
                    <input type="text" name="nrp" class="form-control" placeholder="NRP">
                    <i class='bx bx-user' ></i>
                </div>
                <div class="input">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                    <i class='bx bx-user' ></i>
                </div>
                <div class="input">
                    <input type="date" name="ttl" class="form-control" placeholder="Tanggal Lahir">
                    <i class='bx bx-user' ></i>
                </div>
                <div class="input">
                    <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin">
                    <i class='bx bx-user' ></i>
                </div>
                <div class="input">
                    <input type="text" name="prodi" class="form-control" placeholder="Program Studi">
                    <i class='bx bx-user' ></i>
                </div>
                <div class="input">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <i class='bx bx-envelope' ></i>
                </div>
                <button action="submit" type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary mt-3" href="viewMhs.php" role="button">View</a>
            </form>
        </div>
    </div>
</body>
</html>