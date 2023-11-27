var ipaleta = document.getElementById('paleta');
var ipuja = document.getElementById('puja');
var ilote = document.getElementById('lote');
var ispuja = document.getElementById('starter-puja');
var ispaleta = document.getElementById('starter-paleta');
var islote = document.getElementById('starter-lote');


const socket = io('wss://canal102.tv:23656');

        
socket.on('connect', () => {
    console.log('Conectado al servidor WebSocket');
  });

  socket.on('disconnect', () => {
    console.log('Desconectado del servidor WebSocket');
  });

  socket.on('message', (data) => {
    console.log('Mensaje recibido:', data);
    // Aquí puedes manejar el mensaje recibido del servidor
  });


function sendUpdate(){
    const message = {
        type: 'update',
        message: ipuja.value
    };
    socket.send(JSON.stringify(message));
}

function sendBid(event){
    event.preventDefault();
    var form = document.getElementById('bid-form');
    var formData = new FormData(form);
    fetch('core/bid.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(response => {
        sendUpdate();
        ipaleta.value = "";
        ipuja.value =  "";
    });
}

function sendLot(event){
    event.preventDefault();
    var form = document.getElementById('lot-form');
    var formData = new FormData(form);
    fetch('core/lot.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(response => {
        sendUpdate();
        updateLot(ispuja.value);
        ispaleta.value = "";
        ispuja.value =  "";
        islote.value = "";
    });
}

function update(){
    paleta = document.getElementById('info-paleta');
    puja = document.getElementById('info-puja');
    lote = document.getElementById('info-lote');
    fetch('core/lot.php', {
        method: 'GET',
    })
    .then(response => response.json())
    .then(response => {
        paleta.innerHTML = response.bid_number;
        puja.innerHTML = response.bid_value;
        lote.innerHTML = response.bid_lot;
    });
}

function updateLot(tpuja){
    puja = document.getElementById('info-starter-puja');
    puja.innerHTML = tpuja;
}

update();



socket.addEventListener('message', (event) => {
    console.log('Mensaje recibido:', event.data);
    const message = JSON.parse(event.data);
    if (message.type === 'update') {
        update();
    }
});
       