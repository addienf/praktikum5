<?php 
    include 'koneksi.php';
    function register($data){
        global $koneksi;

        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi, $data["password"]);
        $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
        $alamat = $_POST['alamat'];
        $tingkat = $_POST['tingkat'];
        $fakultas = $_POST['fakultas'];

        $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username='$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('Username Sudah Terdaftar!');
                </script>";
            return false; 
            
        }

        if ($password !== $password2) {
            echo "<script>
                    alert('Konfirmasi Password Tidak Sesuai!');
                </script>";
            return false;
        }
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "INSERT INTO user VALUES ('',
            '$username', '$password', '$alamat', '$tingkat', '$fakultas')");
        
        return mysqli_affected_rows($koneksi);
    }
?>