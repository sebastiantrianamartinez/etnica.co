/*const socket = io('wss://canal102.tv:23656');

        
socket.on('connect', () => {
    console.log('Conectado al servidor WebSocket');
  });

  socket.on('disconnect', () => {
    console.log('Desconectado del servidor WebSocket');
  });

  socket.on('message', (data) => {
    console.log('Mensaje recibido:', data);
    // Aquí puedes manejar el mensaje recibido del servidor
  });*/


  function full(){
    var formData = new FormData();
    formData.append('full', true);
    fetch('../data.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(response => {
      alert("Reporte de llenado enviado exitosamente");
    });
  }

  function feed(){
    var formData = new FormData();
    formData.append('feed', true);
    fetch('../data.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(response => {
      alert("Señal para alimentar enviada exitosamente");
    });
  }