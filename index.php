<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet">
    <style>
        /* Estilos adicionales para hacer el reproductor más atractivo */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #222;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        #my-video {
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>

<video id="my-video" class="video-js" controls preload="auto" width="640" height="360"
       data-setup='{}'>
    <source src="https://unoatv.com/nginx/streaming/livestream/livestream.m3u8" type="application/x-mpegURL">
</video>

<script src="https://vjs.zencdn.net/7.15.4/video.js"></script>

</body>
</html>
 