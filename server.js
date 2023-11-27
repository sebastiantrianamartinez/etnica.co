const http = require('http');
const express = require('express');
const socketIO = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIO(server);

io.on('connection', (socket) => {
  console.log('Usuario conectado');

  // Aquí puedes manejar eventos cuando un usuario se conecta

  socket.on('disconnect', () => {
    console.log('Usuario desconectado');
  });
});

const PORT = 23656;
server.listen(PORT, () => {
  console.log(`Servidor Socket.IO escuchando en el puerto ${PORT}`);
});
