<?php
    $servername = "localhost";
    $username = "root";
    $password = "Carrera32$";
    $dbname = "canal102.tv";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo json_encode("Error de conexión: " . $e->getMessage());
        die();
    }
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        $query = 'SELECT * FROM feed WHERE feed_id = 1';
        $request = $conn->prepare($query);
        $request->execute();
        $response = [
            "status" => 200,
            "message" => "success",
            "data" => $request->fetch(),
            "signature" => "HTTP::RESPONSE::AT::" .time()
        ];
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(200);
        echo json_encode($response);
    }