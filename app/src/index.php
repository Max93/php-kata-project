<?php

namespace LOVEThESIGN;

require_once __DIR__.'/../vendor/autoload.php';

use LOVEThESIGN\Helpers\Response;

$response = new Response();

$conn = new \PDO("mysql:host=mysql;dbname=mydb", 'root', 'root');

if($_SERVER['REQUEST_METHOD'] !== "POST") {
    echo $response->Json(["message" => "method not allowed"], 405);
    exit();
}

echo $response->Json(["message" => "Taikyoku Kake uke"], 200);