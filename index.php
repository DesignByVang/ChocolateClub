<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Seb, Emil og Mads">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Chocolate Club - Forside</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo_lille.png" type="image/x-icon">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand d-lg-none toplogo mx-auto">
            <img src="images/logo_lille.png" alt="chocolate club logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="produkter.php">Produkter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="butikken.php">Butikken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="evnets.php">Events</a>
                </li>
                <a class="navbar-brand d-none d-lg-block" href="#">
                    <img src="images/logo_lille.png">
                </a>
                <li class="nav-item">
                    <a class="nav-link" href="omos.php">Om Os</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gavekort.php">Gavekort</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kurv</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero container-expand-lg">
    <img src="images/chokoladebarer.jpg" alt="chokoladebar" class="herobillede">
    <div class="row">
        <div class="col-6 mx-auto gap-2 d-grid">
            <div class="row justify-content-center">
                <div class="col">
                    <h1 class="velkomst text-light">Velkommen!</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mx-auto gap-2 d-grid">
            <div class="row justify-content-center">
                <div class="col">
                    <h6 class="info text-light">Chocolate Club er et nyopstartet chokoladekollektiv</h6>
                    <h6 class="info2 text-light">med det formål at danskerne nemt kan få verdensklasse chokolade til hvert et formål</h6>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container marketing text-center">
    <div class="row">
        <div class="col-lg-4 mt-3">
            <img class="rounded-circle mx-auto" width="140" height="140" src="images/Tobias Trads.png" alt="Tobias Trads">
            <h2 class="fw-normal mt-1">Tobias</h2><!--
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>-->
            <p><a class="btn btn-primary mt-1 text-light" href="#">Læs mere &raquo;</a></p>
        </div>
        <div class="col-lg-4 mt-3">
            <img class="rounded-circle mx-auto" width="140" height="140" src="images/Amalie Mikkelsen.png" alt="Amalie Mikkelsen">
            <h2 class="fw-normal mt-1">Amalie</h2><!--
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>-->
            <p><a class="btn btn-primary mt-1 text-light" href="#">Læs mere &raquo;</a></p>
        </div>
        <div class="col-lg-4 mt-3">
            <img class="rounded-circle mx-auto" width="140" height="140" src="images/Frederik Wolmar.png" alt="Frederik Wolmar">
            <h2 class="fw-normal mt-1">Frederik</h2><!--
            <p>And lastly this, the third column of representative placeholder content.</p>-->
            <p><a class="btn btn-primary mt-1 text-light" href="#">Læs mere &raquo;</a></p>
        </div>
    </div>

<footer class="container mt-5 bg-primary text-muted footer">
        <address class="text-light">E-mail: <a class="text-light" href="mailto:chococlub@mail.dk">chococlub@mail.dk</a>
        </address>
    <p class="text-light">&copy;2022 Chocolate Club. <a href="#">Privacy</a><a href="#">Terms</a></p>
</footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php
