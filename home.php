<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="navbar-brand">QUANTUM TECHNOLOGIES</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php"><i class="fas fa-user"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.php"><i class="fas fa-briefcase"></i> Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center" style="margin: 20px auto; padding: 20px; height: auto; display: flex; flex-direction: column; justify-content: center;">
        <h1 class="display-4">Hello, I'm Savage!</h1>
        <p class="lead">Innovative Developer | Tech Enthusiast | Lifelong Learner</p>
        <hr class="my-4">
        <hr>
        <p>Explore my portfolio to see my latest projects and achievements.</p>
        <a class="btn btn-primary btn-lg" href="portfolio.php" role="button">View Portfolio</a>
    </div>

    <!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/web.png" class="d-block w-100" alt="Web Development">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Web Development</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/graphics.png" class="d-block w-100" alt="Graphics Designing">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Graphics Designing</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/networking.png" class="d-block w-100" alt="Networking">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Networking</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <style>
        .carousel-item img {
            height: 300px; /* Reduced height */
            object-fit: cover;
        }
        .carousel-caption h5 {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
    </style>

    <script>
        $(document).ready(function(){
            $('#carouselExampleIndicators').carousel({
                interval: 3000
            });
        });
    </script> -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left border-right">
                <h5 class="text-uppercase">Partners</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="#!" class="text-dark">Duka Pro</a></li>
                    <li><a href="#!" class="text-dark">Soko kuu</a></li>
                    <li><a href="#!" class="text-dark">Zhan zilong</a></li>
                    <li><a href="#!" class="text-dark">Quantum Tech</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left border-right">
                <h5 class="text-uppercase">Social Networks</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="#!" class="text-dark"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="#!" class="text-dark"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#!" class="text-dark"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
                    <li><a href="#!" class="text-dark"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left border-right">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="home.php" class="text-dark">Home</a></li>
                    <li><a href="about.php" class="text-dark">About</a></li>
                    <li><a href="portfolio.php" class="text-dark">Portfolio</a></li>
                    <li><a href="contact.php" class="text-dark">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-left">
                <h5 class="text-uppercase">Sponsors</h5>
                <ul class="list-unstyled mb-0">
                    <li><a href="#!" class="text-dark"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Tesla_logo.png" alt="Tesla" style="width: 20px; height: 20px;"> Tesla</a></li>
                    <li><a href="#!" class="text-dark"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Meta" style="width: 20px; height: 20px;"> Meta</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
        &copy; 2024 Quantum Technologies. All rights reserved.
    </div>
</footer>
</html>

