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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title">Iniciar Sesión</div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="validar.php" class="login" method="POST">
                    <span class="field">Usuario</span>
                    <div class="field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="User" name="Usuario" required>
                    </div>
                    <span class="field">Contraseña</span>
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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    </div>
</div>
</body>
</html>