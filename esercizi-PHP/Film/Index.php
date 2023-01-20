<?php 
    $connection = require 'database/connection.php';
    $connection.init_connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css"> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="resources/images/cinema.png" alt="" width="60" height="60">
        </a>
            <a class="navbar-brand" href="#"><h1><span class="blue">&lt;</span>Cinema Spaziale<span class="blue">&gt;</span> <span class="yellow">Film</span></h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="?meth=add">Aggiungi Film</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link active" href="?meth=ele">Elenco Film</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <?php include('controllers/HomeController.php') ?>

</body>
</html>
<?php
$connection.destroy_connection();
?>