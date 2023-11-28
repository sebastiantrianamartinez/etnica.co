<?php

    date_default_timezone_set('America/Bogota');

    $servername = "localhost";
    $username = "root";
    $password = "Carrera32$";
    $dbname = "canal102.tv";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo json_encode("Error de conexión: " . $e->getMessage());
        die();
    }

    $query = 'SELECT * FROM feed WHERE feed_id = 1';
    $request = $conn->prepare($query);
    $request->execute();
    $request = $request->fetch();
?>

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
                    <p>Mi última alimentación fue:<p><b><?php
                    echo date('d M Y h:i A', $request["last_feed"]);
                    ?></b> 
                </div>
                <div class="info-item">
                    <p>El último llenado fue:<p><b><?php
                    echo date('d M Y h:i A', $request["last_full"]);
                    ?></b> 
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