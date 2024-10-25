
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecobel SAS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
<body>
    <header>
        <img src="tierra.png" alt="Companylogo" class="tierra">
        <h1 class="titulo">Ecobel: La mejor forma de mantener su hogar</h1>
        <nav>
            <a href="#seccion1">Inicio</a>
            <a href="#seccion2">Sobre Nosotros</a>
            <a href="#seccion3">Contactenos</a>
            <a href="index.php">Log Out</a>
        </nav>
    </header>
    <main>
        <section id="seccion1">
            <h2 class="titulo-seccion"><span class ="Ecobel">ECOBEL SAS:</span>Mejorando su hogar<br>y cuidando su planeta</h2>
            <div class="contenido">
        <a class="boton" href="#seccion2">Comenzar</a>
    </div>
        </section>
        <section id="seccion2">
            <div class="izquierda">
                <h1 id="Title2">QUIENES SOMOS</h1>
                <p id="parrafo2">Si bien un diseño impactante es una buena opción para presentar a una marca en su sección «Quiénes somos», hay ocasiones en las que «menos es más». Este es el principio del que partió la empresa Ecofiltro, que busca ofrecer soluciones asequibles para obtener agua potable de una forma responsable con el medio ambiente.
                    En su sección «Nosotros» se resume en unas pocas palabras el objetivo de esta empresa, su misión y su visión, dejando ver qué es lo que está detrás de sus productos, así como la cultura de la organización.
                </p>
                <div class="link"><a href="https://www.youtube.com/watch?v=nES2QNKUpZI">VER MAS</a></div>
                
            </div>
            <div class="derecha"></div>
        </section>
        <section id="seccion3">
            <div class="formulario">
                <h2 id ="contactanos">Contacta con nosotros</h2>
                <form method="post">
                    <label id="txtname">Nombre</label>
                    <label id ="txtemail" >Email</label>
                    <div class="nombre">
                        
                        <input type="text" required id ="name">
                        
                        <input type="email" required id="correo">
                        
                    </div>
                    <div class="mensaje">
                        <textarea required id="mensaje2"></textarea>
                        
                    </div>
                    <input type="submit" id = "enviar" value="Enviar">
                </form>
        </section>
    </main>
</body>
<footer>
    <p>
        &copy:2024  Ecobel
    </p>
</footer>
</html>
