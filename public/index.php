<?php

use App\config\DbConfig;
use Symfony\Component\Dotenv\Dotenv;

require_once "../vendor/autoload.php";

$dotEnv = new Dotenv();
$dotEnv-> loadEnv('.env');
$pdo = DbConfig::getPdoInstance();

header('Content-type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: http://127.0.0.1:5500/%27');




$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode('/',$uri);
$uriPartsCount = count($uruiparts);
$method = $_SERVER['REQUEST_METHOD'];


if ($uri === '/product'&& $method ==='GET')
{
    $stmt->query('SELECT * FROM product_api');
    $results = $stmt->fetchAll();
    echo json_encode($results);
}

if ($uri === '/product'&& $method ==='POST'){
    $data = json_decode(file_get_contents('php://input'),true);
    $query = 'INSERT INTO product_api VALUES(null, :nom, :desccrip, :price)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        "nom"=> $data['nom'],
        "descrip"=> $data['description'],
        "price"=> $data['price']
    ]);
    http_response_code(201);
}

if ($uri === '/product'&& $method === 'DELETE' && $uriPartsCount === 3){
    $id = intval($uriParts[2]);
    $query = 'DELETE FROM product_api WHERE id_product_api=:id_product';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        "id_product_api"=> $id
    ]);
}