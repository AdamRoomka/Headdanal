<?php include('./php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <link rel="stylesheet" href="./main.css">
    
    
    <script src="./main.js"></script>
    
    <title>HomePage</title>
    <link rel="icon" href="./main-images/green.png">
</head>
<body>
    <div id="transparent"></div>
<!-- TOP NAV -->
    <nav class="navbar bg beige navbar-light" id="templatemo_nav_top">
        <div class="container">
            <div class="d-flex flex-row">
                <a class="text-light text-decoration-none " href="mailto:info@company.com"><i class="fa fa-envelope"></i> @easy.TECH.com</a>
                <a class=" text-light text-decoration-none mx-4" href="tel:010-020-0340"><i class="fa fa-phone"></i>  +370 666 55444</a>
            </div>
            <div class="d-flex flex-row">
                <a class="nav-icon  d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search fa-lg text-light ms-4"></i>
                </a>

                <a class="cart nav-icon position-relative text-decoration-none ms-2" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">
                    <i id="cart" class="fa fas fa fa-shopping-cart fa-lg text-light ms-4 "></i>
                    <span class="cart-basket d-flex align-items-center justify-content-center ">
                            0
                    </span>
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
                        <a onclick="registration()" class="btn nav-icon position-relative text-decoration-none ms-2" href="#">Sign in</a>';
                        echo '
                        <a class="btn nav-icon position-relative text-decoration-none" href="./registration/registration.php">Create account!</a>';
                    };
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal search-->
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
    <!-- close Modal search -->
    
    <!-- modal shopping cart -->
<div class="modal fade bg-transperant" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header border-bottom-0">        
              <section class="container content-section">
                 <h2 class="section-header mb-4 text-success">easy.TECH</h2>
                 <div class="cart-row">
                    <span class="cart-item cart-header cart-column">ITEM</span>
                    <span class="cart-price cart-header cart-column">PRICE</span>
                    <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                 </div>
                 <div class="cart-items">
                 </div>
                 <div class="cart-total">
                    <strong class="cart-total-title">Total</strong>
                     <span class="cart-total-price">$0</span>
                 </div>
                 <div class="modal-body">
                 <a class="btn btn-success btn-purchase" href="./PAGES/checkout.php" role="button">PURCHASE</a>
                  </div>
               </section>              
          </div>
       </div>
    </div>
</div>
<!-- clouse modal shopping cart   -->

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

<!-- CLOSE TOP NAV -->

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
                <a class="nav-link" href="./ABOUT-US/about.php">About us</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="./PAGES/Tablets/tablets.php">TABLET</a></li>
                  <li><a class="dropdown-item" href="./PAGES/Desktops/desktop.php">DESKTOP</a></li>
                  <li><a class="dropdown-item" href="./PAGES/Laptop/laptop.php">LAPTOP</a></li>
                </ul>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="./PAGES/Apple/apple.php">APPLE</a></li>
                  <li><a class="dropdown-item" href="./PAGES/Dell/dell.php">DELL</a></li>
                  <li><a class="dropdown-item" href="./PAGES/Hp/hp.php">HP</a></li>
                  <li><a class="dropdown-item" href="./PAGES/Lenovo/lenovo.php">LENOVO</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>
<!-- CLOUSE HEADER-BOTTOM  -->



<!-- CATEGORY IMAGES -->
<div class="container container-category bg abstract pt-5 pb-5">
    <div class="row g-2 ">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex ">
            <a href="./PAGES/Tablets/tablets.php" class="hovereffect justify-content-center">
                <img class="img-fluid" src="./main-images/tablet-1.jpeg" alt="">
                <div class="overlay">
                    <p>Tablets</p> 
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex ">
            <a href="./PAGES/Desktops/desktop.php" class="hovereffect justify-content-center">
                <img class="img-fluid" src="./main-images/desctop-2.jpg" alt="">
                <div class="overlay">
                    <p>Desktops</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex  ">
            <a href="./PAGES/Laptop/laptop.php" class="hovereffect justify-content-center">
                <img class="img-fluid" src="./main-images/laptop-3.jpg" alt="">
                <div class="overlay">
                    <p>Laptops</p>
                </div>
            </a>
        </div>
    </div>
</div>
<!--  CLOUSE CATEGORY IMAGES -->


<!-- ABOUT US -->
<div id="about-us" class="container  mt-3 w-80 bg abstract">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center pt-4 pb-4">
            <img class="img-fluid img-frame" src="./main-images/man-typing.jpg" alt="">
        </div>
        <div class="col-lg-6 col-md-12 pt-5 ">
            <div class="row gx-5">
                <div class="col-lg-12 col-md-12 col-sm-12 text-justify">
                    <!-- PRID??TA text--success -->
                <h4 class="mb-3 text-success">About Us</h4>  
                    <p><i>easy.TECH</i> was founded in 2007. Our plan was simple: let's make it easy for people to buy PC online, affordably with delivery to their door.</p>   
                    <p>Now <i>easy.TECH </i>is one of the fastest growing IT retailer we are committed to provide the best customer service and competitive price in the market.</p>
                    <p>We supply a wide range of notebook, desktop and tablets from major vendor. We are the premier notebook reseller for leading brands such as Apple, Dell, HP, Lenovo. </p>  
                    <p> Our products and sales team reflect reliability, competitive prices and supportive customer service.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5 text-justify">
                    <!-- PRID??TA text--success -->
                    <h4 class="mb-3 text-success">Shipping</h4>
                    <p>We ship around the globe. We ship most international packages via DHL. Free Expedited Shipping for most orders over ???200.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5 text-justify">
                    <!-- PRID??TA text--success -->
                    <h4 class="mb-3 text-success">Returns</h4>
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



