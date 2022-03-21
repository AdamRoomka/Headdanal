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
    <link rel="stylesheet" href="../main.css">
    <script src="../main.js"></script>
    
    <title>About us</title>
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
                        <a class="btn nav-icon position-relative" href="../registration/registration.php">Create account!</a>';
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
                 <a class="btn btn-success btn-purchase" href="#" role="button">PURCHASE</a>
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
                <form method="post" action="about.php">
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
                <a class="nav-link" href="#">About us</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="../PAGES/Tablets/tablets.php">TABLET</a></li>
                  <li><a class="dropdown-item" href="../Pages/Desktops/desktop.php">DESKTOP</a></li>
                  <li><a class="dropdown-item" href="../Pages/Laptop/laptop.php">LAPTOP</a></li>
                </ul>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="../PAGES/Apple/apple.php">APPLE</a></li>
                  <li><a class="dropdown-item" href="../Pages/Dell/dell.php">DELL</a></li>
                  <li><a class="dropdown-item" href="../Pages/Hp/hp.php">HP</a></li>
                  <li><a class="dropdown-item" href="../Pages/Lenovo/lenovo.php">LENOVO</a></li>
               </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
          
<!-- CLOUSE HEADER-BOTTOM  -->





<!-- CHECKOUT -- -->
  <div class="col-85">
  <div class="contact-bg">
        <div class="contact">
            <div class="container ">
      <form action="/action_page.php">
      
        <div class="row contact-card-bg mt-5">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input class="input-checkout" type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input class="input-checkout" type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input class="input-checkout" type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input class="input-checkout" type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input class="input-checkout" type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input class="input-checkout" type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input class="input-checkout" type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input class="input-checkout" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input class="input-checkout" type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input class="input-checkout" type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input class="input-checkout" type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
        </div>
        <div class="row">
        <label class="col-12">
          <input class="input-checkout" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <div>
        <button class=" col-12 btn btn-checkout btn-success mt-3 mb-3">Continue to checkout></button>
        </div>
        </div>
    </div>
  </div>
                </div>
</div>

<!-- CHECKOUT END -->

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
                    <li><a class="text-decoration-none text-secondary" href="./Tablets/tablets.php">Tablets</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./Laptop/laptop.php">Laptops</a></li>
                    <li><a class="text-decoration-none text-secondary" href="./Desktops/desktop.php">Desktops</a></li>  
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
                    <li><a class="text-decoration-none  text-secondary" href="../POLICIES/Terms.php">Terms and Conditions</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../POLICIES/Privacy.php">Privacy Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../POLICIES/Returns.php">Returns Policy</a></li>
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














    <script src="../main.js"></script>
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