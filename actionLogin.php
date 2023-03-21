<?php 
    session_start();

    if (isset($_SESSION["login"])) {
        header("Location: viewMhs.php");
        exit;
    }

    require 'actionRegister.php';
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($password, $row["password"])) {
                    $_SESSION["login"] = true;

                    header("Location: viewMhs.php");
                    exit;
                }
            }
            $error = true;
        }
?>