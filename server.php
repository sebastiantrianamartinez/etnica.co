<?php
    require 'vendor/autoload.php';

    use Ratchet\Server\IoServer;
    use Ratchet\Http\HttpServer;
    use Ratchet\WebSocket\WsServer;
    use React\EventLoop\Factory;
    use React\Socket\SecureServer;
    use React\Socket\Server;
    use Ratchet\MessageComponentInterface;
    use Ratchet\ConnectionInterface;
   
    class WebSocketController implements MessageComponentInterface {
        protected $clients;

        public function __construct() {
            $this->clients = new \SplObjectStorage;
        }

        public function onOpen(ConnectionInterface $conn) {
            $this->clients->attach($conn);

            echo "Nueva conexión: {$conn->resourceId}\n";
        }

        public function onMessage(ConnectionInterface $from, $msg) {
            $data = json_decode($msg, true); // Decodificar el mensaje JSON

            if (isset($data['type'])) {
                // Llamar a la función handleMessage si el tipo de mensaje es "update"
                if ($data['type'] === 'update') {
                    $this->handleMessage($data);
                }
            }
        }

        public function onClose(ConnectionInterface $conn) {
            $this->clients->detach($conn);

            echo "Conexión {$conn->resourceId} ha sido cerrada\n";
        }

        public function onError(ConnectionInterface $conn, \Exception $e) {
            echo "Error: {$e->getMessage()}\n";

            $conn->close();
        }

        protected function handleMessage(array $data) {
            // Validar otros datos según sea necesario
            if (isset($data['message'])) {
                $updateMessage = json_encode([
                    'type' => 'update',
                    'content' => $data['message']
                ]);

                // Enviar el mensaje de actualización a todos los clientes conectados
                foreach ($this->clients as $client) {
                    $client->send($updateMessage);
                }
            }
        }
    }

    $webSocketController = new WebSocketController();

    
    
    $loop = Factory::create();
    $webSock = new SecureServer(
        new Server('0.0.0.0:23656', $loop),
        $loop,
        [
            'local_cert' => '/etc/letsencrypt/live/canal102.tv/fullchain.pem',
            'local_pk'   => '/etc/letsencrypt/live/canal102.tv/privkey.pem',
        ]
    );
    
    $webServer = new IoServer(
        new HttpServer(
            new WsServer(
                $webSocketController
            )
        ),
        $webSock
    );
    try{
        $loop->run();
        echo "Servidor WebSocket iniciado en el puerto 23656\n";
    }
    catch(Exception $e){
        echo 'error: ' .$e;
        exit();
    }
   
    