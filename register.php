<?php 
    require 'actionRegister.php';
    if (isset($_POST["register"])) {
        if (register($_POST) > 0) {
            echo "<script>
                    alert('User Baru Berhasil DItambahkan!');
                </script>";
            header("location: login.php");
        } else {
            echo mysqli_error($koneksi);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="" method="post">
        <ul>
            <li>
                <div class="input">
                    <label for="username">Username</label>
                    <input type="text" name="username" 
                        class="form-control" id="username">
                </div>
            </li>
            <li>
                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" name="password" 
                        class="form-control" id="password">
                </div>
            </li>
            <li>
                <div class="input">
                    <label for="password2">Konfirmasi Password</label>
                    <input type="password" name="password2" 
                        class="form-control" id="password2">
                </div>
            </li>
            <li>
                <div class="input">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" 
                        id="" cols="40" rows="5"></textarea>
                </div>
            </li>
            <li>
                <div class="input">
                    <label for="password">Tingkat Pendidikan</label>
                    <input type="radio" name="tingkat" value="S1">S1
                    <input type="radio" name="tingkat" value="S2">S2
                </div>
            </li>
            <label for="fakultas">Fakultas</label>\
            <select name="fakultas" id="fakultas">
                <option value="Fakultas Teknik Industri (FTI)">Fakultas Teknik Industri (FTI)</option>
                <option value="Fakultas Arsitektur dan Desain (FAD)">Fakultas Arsitektur dan Desain (FAD)</option>
                <option value="Fakultas Teknik Sipil dan Perencanaan (FTSP)">Fakultas Teknik Sipil dan Perencanaan (FTSP)</option>
            </select>
            <li>
                <button type="submit" name="register" class="btn btn-primary mt-3">Register</button>
            </li>
            <li>
                <a href="login.php" class="btn btn-primary mt-3">Login</a>
            </li>
        </ul>
    </form>
</body>
</html>