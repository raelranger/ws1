<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Css -->
    <link rel="stylesheet" href="assets/sty.css">
    <!-- Font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Icon/logo title page -->
    <link rel="icon" type="imge" href="assets/Foxi.png">
    <title>Foxi Blog Detail</title>
</head>
<body>
    <!-- Section Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-alpha fixed-top">
        <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/Foxi.png" width="35" height="30" class="d-inline-block align-top" alt="">
                    Foxi
                </a>
        
            <div class="collapse navbar-collapse" id="navbarKey">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                </li>
            </div>  
        </div>
    </nav>

    <!-- Section Header -->
    <header class="jarallax-header" data-jarallax='{"speed":0.6}' data-jarallax-video="mp4:assets/video1.mp4">
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                    <h2 class="heading is-1">
                        <small>แฟชั่น</small>
                        <span>The Foxi </span>
                    </h2>
                    <span class="button is-1">Find US</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container">
        <div class="row">
            
        </div>
    </section>
    
    <!-- Section Footer -->
    <footer class="semi-footer p-5 text-center text-md-left">
        <div class="row">
            <div class="section-footer col-md-4">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/Foxi.png" width="35" height="30" class="d-inline-block align-top" alt="">
                    <span class="text-danger"> Foxi</span> 
                </a>

            </div>
            <div class="section-footer  col-md-4">
                NEED HELP ?
                <ul class="grop-drawer">
                    <li class="footer-item">
                        <a class="footer-link" href="">Contact</a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-link" href="">Shopping Mall</a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-link" href="">Service</a>
                    </li>
                </ul>
            </div>
            <div class="section-footer col-md-4">
                FIND US ON
                <ul class="grop-drawer">
                    <li class="footer-item">
                        <a target="_blank" class="footer-link fab fa-facebook-f"  href=""> Facebook</a>
                    </li>
                    <li class="footer-item">
                        <a target="_blank" class="footer-link fab fa-twitter" href=""> Twitter</a>
                    </li>
                    <li class="footer-item">
                        <a target="_blank" class="footer-link fab fa-instagram" href=""> Instagram</a>
                    </li>
                    <li class="footer-item">
                        <a target="_blank" class="footer-link fab fa-youtube" href=""> Youtube</a>
                    </li>
                    <li class="footer-item">
                        <a target="_blank" class="footer-link fab fa-line" href=""> Line</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax-video.min.js"></script>
</body>
</html>