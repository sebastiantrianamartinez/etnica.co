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
            <video id="my-video" class="video-js" controls preload="auto" width="640" height="360"
                data-setup='{}'>
                <source src="https://unoatv.com/nginx/streaming/livestream/livestream.m3u8" type="application/x-mpegURL">
            </video>
        </div>
    </main>
    <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>

</body>
</html>
 