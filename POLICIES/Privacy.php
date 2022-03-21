<?php include('../php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../PAGES/pages.css">
    <script src="../main.js"></script>
    
    <title>Privacy policy</title>
    <link rel="icon" href="../main-images/green.png">
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
                            <a href="../php/logout.php" style="color: green;">logout</a>
                        </p>';
                    }else{
                        echo '
                        <a onclick="registration()" class="btn nav-icon position-relative text-decoration-none ms-2" href="#">Sign in</a>';
                        echo '
                        <a class="btn nav-icon position-relative text-decoration-none" href="../registration/registration.php">Create account!</a>';
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
                 <a class="btn btn-success btn-purchase" href="../PAGES/checkout.php" role="button">PURCHASE</a>
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
                <?php include('../php/errorslogin.php'); ?>
                <form method="post" action="index.php">
                    <div class="form-outline mb-5 d-flex justify-content-center">
                        <input type="email" id="email" name="email" class="form-control w-75" placeholder="Your Email" />
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <input type="password" id="password" name="password" class="form-control w-75" placeholder="Password" />
                    </div>
                    <div class="row d-flex justify-content-around m-4">
                        <div class="col-6 mt-1">
                            <a href="../registration/registration.php">Create your account</a>
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
    <nav class="navbar  navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand text-success" href="../index.php">easy.TECH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../ABOUT-US/about.php">About us</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="../PAGES/Tablets/tablets.php">TABLET</a></li>
                  <li><a class="dropdown-item" href="../PAGES/Desktops/desktop.php">DESKTOP</a></li>
                  <li><a class="dropdown-item" href="../PAGES/Laptop/laptop.php">LAPTOP</a></li>
                </ul>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="../PAGES/Apple/apple.php">APPLE</a></li>
                  <li><a class="dropdown-item" href="../PAGES/Dell/dell.php">DELL</a></li>
                  <li><a class="dropdown-item" href="../PAGES/Hp/hp.php">HP</a></li>
                  <li><a class="dropdown-item" href="../PAGES/Lenovo/lenovo.php">LENOVO</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
  </nav>
<!-- CLOUSE HEADER-BOTTOM  -->

<main>
    
    <div class="container privacy mb-5 mt-3">
        <h2 class="text-center text-success p-4 mb-4 mt-4">Privacy policy</h1>
        <p>
            easy.Tech is the sole owner of information collected on this site. We will not sell, share, or rent this information to any outside parties, except as outlined in this policy. We collect information from our customers to process orders and better serve you with pertinent information, such as order confirmations and order status updates. Information collected includes your name, shipping address, billing address, telephone numbers, e-mail address, and payment information such as your credit card number. We also require you to submit a username and password of your choice for your future access to your account information. To safeguard that your user name and password remain confidential, DO NOT share this information with anyone. If you elect to receive our newsletter or special promotions, your contact information will be used for the delivery of these items.
        </p>
        <h3 class="mt-5 text-success">Registration</h3>
        <p>
            In order to process your orders placed on this website, you must first complete the registration form. During registration, you will be required to provide your contact information, which includes your name, e-mail address, telephone number and street address. This information is used to provide you with important easy.Tech services such as automated order status updates via e-mail.
        </p>
        <h3 class="mt-5 text-success">Order</h3>
        <p>
            Most of the information collected in the registration process will be used to process orders. During the order process, you will have to provide financial information such as your credit card number, expiration date, money order, wire transfer or check information. This information is used for billing purposes and to fulfill your order. If we have trouble processing an order, we will use this contact information to get in touch with you. To properly process your credit card information, we must share your personal and financial information with the merchant bank for authorization and approval. This process is protected by an enhanced security system. See the Security section below for more details on security measures and procedures. We do not share your personal and financial information with any third parties, except those specified in the Sharing section of this policy.
        </p>
        <h3 class="mt-5 text-success">Cookies</h3>
        <p>
            We customize certain Web page content based upon your browser type and other information provided by our cookie. If you choose to reject the cookie, you can still browse our store but will be unable to use the shopping cart to buy merchandise. The easy.Tech shopping cart cannot function without cookies enabled so that the necessary information to process your order is retained. If you disable cookies, easy.Tech will be unable to accept your online order. We will not share any personally identifiable information provided by this cookie with any third party. We will, however, link data stored in cookies to the personally identifiable information you submitted while on our site. This allows us to personalize your shopping experience and discern user preferences to evoke subconscious feelings of familiarity and assurance.
        </p>
        <ul>
            <li>Some of our business partners (e.g., advertisers) use cookies on our site. We have no access to or control over these cookies.
            </li>
            <li>This privacy statement covers the use of cookies by easy.Tech only and does not cover the use of cookies by any advertisers.
            </li>
        </ul>
        <h3 class="mt-5 text-success">Log Files</h3>
        <p>We use IP addresses to analyze trends, administer the site, track user movement, and gather broad demographic information for aggregate use. We do not link IP addresses to personally identifiable information, and we do not distribute or share IP information with any third parties.
        </p>
        <h3 class="mt-5 text-success">Testimonials</h3>
        <p>
            The testimonials section of the easy.Tech website is for the purpose of sharing positive experiences. The testimonials section is moderated to ensure accurate and positive testimonials. Published testimonials are genuine and are not edited or altered by easy.Tech easy.Tech reserves the right to post or remove any testimonial at its discretion.
        </p>
        <p>
            By posting your comment(s) or testimonial(s) ("Testimonial") on our website, you give us permission to reprint or use the Testimonial in connection with our business. You also are agreeing to the following: (1) The reprint or use of the Testimonial will be at our discretion and without compensation; (2) We may use the Testimonial with or without any pseudo (pen) name credit; (3) Our right to use the Testimonial is perpetual and may be assigned by us; (4) We may use the Testimonial locally, nationally or globally and such use may be made in any media, information or communication platform (including Internet advertising) currently in use or later developed; and (5) You and not someone else composed and posted the Testimonial.
        </p>
        <p class="mb-5">
            Other than your pseudo (pen) name, which we may or may not use, your personal contact information will not be disclosed in connection with our reprint or use of your Testimonial.
        </p>
    </div>
</main>


<!-- FOOTER -->
<footer class="bg beige" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 pt-5">
                <h4 class="h4 text-success border-bottom pb-3 border-light logo">easy.TECH</h4>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none text-secondary" href="../ABOUT-US/about.php"> About us</a></li>
                       
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
                    <li><a class="text-decoration-none text-secondary" href="../PAGES/Tablets/tablets.php">Tablets</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../PAGES/Laptop/laptop.php">Laptops</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../PAGES/Desktops/desktop.php">Desktops</a></li>  
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
                                <a class="text-decoration-none text-secondary" href="../registration/registration.php">Create account</a>
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
                    <li><a class="text-decoration-none  text-secondary" href="./Terms.php">Terms and Conditions</a></li>
                    <li><a class="text-decoration-none text-secondary" href="#">Privacy Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./Returns.php">Returns Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../PAGES/contact.php">Contact</a></li>
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