<?php
    date_default_timezone_set('America/Bogota');

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
        if(isset($_GET["success"]) && $_GET["success"]){
            $query = 'UPDATE feed SET feed_pending =?, last_feed=? WHERE feed_id=1';
            $request = $conn->prepare($query);
            $request->execute(['nope', time()]);
            $response = [
                "status" => 200,
                "message" => "success, updated",
                "data" => NULL,
                "signature" => "HTTP::RESPONSE::AT::" .time()
            ];
            eader('Content-Type: application/json; charset=utf-8');
            http_response_code(200);
            echo json_encode($response);
            die();
        }
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
        die();
    }
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        if(isset($_POST["feed"]) && $_POST["feed"]){
            $query = 'UPDATE feed SET feed_pending =? WHERE feed_id=1';
            $request = $conn->prepare($query);
            $request->execute(['yespending']);
            $response = [
                "status" => 200,
                "message" => "success, updated",
                "data" => NULL,
                "signature" => "HTTP::RESPONSE::AT::" .time()
            ];
            eader('Content-Type: application/json; charset=utf-8');
            http_response_code(200);
            echo json_encode($response);
            die();
        }
        if(isset($_POST["full"]) && $_POST["full"]){
            $query = 'UPDATE feed SET last_full =? WHERE feed_id=1';
            $request = $conn->prepare($query);
            $request->execute([time()]);
            $response = [
                "status" => 200,
                "message" => "success, updated",
                "data" => NULL,
                "signature" => "HTTP::RESPONSE::AT::" .time()
            ];
            eader('Content-Type: application/json; charset=utf-8');
            http_response_code(200);
            echo json_encode($response);
            die();
        }
    }