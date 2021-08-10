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
    <title>Foxi</title>
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php')?>

    <!-- Section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
                <div class="carousel-imge" style="background-image: url('https://images.unsplash.com/photo-1604898426702-4b4f1c5e973a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2584&q=80');">
                    <div class="carousel-caption">
                        <h1 class="text-danger font-weight-bold ">Foxi X Summer</h1>
                    </div>
                    
                </div>
          </div>
          <div class="carousel-item">
                <div class="carousel-imge" style="background-image: url('https://images.unsplash.com/photo-1445205170230-053b83016050?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1651&q=80');">
                    <div class="carousel-caption">
                        <h1 class="text-primary font-weight-bold">Foxi X Winter</h1>
                    </div> 
                    
                </div>
          </div>
          <div class="carousel-item">
                <div class="carousel-imge" style="background-image: url('https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80');">
                    <div class="carousel-caption">
                        <h1 class="text-success font-weight-bold">Foxi X Sping</h1>
                    </div> 
                 
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
    </section>

    <!-- Section About Index -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4 border-h1-about-index">Foxiz</h1>
          <p class="lead">Life depends on lifestyle youself.</p>
        </div>
    </div>
    
    <!-- Section Blog -->
    <section class="container ">
        <h1 class="display-5 border-h1-about-index text-center">STORIES</h1>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 p-2 ">
                    <div class="card h-100">
                        <a href="" class="warp-img-card">
                        <img src="https://images.unsplash.com/photo-1584299043675-7693e8e959f3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 p-2 ">
                    <div class="card h-100">
                        <a href="" class="warp-img-card">
                        <img src="https://images.unsplash.com/photo-1618136876655-f313da61b3e5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 p-2 ">
                    <div class="card h-100">
                        <a href="" class="warp-img-card">
                        <img src="https://images.unsplash.com/photo-1616362081749-2883d4b26781?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=987&q=80" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 p-2 ">
                    <div class="card h-100">
                        <a href="" class="warp-img-card">
                        <img src="https://images.unsplash.com/photo-1593278641722-49b1047ede21?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTR8fHQlMjBzaGlydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 p-2 ">
                    <div class="card h-100">
                        <a href="" class="warp-img-card">
                        <img src="https://images.unsplash.com/photo-1578237421804-9674940e8b8e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTM2fHx0JTIwc2hpcnR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 p-2 ">
                    <div class="card h-100">
                        <a href="" class="warp-img-card">
                        <img src="https://images.unsplash.com/photo-1590657877240-b26e7c4a3b0a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTg1fHx0JTIwc2hpcnR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <!-- Section Footer -->
    <?php include_once('includes/footer.php')?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax-video.min.js"></script>
</body>
</html>