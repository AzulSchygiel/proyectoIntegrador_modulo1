<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVIDAD INTEGRADORA</title>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="./styles/registro.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Crear cuenta</h2>
                    <div class="inputbox">
                        <ion-icon name="contact"></ion-icon>
                        <input type="text" required>
                        <label for="">Nombre de usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail"></ion-icon>
                        <input type="text" required>
                        <label for="">Correo electrónico<span class="obligatory">*</span></label>
                    </div>
                    <div class="inputbox">
                        <input type="password" class="input" id="password" required>
                <i class="bx bx-lock-alt">
                    <div class="mostrarcontraseña" type="button" name="ojo" onclick="mostrar()">
                        <ion-icon name="eye"></ion-icon>
                    </div>
                </i>
                <label for="">Contraseña<span class="obligatory">*</span></label>
                    </div>
                    <button>Continuar</button>
                    <div class="register">
                        <p>Sos usuario? <a href="../pages/iniciarsesion.php">Inicia sesión!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
<script src="./js/code.js"></script>
</body>
</html>
