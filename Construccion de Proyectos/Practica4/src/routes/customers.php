<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->options('/{routes:.+}', function ($request, $response, $args){
    return $response;
});


//Llama a todos los registros 
$app->get('/api/consultarregistros', function(Request $request, Response $response){
    $sql = "SELECT * FROM usuarios";

        try
        {
            $db = new db();
            $db = $db->connect();

            $stmt = $db->query($sql);
            $custumers = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            echo json_encode($custumers);
        }  catch(PDOException $e){
            echo '{"error": {"text": '.$e->getMessage().'}';
        }
});


//
$app->post('/api/custumer/add', function(Request $request, Response $response))