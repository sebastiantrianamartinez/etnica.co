<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles/admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>
</head>
<body> 

    <div class="admin-section">
        <h2>Información Actual:</h2>
        <div class="info-box">
            <div class="info-item">
                <p id="info-lote"></p>
                <div><b>Lote actual</b></div>
            </div>

            <div class="info-item">
                <p id="info-paleta"></p>
                <div><b>Paleta actual</b></div>
            </div>

            <div class="info-item">
                <p id="info-puja"></p>
                <div><b>Puja actual (M)</b></div>
            </div>

            <div class="info-item">
                <p id="info-starter-puja"></p>
                <div><b>Puja inicial (M)</b></div>
            </div>
        </div>
    </div>

    <div class="admin-section">
        <h2>Nueva puja:</h2>
        <div class="bid-form-box">
            <form class="bid-form" id="bid-form">
                <div>
                    <input type="text" placeholder="Paleta" name="paleta" id="paleta">
                </div>
                <div>
                    <input type="text" placeholder="Puja" id="puja" name="puja" id="puja">
                    <p>M</p>
                </div>
                <div class="app-button">
                    <input type="button" value="Enviar" onclick="sendBid(event);">
                </div>
            </form>
        </div>
    </div>
    
   

    <div class="admin-section">
        <h2>Nuevo lote:</h2>
        <div class="bid-form-box">
            <form action="" class="bid-form" id="lot-form">
                <div>
                    <input type="text" placeholder="Lote" name="lot" id="starter-lote">
                </div>
                <div>
                    <input type="text" placeholder="Paleta I." name="paleta" id="starter-paleta">
                </div>
                <div>
                    <input type="number" placeholder="Puja I." name="puja" id="starter-puja">
                    <p>M</p>
                </div>
                <div class="app-button" onclick="sendLot(event);">
                    <input type="button" value="Enviar" onclick="sendLot(event);">
                </div>
            </form>
        </div>
    </div>    
</body>
<script src="scripts/admin.js"></script>

</html>