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
    <title>Foxi Contect</title>
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php')?>

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
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-h1-about-index text-center">รายละเอียด</h2>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Address</h4>
                        <p class="card-text">Brabra....</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Tell</h4>
                        <p class="card-text">(+66).....</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Mail</h4>
                        <p class="card-text">Foxi@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-tital">แบบฟอร์มติดต่อ</h5>
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                    <label for="name">ผู้ติดต่อ</label>
                                <input type="text" id="name" class="form-control" placeholder="ชื่อผู้ติดต่อ">
                              </div>
                              <div class="form-group col-md-4">
                                    <label for="phone">เบอร์ผู้ติดต่อ</label>
                                <input type="text" id="phone" class="form-control" placeholder="เบอร์ผู้ติดต่อ">
                              </div>
                              <div class="form-group col-md-4">
                                    <label for="email">อีเมลผู้ติดต่อ</label>
                                <input type="text" id="email" class="form-control" placeholder="email@">
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="message">รายละเอียด</label>
                                <textarea class="form-control" id="message" " rows="10">ข้อความที่ต้องการติดต่อ</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary d-block mx-auto">ส่งข้อความ</button>
                          </form>
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