<!-- PAKEISK ??IT?? VIET??, PAS SAVE I??TRINK, ??IA NUKOPINK -->

        <!-- latest products  -->
        <div class="container pt-3 pb-3">
            <div class="row g-3">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./PAGES/Tablets/imagesTablet/appleTablet2.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Apple 10.2" iPad</span> <span class="price text-success">???489</span> </div>
                            <p>Tablet</p>
                            <a class="buttons d-flex justify-content-center btn beige text-success" href="./PAGES/Tablets/tablets.php" id="btn">View More</button> </a>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./PAGES/Laptop/imagesLaptop/laptopApple04.webp" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Apple 13in MacBook Pro</span> <span class="price text-success">???500 </span> </div>
                            <p> Laptop</p>
                            <a class="buttons d-flex justify-content-center btn beige text-success" href="./PAGES/Laptop/laptop.php" id="btn">View More</button> </a>
                        </div>                   
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./PAGES/Desktops/desktop-images/Hp02.png" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">HP 27 Pavilion All-in-One PC</span> <span class="price text-success">???1400</span> </div>
                            <p>PC</p>
                            <a class="buttons d-flex justify-content-center btn beige text-success" href="./PAGES/Desktops/desktop.php" id="btn">View More</button> </a>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./PAGES/Tablets/imagesTablet/dellTablet1.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Dell Latitude 7210</span> <span class="price text-success">???1400</span> </div>
                            <p>Tablet</p>
                            <a class="buttons d-flex justify-content-center btn beige text-success" href="./PAGES/Tablets/tablets.php" id="btn">View More</button> </a>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./PAGES/Desktops/desktop-images/Lenovo03.jpg" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">Lenovo IdeaCentre AIO 3</span> <span class="price text-success">???749</span> </div>
                            <p>PC </p>
                            <a class="buttons d-flex justify-content-center btn beige text-success" href="./PAGES/Desktops/desktop.php" id="btn">View More</button> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card p-2">
                        <div class="text-center"> <img src="./PAGES/Laptop/imagesLaptop/laptopDell02.webp" class="img-fluid" width="200" /> </div>
                        <div class="content">
                            <div class="d-flex justify-content-between align-items-center"> <span class="category">2022 Dell Inspiron 5000 2-in-1 14" HD</span> <span class="price text-success">???679</span> </div>
                            <p>Laptop</p>
                            <a class="buttons d-flex justify-content-center btn beige text-success" href="./PAGES/Laptop/laptop.php" id="btn">View More</button> </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>    
<!--Clouse latest products  -->
<!-- CLOUSE FEATURED PRODUCT  -->

<!-- PABAIGA -->


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
                    <blockquote class="blockquote text-success ">
                        <p>Easy to work with you! Brilliant company to deal with. Ordered MacBook Air and got it within 48 hours. Excellent condition and worth every euro. I wouldn???t hestitate to recommend them!</p>
                    </blockquote>
                    <figcaption class="blockquote-footer ">Caitlin Williams</figcaption>
                </figure>
            </div>
            <div class="carousel-item">
                <i class="fa fa-quote-right pt-5"></i>
                <figure class="col-md-6 offset-md-3 mt-4">
                    <blockquote class="blockquote  text-success">
                        <p>Great Computer
                            This is the second computer I've purchased from these guys. Great products that I can trust will meet my needs.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer ">Jonh Son</figcaption>
                </figure>
            </div>
            <div class="carousel-item">
                <i class="fa fa-quote-right pt-5"></i>
                <figure class="col-md-6 offset-md-3 mt-4">
                    <blockquote class="blockquote  text-success">
                        <p>Excellent Company and Service
                            Process was smooth, quick and simple. 
                           Super fast delivery. Good communication. Great product. I???m impressed..Highly recommend.</p>
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
            <img class="img-fluid" src="./main-images/AppleLogo.jpg" alt="">
        </div> 
        <div class="col-lg-3 col-md-6 col-sm-12 p-3">
            <img class="img-fluid" src="./main-images/DellLogo.png" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3">
            <img class="img-fluid"src="./main-images/HPlogo.jpg" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 p-3">
            <img class="img-fluid"src="./main-images/LenovoLogo.jpg" alt="">
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
                    <li><a class="text-decoration-none text-secondary" href="./ABOUT-US/about.php"> About us</a></li>
                       
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
                    <li><a class="text-decoration-none text-secondary" href="./PAGES/Tablets/tablets.php">Tablets</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./PAGES/Laptop/laptop.php">Laptops</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./PAGES/Desktops/desktop.php">Desktops</a></li>  
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
                    <li><a class="text-decoration-none  text-secondary" href="./POLICIES/Terms.php">Terms and Conditions</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./POLICIES/Privacy.php">Privacy Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./POLICIES/Returns.php">Returns Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./PAGES/contact.php">Contact</a></li>
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