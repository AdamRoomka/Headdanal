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
    
    <link rel="stylesheet" href="../PAGES/pages.css">
    <script src="../main.js"></script>
    
    <title>HomePage</title>
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
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand text-success" href="#">easy.TECH</a>
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
    <div class="container terms mb-5 mt-3">
        <h2 class="text-center text-success p-4 mb-4 mt-4"><em>easy</em>.TECH Terms and Conditions Policy </h2>
        <p>
            Welcome to easy.Tech These terms and conditions outline the rules and regulations for the use of easy.Tech???s Website.
        </p>
        <p><em>easy</em>.Tech is located at:</p>
        <h5 class="pb-2 text-center text-success mb-3">Gedimino pr.24, <br> Vilnius <br> Lithuania</h5>
        <p>
            By accessing this website we assume you accept these terms and conditions in full. Do not continue to use easy.Tech???s website if you do not accept all of the terms and conditions stated on this page.          
        </p>
        <p>
            The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: Client, You and Your refers to you, the person accessing this website and accepting the Company???s terms and conditions. The Company, Ourselves, We, Our and Us, refers to our Company. Party, Parties, or Us, refers to both the Client and ourselves, or either the Client or ourselves.
        </p>
        <p>
            All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client???s needs in respect of provision of the Company???s stated services/products, in accordance with and subject to, prevailing law of Lithuania.
        </p>
        <p>
            Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.
        </p>
        <h3 class="mt-5  text-success">Cookies</h3>
        <p>
            We employ the use of cookies. By using easy.Tech???s website you consent to the use of cookies in accordance with easy.Tech???s privacy policy. Most of the modern day interactive websites use cookies to enable us to retrieve user details for each visit.
        </p>
        <p>
            Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. Some of our affiliate / advertising partners may also use cookies.
        </p>
        <h3 class="mt-5 text-success">License</h3>
        <p>
            Unless otherwise stated, easy.Tech and/or its licensors own the intellectual property rights for all material on easy.Tech.
        </p>
        <p>
            All intellectual property rights are reserved. You may view and/or print pages from easy.Tech for your own personal use subject to restrictions set in these terms and conditions.
        </p>
        <h5  class="mt-2">You must not:</h5>
        <ul>
            <li>Republish material from easy.Tech.
            </li>
            <li>Sell, rent or sub-license material from easy.Tech.
            </li>
            <li>Reproduce, duplicate or copy material from easy.Tech.
            </li>
            <li>Redistribute content from easy.Tech (unless content is specifically made for redistribution).
            </li>
        </ul>
        <h3  class="mt-5 text-success">Disclaimer</h3>
        <p>
            To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill).
        </p>
        <h5  class="mt-4">Nothing in this disclaimer will:</h5>
        <ul>
            <li>Limit or exclude our or your liability for death or personal injury resulting from negligence.
            </li>
            <li>Limit or exclude our or your liability for fraud or fraudulent misrepresentation.
            </li>
            <li>Limit any of our or your liabilities in any way that is not permitted under applicable law.
            </li>
            <li>Or exclude any of our or your liabilities that may not be excluded under applicable law.
            </li>
        </ul>
        <h5 class="mt-4">The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer:</h5>
        <ul>
            <li>are subject to the preceding paragraph; and
            </li>
            <li>govern all liabilities arising under the disclaimer or in relation to the subject matter of this disclaimer, including liabilities that arise in contract, tort (including negligence) and for breach of statutory duty.
            </li>
        </ul>
        <p class="mb-5">
            To the extent that the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.
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
                    <li><a class="text-decoration-none  text-secondary" href="#">Terms and Conditions</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./Privacy.php">Privacy Policy</a></li>
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