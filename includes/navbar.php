<?php  $file_name = basename ($_SERVER['SCRIPT_FILENAME'],".php")?>
<!-- Section Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-alpha fixed-top">
        <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/Foxi.png" width="35" height="30" class="d-inline-block align-top" alt="">
                    Foxi
                </a>
        
            <div class="collapse navbar-collapse" id="navbarKey">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active': ''  ?> ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about' ? 'active': ''  ?>">
                    <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'blog' ||  $file_name == 'blog-detail' ? 'active': ''  ?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active': ''  ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </div> 
        </div>
    </nav>