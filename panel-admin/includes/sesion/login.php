<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Administrador</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <img class="wave" src="../img/ima1.png">
    <div class="container">
        <div class="img">
        </div>
        <div class="login-content">
        <form class="row g-3 needs-validation" novalidate id="loginForm" name="loginData" action="validar.php" action="validar_admin.php" method="POST">
                <img src="../img/profile.png">
                <h2 class="title">Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../../js/login.js"></script>
</body>
</html>
