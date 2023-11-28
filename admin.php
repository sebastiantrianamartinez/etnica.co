<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link rel="stylesheet" href="styles/admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>
    <link rel="shortcut icon" href="assets/media/images/cat.png" type="image/x-icon">
</head>
<body> 
    <header>
        <img src="assets/media/images/cat.png" alt=""  class="logo" srcset="">
        <h1>Control alimentación</h1>
    </header>
   <main>
        <div class="info-panel">
            <img src="assets/media/images/cat_2.png" alt="">
            <div class="info">
                <h2>¡Recuerda!</h2>
                <div class="info-item">
                    <p>Mi última alimentación fue:<p><b>26 Noviembre 2023 7:00 p.m. </b> 
                </div>
                <div class="info-item">
                    <p>El último llenado fue:<p><b>26 Noviembre 2023 7:00 p.m. </b> 
                </div>
            </div>
        </div>
        <div class="control-panel">
            <button class="feed" onclick="feed();">¡Aliméntame!</button>
            <button class="feed" onclick="full();">Reportar nuevo llenado</button>
        </div>
   </main>
   <footer>
        <div class="footer-copyright">
            <p>Todos los derechos reservados 2023 ©</p>
            <p>Nicole Cuervo Pérez</p>
            <p>Diana Paola Zapata Carvajal</p>
        </div>
        <div class="footer-project-reciber">
            <img src="assets/media/images/utp.png" alt="">
        </div>
   </footer>
</body>
<script src="scripts/admin.js"></script>

</html>