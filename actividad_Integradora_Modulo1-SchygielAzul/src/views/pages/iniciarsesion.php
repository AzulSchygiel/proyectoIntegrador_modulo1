<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVIDAD INTEGRADORA</title>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="./styles/iniciosesion.css">
</head>
<body>
    <div class="box">
        <div class="container">
                <span><a href="./registro.php" class="new">Registrate aqui</a>
                <h1>Hola!</h1>
            </span>
            <div class="input-field">
                <input type="text" class="input" placeholder="Correo electrónico" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" id="password" placeholder="Contraseña" required>
                    <div class="mostrarcontraseña" type="button" name="ojo" onclick="mostrar()"></div>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" value="Iniciar Sesión">
            </div>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox"  id="check">
                    <label for="check">Recordar</label>
                </div>
                <div class="right">
                    <label><a href="#">Te olvidaste la contraseña?</a></label>
                </div>
            </div>
            <div class="social-login"> <!-- PAGINA USADA:https://ionic.io/ionicons/v4  --> 
                <div class="social-login-box">
                <ion-icon name="logo-google" id="icon-google"></ion-icon>
                </div>
                <div class="social-login-box">
                    <ion-icon name="logo-github" id="icon-github"></ion-icon>
                </div>
                <div class="social-login-box">
                    <ion-icon name="logo-instagram" id="icon-instagram"></ion-icon>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/code.js"></script>
</body>
</html>