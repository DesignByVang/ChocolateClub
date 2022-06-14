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



<div class="container marketing mt-3 text-center">
    <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle mt-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2 class="fw-normal ">Tobias</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p><a class="btn btn-primary" href="#">Læs mere &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle mt-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2 class="fw-normal">Amalie</h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-primary" href="#">Læs mere &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle mt-3" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

            <h2 class="fw-normal">Frederik</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-primary" href="#">Læs mere &raquo;</a></p>
        </div>
    </div>


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php
