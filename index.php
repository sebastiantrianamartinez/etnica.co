<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="frontend/styles/index.css">
    <link rel="shortcut icon" href="assets/media/images/favicon.png" type="image/x-icon">
    <title>Canal 102 | Emcali Televisión</title>
    <meta name="description" content="Señal en vivo del Canal 102 Emcali Televisión">
    
    <meta property="og:title" content="Canal 102 - Señal en Vivo por Emcali Televisión">
    <meta property="og:description" content="Disfruta de la señal en vivo del Canal 102, producido por Emcali Televisión.">
    <meta property="og:image" content="https://canal102.tv/assets/media/images/preview.jpg">
    <meta property="og:url" content="https://canal102.tv">
    <meta name="og:type" content="website">
    <meta name="og:site_name" content="Canal 102">

</head>
<body>
    <header>
        <h1 id="page-title">Canal 102</h1>
        <div>
            <img src="assets/media/images/logo.png" alt="">
        </div>
    </header>
    <main>
        <div class="player">
            <video id="my-video" class="video-js" controls preload="auto" autoplay width="640" height="360"
                data-setup='{}'>
                <source src="https://unoatv.com/nginx/streaming/livestream/livestream.m3u8" type="application/x-mpegURL">
            </video>
        </div>
    </main>
    <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>

</body>
</html>
 