<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />
    <style>
        /* Estilos adicionales para hacer el reproductor más atractivo */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }
        #my-video {
            width: 100%;
            height: 100%;
            max-height: 450px;
            max-width: 800px;
            margin: auto;
        }
        .player{
            margin: auto;
            align-self: center;
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            height: calc(100vw * 9 / 16);
            max-height: 450px;
        }
    </style>
</head>
<body>
    <div class="player">
        <video id="my-video" class="video-js" controls preload="auto" width="640" height="360"
            data-setup='{}'>
            <source src="https://unoatv.com/nginx/streaming/livestream/livestream.m3u8" type="application/x-mpegURL">
        </video>
    </div>
    <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>

</body>
</html>
 