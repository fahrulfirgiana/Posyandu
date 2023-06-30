<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Posyandu - Desa Balagedog</title>
    <link rel="icon" href="img/Majalengka.png" type="image/ico" />
    <link rel="stylesheet" href="css/loginn.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="<?php echo "proses_login.php?aksi=login" ?>">
                <h1>Login</h1>
                <hr>
                <p>Posyandu Desa Balagedog</p>
                <label for="">Email</label>
                <input type="text" class="form-control form-control-user" name="username" aria-describedby="emailHelp" placeholder="Username">
                <label for="">Password</label>
                <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="right">
            <img src="img/mom.jpg" alt="">
        </div>
    </div>
</body>

</html>