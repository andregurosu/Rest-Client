<?php
session_start();
if (!isset($_SESSION["user"])) header("Location: index.php");
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('PUT', '/api/pesanan/'.$_POST['id'], [
    'json' => [
        'nama' => $_POST['nama'],
        'pesanan' => $_POST['pesanan'],
        'jumlah' => $_POST['jumlah'],
        'harga' => $_POST['harga'],
        'status' => $_POST['status'],
    ],
    'headers' => [
        'Authorization' => "Bearer {$_SESSION["token"]}"
    ]
]);

$body = $response->getBody();
$data_body = json_decode($body, true);

if ($data_body['success'] = true) {
    header('location:pesanan.php'); 
};