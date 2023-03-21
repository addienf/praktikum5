<?php 
    require 'actionLogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Halaman Login</h1>
        <?php if (isset($error)) :?>
            <p style="color:red; font-style: italic;">Username atau Password salah</p>
        <?php endif; ?>

        <form action="actionLogin.php" method="post">
            <div class="input">
                <label for="username"></label>
                <input type="text" name="username" 
                    class="form-control" id="username" placeholder="Username">
            </div>
            <div class="input">
                <label for="password"></label>
                <input type="password" name="password" 
                    class="form-control" id="password" placeholder="Password">
            </div>
            <div>
                <button action="submit" name="login"
                    type="submit" class="btn btn-primary mb-3 mt-3">Login</button>
            </div>
            <div>
                <a href="register.php"><button class="btn btn-primary" type="button">Register</button></a> 
            </div>
        </form>
    </div>
</body>
</html>