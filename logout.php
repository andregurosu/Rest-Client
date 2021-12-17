<?php
session_start();

$_SESSION["user"] = $data_body['data']['name'];
$_SESSION["token"] = $data_body['data']['token'];

unset($_SESSION["user"]);
unset($_SESSION["token"]);

session_unset();
session_destroy();
header("Location: index.php");
