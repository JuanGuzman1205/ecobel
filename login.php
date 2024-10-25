    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <div class="formulario">
            <h1>Inicio de sesion</h1>
            <form method="post"action="logeado.php">
                <div class="username">
                    <input type="text" required id="username">
                    <label>Nombre de usuario</label>
                </div>
                <div class="username">
                    <input type="password" required id="password">
                    <label >contraseña</label>
                </div>
                <div class="recordar">
                    ¿Olvido Su contraseña?
                </div>
                <input type="submit" value="Iniciar">
                <div class="registrarse">
                    Quiero hacer el <a href="crearusuario.php">registro</a>
                </div>
            </form>
        </div>
        
    </body>
    </html>