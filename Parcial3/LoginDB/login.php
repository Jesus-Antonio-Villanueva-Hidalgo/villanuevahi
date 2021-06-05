<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['Usuario']))
    {
        header ("location: index.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="./plugins/SweetAlert/dist/sweetalert2.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title">Iniciar Sesión</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="validar.php" class="login" method="POST">
                    <a class="field">Usuario</a>
                    <div class="field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="User" name="Usuario" required>
                    </div>
                    <a class="field">Contraseña</a>
                    <div class="field">
                        <i class="fas fa-key"></i>
                        <input type="password" placeholder="Password" name="Contraseña" required>
                    </div>
                    
                    <div class="field">
                        <input type="submit" id="submit" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="./plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>