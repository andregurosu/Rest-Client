<?php
session_start();
if (!isset($_SESSION["user"])) header("Location: index.php");
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8001',
    'timeout' => 5

]);

$response = $client->request('GET', '/api/makanan');
$body = $response->getBody();
$data_body = json_decode($body);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>MENU</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="#">AYO MAKAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
                    <a class="nav-link active" aria-current="page" href="pesanan.php">Pesanan</a>
                    <a class="nav-link active" aria-current="page" href="pesananform.php">Input</a>
                    <a class="nav-link active" aria-current="page" href="pesananupdate.php">Update</a>
                    <a class="nav-link active" aria-current="page" href="pesanandelete.php">Delete</a>
                    <a class="nav-link active" aria-current="page" href="logoutpage.php">Log Out</a>
                </div>
            </div>

        </div>

    </nav>

    <div class="container">
        <div class="row">
            <h1>ALL MENU</h1>
        </div>
        <div class="row">
            <?php foreach ($data_body as $row) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row->url_foto ?>" , style="width: 286px; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row->nama ?></h5>
                            <p class="card-text"><?php echo $row->asal ?></p>
                            <p class="card-text"><?php echo $row->harga ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>

</html>