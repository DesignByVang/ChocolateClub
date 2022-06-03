<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Album example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">




    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .navbar .navbar-nav .nav-link {
            color: #000000;
            font-size: 1.1em;
        }
        .navbar .navbar-nav .nav-link:hover{
            color: #808080;
        }
        .navbar-logo-centered .navbar-nav .nav-link{
            padding: .5em 1em;
        }

        .navbar-brand img{
            width: 70px;
        }
        .navbar-brand{
            margin-right: 0;
        }
        .navbar-nav{
            align-items: center;
        }
        .navbar .navbar-nav .nav-link{
            color: black;
            font-size: 1.1em;
            padding: 20px;
        }
        @media screen and (max-width: 992px) {
            .navbar-brand{

            }
        }
    </style>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <ul class="navbar-nav mx-auto">
            <a class="navbar-brand d-lg-none" href="index.php">
                <img src="images/logo_lille.png"></ul>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="produkter.php">Produkter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="butikken.php">Butikken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="evnets.php">Events</a>
                </li>
                <a class="navbar-brand d-none d-lg-block" href="index.php">
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

</body>
</html><?php
