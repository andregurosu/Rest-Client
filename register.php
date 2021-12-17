<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('POST', '/api/register', [
    'json' => [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'confirm_password' => $_POST['repassword'],
    ]
]);

$body = $response->getBody();
$data_body = json_decode($body, true);

if ($data_body['success'] = true) {
    header('location:index.php'); 
}