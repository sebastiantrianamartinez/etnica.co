const https = require('https');
const fs = require('fs');
const express = require('express');
const socketIO = require('socket.io');

const options = {
    key: fs.readFileSync('/etc/letsencrypt/live/canal102.tv/privkey.pem'),
    cert: fs.readFileSync('/etc/letsencrypt/live/canal102.tv/fullchain.pem'),
  };

const app = express();
const server = https.createServer(options, app);
const io = require('socket.io')(server, {
    cors: {
      origin: "https://canal102.tv",
      methods: ["GET", "POST"]
    }
  });

io.on('connection', (socket) => {
  console.log('Usuario conectado');

socket.on('messageFromClient', (message) => {
  console.log(`Message received from the client: ${message}`);
  // Check if the message type is "messageGlobal"
  if (message.type === 'messageGlobal') {
  // Broadcast the message to all clients
    io.emit('globalMessage', message);
  }
});
   

io.emit('mensajeGlobal', '¡Hola a todos!');

  socket.on('disconnect', () => {
    console.log('Usuario desconectado');
  });
});

const PORT = 23656;
server.listen(PORT, () => {
  console.log(`Servidor Socket.IO escuchando en el puerto ${PORT}`);
});
