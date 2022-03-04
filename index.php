<?php include('./php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    
    <link rel="stylesheet" href="./CSS/style.css">
    <title>HomePage</title>
    <link rel="icon" href="./images/green.png">
</head>
<body>
    <div id="transparent"></div>
<!-- TOP NAV -->
    <nav class="navbar navbar-expand-lg bg beige navbar-light  d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@easy.TECH.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">+370 666 55444</a>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text ">
                                <i class="fa fa-fw fa-search ms-4"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-light ms-4"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none ms-2" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-light ms-4"></i>
                        
                    </a>
                    <div class="d-flex">
                        <?php  
                        
                        if (isset($_SESSION['username'])){
                             ?>
                            <p class="mx-2 mb-0">
                                <strong>
                                    <?php echo $_SESSION["username"]; ?>
                                </strong>
                            </p>
                            <?php
                            echo '
                            <p class="ms-2 mb-0">
                                <a href="./php/logout.php" style="color: green;">logout</a>
                            </p>';
                        }else{
                            echo '
                            <a class="nav-icon position-relative text-decoration-none ms-2" href="#">
                                <i onclick="registration()" class="fa fa-fw fa-user text-light ms-4"></i>
                            </a>';
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade bg-transperant" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg beige text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- close Modal -->
<!-- CLOSE TOP NAV -->

    <div class="hide" id="hide">
        <div class="registration">
            <!-- Login -->
            <div class="h-100 me-2" id="login">
                <h5 class="text-center my-5 col-12">Login</h5>
                <a href="#" onclick="closing()" class="close fs-1 text-secondary" aria-hidden="true">&times;</a>
                <?php include('./php/errorslogin.php'); ?>
                <form method="post" action="index.php">
                    <div class="form-outline mb-5 d-flex justify-content-center">
                        <input type="email" id="email" name="email" class="form-control w-75" placeholder="Your Email" />
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <input type="password" id="password" name="password" class="form-control w-75" placeholder="Password" />
                    </div>
                    <div class="row d-flex justify-content-around m-4">
                        <div class="col-6 mt-1">
                            <a href="./registration/registration.php">Create your account</a>
                        </div>
                        <div class="col-6 d-flex justify-content-end h-25">
                            <button type="submit" class="btn btn-success" name="login_user">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Registration -->

    <!-- HEADER-BOTTOM -->
    <nav class="navbar sticky-lg-top  navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand text-success" href="#">easy.TECH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">TABLET</a></li>
                  <li><a class="dropdown-item" href="#">DESKTOP</a></li>
                  <li><a class="dropdown-item" href="#">LAPTOP</a></li>
                </ul>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">APPLE</a></li>
                  <li><a class="dropdown-item" href="#">DELL</a></li>
                  <li><a class="dropdown-item" href="#">HP</a></li>
                  <li><a class="dropdown-item" href="#">LENOVO</a></li>
            </ul>
            
          </div>
        </div>
      </nav>
<!-- CLOUSE HEADER-BOTTOM  -->

<div class="bg-image  pb-5">
    <img src="./images/header-img.jpg" class="fluid" alt="...">
</div>


<!-- CATEGORY IMAGES -->
<div class="container container-category bg abstract pt-5 pb-5">
    <div class="row g-2 ">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex ">
            <a href="#" class="hovereffect justify-content-center">
                <img class="img-fluid" src="./images/tablet-1.jpeg" alt="">
                <div class="overlay">
                    <p>Tablets</p> 
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex ">
            <a href="#" class="hovereffect justify-content-center">
                <img class="img-fluid" src="./images/desctop-2.jpg" alt="">
                <div class="overlay">
                    <p>Desktops</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex  ">
            <a href="#" class="hovereffect justify-content-center">
                <img class="img-fluid" src="./images/laptop-3.jpg" alt="">
                <div class="overlay">
                    <p>Laptops</p>
                </div>
            </a>
        </div>
    </div>
</div>
<!--  CLOUSE CATEGORY IMAGES -->


<!-- ABOUT US -->
<div class="container  mt-3 w-80 bg abstract">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center pt-4 pb-4">
            <img class="img-fluid img-frame" src="./images/man-typing.jpg" alt="">
        </div>
        <div class="col-lg-6 col-md-12 pt-5 ">
            <div class="row gx-5">
                <div class="col-lg-12 col-md-12 col-sm-12 text-justify">
                    <h4 class="mb-3">About Us</h4>
                    <p><i>easy.TECH</i> was founded in 2007. Our plan was simple: let's make it easy for people to buy PC online, affordably with delivery to their door.</p>   
                    <p>Now <i>easy.TECH </i>is one of the fastest growing IT retailer we are committed to provide the best customer service and competitive price in the market.</p>
                    <p>We supply a wide range of notebook, desktop and tablets from major vendor. We are the premier notebook reseller for leading brands such as Apple, Dell, HP, Lenovo. </p>  
                    <p> Our products and sales team reflect reliability, competitive prices and supportive customer service.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5 text-justify">
                    <h4 class="mb-3">Shipping</h4>
                    <p>We ship around the globe. We ship most international packages via DHL. Free Expedited Shipping for most orders over €200.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5 text-justify">
                    <h4 class="mb-3">Returns</h4>
                    <p>If you are dissatisfied with your purchase for any reason, you may return it to <i>easy.TECH</i>within 30 days of the delivery date.</p>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--CLOUSE ABOUT US -->


<!--  FEATURED PRODUCT  -->
        <!-- Jumbatron -->
        <div class="container-fluid py-2 bg beige">
            <div class="row text-light text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Latest Products</h1>
                    <p>
                        Discover and view the latest products  available at easy.TECH
                    </p>
                </div>
            </div>
        <!-- Clouse jumbatron -->

        <!-- Product card  -->
        <div class="container pt-3 pb-3">
            <div class="row g-3">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./images/appleipad.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Tablet</span> <span class="price">€499</span> </div>
                            <p>iPad Air (64GB, Wi-Fi)</p>
                            <div class="buttons d-flex justify-content-center"> <button class="btn btn-outline-secondary mr-1">Buy Now</button> <button class="btn btn beige">Add to cart</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./images/applemac.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Laptop</span> <span class="price">€2 139 </span> </div>
                            <p> APPLE MacBook Pro 14" M1 Pro 8C CPU</p>
                            <div class="buttons d-flex justify-content-center"> <button class="btn btn-outline-secondary mr-1">Buy Now</button> <button class="btn beige">Add to cart</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./images/delldesctop.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Desktop</span> <span class="price">€999</span> </div>
                            <p>Dell Latitude 3340</p>
                            <div class="buttons d-flex justify-content-center"> <button class="btn btn-outline-secondary mr-1">Buy Now</button> <button class="btn beige">Add to cart</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./images/lenovotablet.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Tablet</span> <span class="price">€599</span> </div>
                            <p>Lenovo Tab P12 Pro</p>
                            <div class="buttons d-flex justify-content-center"> <button class="btn btn-outline-secondary mr-1">Buy Now</button> <button class="btn beige">Add to cart</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./images/hpdesktops.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Desktop</span> <span class="price">€614</span> </div>
                            <p>HP Desktop 460 </p>
                            <div class="buttons d-flex justify-content-center"> <button class="btn btn-outline-secondary mr-1">Buy Now</button> <button class="btn beige">Add to cart</button> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./images/lenovo laptop.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Laptop</span> <span class="price">€916</span> </div>
                            <p>ThinkPad T14s Gen 2 AMD (14”) </p>
                            <div class="buttons d-flex justify-content-center"> <button class="btn btn-outline-secondary mr-1">Buy Now</button> <button class="btn beige">Add to cart</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>    
<!--Clouse Product card  -->
<!-- CLOUSE FEATURED PRODUCT  -->


<!-- TESTIMONIAL -->
<section class="testimonial-slider container bg-light bg abstract pt-3 pb-1">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner py-5 text-center">
            <div class="carousel-item active">
                <i class="fa fa-quote-right pt-5"></i>                   
                <figure class="text-cent col-md-6 offset-md-3 mt-4">
                    <blockquote class="blockquote ">
                        <p>Easy to work with you! Brilliant company to deal with. Ordered MacBook Air and got it within 48 hours. Excellent condition and worth every euro. I wouldn’t hestitate to recommend them!</p>
                    </blockquote>
                    <figcaption class="blockquote-footer ">Caitlin Williams</figcaption>
                </figure>
            </div>
            <div class="carousel-item">
                <i class="fa fa-quote-right pt-5"></i>
                <figure class="col-md-6 offset-md-3 mt-4">
                    <blockquote class="blockquote">
                        <p>Great Computer
                            This is the second computer I've purchased from these guys. Great products that I can trust will meet my needs.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer ">Jonh Son</figcaption>
                </figure>
            </div>
            <div class="carousel-item">
                <i class="fa fa-quote-right pt-5"></i>
                <figure class="col-md-6 offset-md-3 mt-4">
                    <blockquote class="blockquote">
                        <p>Excellent Company and Service
                            Process was smooth, quick and simple. 
                           Super fast delivery. Good communication. Great product. I’m impressed..Highly recommend.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">Janet Rowberry</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
<!--CLOUSE TESTIMONIAL  -->

<!-- FEATURED BRANDS -->
<div class="container bg abstract container-brands py-5 ">
    <div class="row  text-center py-3 ">
        <div class="col-lg-6 m-auto ">
            <h1 class="h1">Trusted Partners</h1>
        </div>
    </div>
    <div class="row  text-center pt-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 p-3">
            <img class="img-fluid" src="./images/AppleLogo.jpg" alt="">
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 p-3">
            <img class="img-fluid" src="./images/DellLogo.png" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3">
            <img class="img-fluid"src="./images/HPlogo.jpg" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3">
            <img class="img-fluid"src="./images/LenovoLogo.jpg" alt="">
        </div>
    </div>
</div>      
<!--CLOUSE FEATURED BRANDS -->


 <!-- FOOTER -->
 <footer class="bg beige" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 pt-5">
                <h4 class="h4 text-success border-bottom pb-3 border-light logo">easy.TECH</h4>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none text-secondary" href="#"> About us</a></li>
                       
                    <li class="adress pt-3">
                        <p>Gedimino pr. 24, Vilnius<br>Lithuania</p>            
                    </li>
                    
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none  text-secondary" href="tel:010-020-0340">+370 66655444</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none  text-secondary" href="mailto:info@company.com">info@easy.TECH</a>
                    </li>
                </ul>
                </ul>   
            </div>

            <div class="col-md-3 pt-5">
                <h4 class="h4 text-light border-bottom pb-3 border-light">Products</h4>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none text-secondary" href="#">Tablets</a></li>
                    <li><a class="text-decoration-none text-secondary" href="#">Laptops</a></li>
                    <li><a class="text-decoration-none text-secondary" href="#">Desktops</a></li>  
                </ul>
            </div>

            <div class="col-md-3 pt-5">
                <h4 class="h4 text-light border-bottom pb-3 border-light">My account</h4>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none text-secondary" href="#"></a></li>
                    <?php  
                        if (isset($_SESSION['username'])){
                            echo '
                            <li>
                                <a class="text-decoration-none text-secondary btn disabled" href="#">Sign in</a>
                            </li>
                            <li>
                                <a class="text-decoration-none text-secondary btn disabled" href="#">Create account</a>
                            </li>';
                        }else{
                            echo '
                            <li>
                                <a onclick="registration()" class="text-decoration-none text-secondary" href="#">Sign in</a>
                            </li>
                            <li>
                                <a class="text-decoration-none text-secondary" href="./registration/registration.php">Create account</a>
                            </li>';
                        };
                    ?>
                    

                    <h4 class="mt-5 connect">Stay connected</h4>
                    <li class="list-inline-item text-center ">
                        <a class="text-light text-decoration-none " target="_blank" href="http://facebook.com/"><i class="fa fa-facebook-square " aria-hidden="true"></i></a>
                    </li>
                    <li class="list-inline-item text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item ">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
                    </li>
                    <li class="list-inline-item text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 pt-5">
                <h4 class="h4 text-light border-bottom pb-3 border-light">Policies</h4>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none  text-secondary" href="#">Terms and Conditions</a></li>
                    <li><a class="text-decoration-none text-secondary" href="#">Privacy Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="#">Returns Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="#">Contact</a></li>
                </ul>
            </div>

        </div>

    
    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-center text-light">
                        Copyright &copy; 2022 easy.TECH 
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- END FOOTER -->














    <script src="SCRIPT/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function closing(){
            document.querySelector("#transparent").classList.remove("transparent");
            document.querySelector("body").style.overflow = "scroll";
            document.querySelector("#hide").classList.add("hide");
        }
        function registration(){
            document.querySelector("#transparent").classList.add("transparent");
            document.querySelector("body").style.overflow = "hidden";
            document.querySelector("#hide").classList.remove("hide");
        }
    </script>
</body>
</html>