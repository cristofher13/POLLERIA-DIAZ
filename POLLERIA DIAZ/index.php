<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Seccion Diaz</title>
<!-- ............................................................ -->
<link rel="icon" type="image/png" href="img/icon.ico">
<link rel="stylesheet" href="style.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
<!-- ............................................................ -->
</head>
<!-- link con css -->
<img src="img/portadadiazpng.png" alt="" class="achicar">
<body>
    <div class="letras">
<div class="login-container">
<!-- fuente de empresa -->
<h1><span class="Empresa">POLLERIA DIAZ </span></h1>
        <!-- Formulario de login -->
        <form action="cargandovip.html" method="POST">
        <h2> Iniciar Sesión  <img src ="/img/google.png" alt="" class="gugel"></h2>
            <label for="email">Correo Electronico:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit" href="cargandovip.html">Iniciar Sesion</button>


        <h2>¡Registrate para conocer nuestros platos del dia!</h2>
        <p>"Al ser nuestro socio tenemos muchas ofertas y platos para ti"</p>
    </br>
    <a href="cargando.html" class="btn">Seguir como invitado</a>
    </div>
</head>
<!-- ............................................................ -->

<footer>
        <div class="footer-container">
            <div class="footer-section">

                <h3>SERVICIOS</h3> 
                <p><strong>Dirección:</strong></p>
                     📍Av. Velasco Sector 2 GP 23 MZ "F" LT  22 Villa el Salvador<BR>
                     📍AV. MICAELA VASTIDAS 1666 - RUTA B  Villa el Salvador</p>
                <p><strong>DELIVERY & TAKE OUT</strong></p>
                <p>Lunes a Domingos 11:30 a.m. a 10:00 p.m.</p>
                <p><strong>PIDE LLAMANDO AL: <BR>901505855 - 921004541
                     </strong></p>
            </div>
               
            <div class="footer-section">

            <h3>NOSOTROS</h3>       
            <p><a href="postulacion.php">¡Postula aquí!</a></p>
            <p><a href="historia.html">Nuestra Historia</a></p>
            <p><a href="https://www.google.com/maps/place/Poller%C3%ADa+D%C3%ADaz/@-12.0422013,-77.2584482,10z/data=!4m10!1m2!2m1!1spolleria+diaz!3m6!1s0x9105b9eb264aea4d:0x9fb384fcb06465d9!8m2!3d-12.211055!4d-76.9451992!15sCg1wb2xsZXJpYSBkaWF6Wg8iDXBvbGxlcmlhIGRpYXqSARJjaGlja2VuX3Jlc3RhdXJhbnTgAQA!16s%2Fg%2F11rylgd692?entry=ttu">Locales</a></p>
            </div>
            <div class="footer-section">

                <h3>MÉTODO DE PAGO</h3>
                <img src="img/bcp.png" alt="bcp" class="bcp">
                <img src="img/yape.png" alt="yape">
                <p>Tarjetas de crédito,débito y Yape online</p>
            </div>
            <div class="footer-section">

            <h3>MAS</h3>
                <p>CHMM S.A.C. - 20606663227</p>
                <p>Política de Privacidad</p>
                <p>Protocolo Pet Friendly</p>
                <p>Libro de Reclamaciones</p>
                <p>Atención al Cliente</p>
                <p>Tel. 921-004-541</p>
                <a href="libro.php">
        <img src="/img/libronegro.png" alt="Libro de Reclamaciones" class="libro">
    </a>


                </div>
       
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
            <p class="derechos">@POLLERIA DIAZ'S 2024 todos los derechos reservados</p>
        </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Aquí puedes procesar los datos recibidos, por ejemplo, validar credenciales, etc.
    if ($email == 'usuario@example.com' && $password == 'contraseña') {
        echo "Inicio de sesión exitoso";
        // Aquí podrías redirigir a otra página, actualizar la sesión, etc.
    } else {
        echo "Credenciales incorrectas";
    }
}
?>