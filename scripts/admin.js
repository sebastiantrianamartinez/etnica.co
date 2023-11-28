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


  function full(){
    var messageToSend = {
        type: 'messageGlobal',
        content: '9',
    };
    socket.emit('messageFromClient', messageToSend);
  }

  function feed(){
    var messageToSend = {
        type: 'messageGlobal',
        content: '7',
    };
    socket.emit('messageFromClient', messageToSend);
  }