<?php include('../../php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    
    <link rel="icon" href="../../main-images/green.png">
    <link rel="stylesheet" href="../pages.css">
    <script src="../../main.js" ></script>
    
    <title>Apple</title>
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
                            <a href="../../php/logout.php" style="color: green;">logout</a>
                        </p>';
                    }else{
                        echo '
                        <a onclick="registration()" class="btn nav-icon position-relative text-decoration-none ms-2" href="#">Sign in</a>';
                        echo '
                        <a class="btn nav-icon position-relative" href="../../registration/registration.php">Create account!</a>';
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
                 <a class="btn btn-success btn-purchase" href="../checkout.php" role="button">PURCHASE</a>
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
                <?php include('../../php/errorslogin.php'); ?>
                <form method="post" action="apple.php">
                    <div class="form-outline mb-5 d-flex justify-content-center">
                        <input type="email" id="email" name="email" class="form-control w-75" placeholder="Your Email" />
                    </div>
                    <div class="d-flex justify-content-center mb-5">
                        <input type="password" id="password" name="password" class="form-control w-75" placeholder="Password" />
                    </div>
                    <div class="row d-flex justify-content-around m-4">
                        <div class="col-6 mt-1">
                            <a href="../../registration/registration.php">Create your account</a>
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
          <a class="navbar-brand text-success" href="../../index.php">easy.TECH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../ABOUT-US/about.php">About us</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="../Tablets/tablets.php">TABLET</a></li>
                  <li><a class="dropdown-item" href="../Desktops/desktop.php">DESKTOP</a></li>
                  <li><a class="dropdown-item" href="../Laptop/laptop.php">LAPTOP</a></li>
                </ul>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Brands
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                  <li><a class="dropdown-item" href="../Apple/apple.php">APPLE</a></li>
                  <li><a class="dropdown-item" href="../Dell/dell.php">DELL</a></li>
                  <li><a class="dropdown-item" href="../Hp/hp.php">HP</a></li>
                  <li><a class="dropdown-item" href="../Lenovo/lenovo.php">LENOVO</a></li>
               </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
          
<!-- CLOUSE HEADER-BOTTOM  -->



<!-- cartTABLETS -->
<h2 class="container text-center p-5 brand text-success">TABLETS</h2>

<div class="container bg beige pt-5 pb-5">
    <div class="row  gy-5">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">Apple 11" iPad Pro M1</h5> <span>iPad Pro</span>
                            <div class="shop-item-id" style="display: none;">33</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">799</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image img-fluid" src="../Tablets/imagesTablet/appleTablet1.jpg"> </div>
                    <div class="p-about shop-item-details">
                        <p>Experience the next level of ultimate with the space gray Apple 11" iPad Pro, which features performance that is supercharged by Apple's M1 8-Core chip with an 8-Core GPU and a 16-Core Neural Engine, a Liquid Retina display, Wi-Fi 6 (802.11ax), a 12MP Ultra Wide camera with Center Stage, and 40 Gb/s Thunderbolt connectivity.</p>
                    </div>
                    <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">Apple 10.2" iPad</h5> <span>iPad</span>
                            <div class="shop-item-id" style="display: none;">34</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">489</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Tablets/imagesTablet/appleTablet2.jpg"> </div>
                    <div class="p-about shop-item-details">
                        <p>The Apple 10.2" iPad features the Retina display with a 2160 x 1620 resolution for crisp details and vivid colors, making it an ideal companion for watching movies, creating content, and much more. Key Features
                            10.2" Multi-Touch Retina Display
                            2160 x 1620 Screen Resolution (264 ppi)
                            Apple A13 Bionic Chip
                            256GB Storage Capacity.</p>
                    </div>
                    <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
            </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
            <div class="container d-flex justify-content-center">
                <div class="shop-item card p-2">
                    <div class="p-info px-3 py-3">
                    <div>
                        <h5 class="shop-item-title text-success mb-0 ">Apple 8.3" iPad mini</h5> <span>iPad</span>
                        <div class="shop-item-id" style="display: none;">35</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">499</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Tablets/imagesTablet/appleTablet3.jpg"> </div>
                <div class="p-about shop-item-details">
                    <p>Mega power now comes in a mini size with the purple Apple 8.3" iPad mini, which lets you bring ideas to life in the palm of your hand. Supercharged by Apple's A15 Bionic chip with a 6-Core CPU, 5-Core GPU, a Neural Engine, an IPS display, Wi-Fi 6 (802.11ax), a 12MP Ultra-Wide camera with Center Stage, 5 Gb/s USB Type-C connectivity, and all-day battery life.</p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
            </div>
        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
            <div class="container d-flex justify-content-center">
                <div class="shop-item card p-2">
                    <div class="p-info px-3 py-3">
                    <div>
                        <h5 class="shop-item-title text-success mb-0 ">Apple 12.9" iPad Pro M1</h5> <span>iPad Pro</span>
                        <div class="shop-item-id" style="display: none;">36</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">999</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Tablets/imagesTablet/appleTablet4.jpg"> </div>
                <div class="p-about shop-item-details">
                    <p>Experience the next level of ultimate with the space gray Apple 12.9" iPad Pro, which features performance that is supercharged by Apple's M1 8-Core chip with an 8-Core GPU and a 16-Core Neural Engine, a Liquid Retina XDR display, Wi-Fi 6 (802.11ax), a 12MP Ultra Wide camera with Center Stage, and 40 Gb/s Thunderbolt connectivity.</p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cartTABLETS clouse-->


<!-- cartDESKTOPS -->
<h2 class="container text-center p-5 brand text-success">DESKTOPS</h2>

<div class="container bg beige pt-5 pb-5">
    <div class="row  gy-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">Apple iMac 27-Inch Desktop</h5> <span>Apple iMac</span>
                            <div class="shop-item-id" style="display: none;">01</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">1337</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image img-fluid" src="../Desktops/desktop-images/Apple01.jfif"> </div>
                    <div class="p-about shop-item-details">
                        <p>3.4GHz quad-core Intel Core i7 (Turbo Boost up to 3.9GHz)
                            16GB of 1600MHz DDR3 memory user-accessible SO-DIMM
                            
                            </p>
                    </div>
                    <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">2020 Apple iMac with Retina 5K</h5> <span>Apple iMac</span>
                            <div class="shop-item-id" style="display: none;">02</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">700</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Desktops/desktop-images/Apple02.jpg"> </div>
                    <div class="p-about shop-item-details">
                        <p>27-inch (diagonal) 5120-by-2880 Retina 5K display
                            3.1GHz 6-core 10th-generation Intel Core i5
                            AMD Radeon Pro 5300 graphics
                            Ultrafast SSD storage
                            Two Thunderbolt 3 (USB-C) ports.</p>
                    </div>
                    <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
            </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
            <div class="container d-flex justify-content-center">
                <div class="shop-item card p-2">
                    <div class="p-info px-3 py-3">
                    <div>
                        <h5 class="shop-item-title text-success mb-0 ">Apple iMac ME088LL</h5> <span>Apple iMac</span>
                        <div class="shop-item-id" style="display: none;">03</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">800</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Desktops/desktop-images/Apple03.jpg"> </div>
                <div class="p-about shop-item-details">
                    <p>27" Desktop, 3.2GHz Intel Core i5
                        16GB Memory, 1TB HDD
                        NVIDIA GeForce GT 755M graphics processor
                        Connectivity includes four USB 3.0 ports, dual Thunderbolt ports, Gigabit Ethernet, 802.11ac Wi-Fi (802.11a/b/g/n compatible), and Bluetooth 4.0.
                       </p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
            </div>
        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
            <div class="container d-flex justify-content-center">
                <div class="shop-item card p-2">
                    <div class="p-info px-3 py-3">
                    <div>
                        <h5 class="shop-item-title text-success mb-0 ">Apple Mac Mini Desktop</h5> <span>Apple Mac </span>
                        <div class="shop-item-id" style="display: none;">04</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">328</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Desktops/desktop-images/Apple04.jpg"> </div>
                <div class="p-about shop-item-details">
                    <p>2.6GHz Dual-Core Intel Core i5 processor
                        8GB DDR3 memory / 1TB Hard Drive
                        Up to 2560x1600 ThunderBolt resolution , one FireWire in800in port , one Gigabit Ethernet port
                        </p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cartDESKTOPS clouse-->


<!-- cartLAPTOPS -->
<h2 class="container text-center p-5 brand text-success ">LAPTOPS</h2>

<div class="container bg beige pt-5 pb-5 mb-5">
    <div class="row  gy-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">2020 Apple MacBook Air</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">17</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">1130</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image img-fluid" src="../Laptop/imagesLaptop/laptopApple01.webp"> </div>
                    <div class="p-about shop-item-details">
                        <p>All-Day Battery Life ??? Go longer than ever with up to 18 hours of battery life.
                            Powerful Performance ??? Take on everything from professional-quality editing to action-packed gaming with ease. The Apple M1 chip with an 8-core CPU delivers up to 3.5x faster performance than the previous generation while using way less power.
                            
                            </p>
                    </div>
                    <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">Apple MacBook Pro MD101LL/A</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">18</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">325</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Laptop/imagesLaptop/laptopApple02.webp"> </div>
                    <div class="p-about shop-item-details">
                        <p>This pre-owned product is not Apple certified, but has been professionally inspected, tested and cleaned by Amazon-qualified suppliers. 13.3 inch LED - backlit display, 1280-by-800 resolution
                            2.5 GHz Dual-Core Intel Core i5 processor
                            Intel HD Graphics 4000
                            4GB DDR3 RAM, 128GB HDD</p>
                    </div>
                    <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
            </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
            <div class="container d-flex justify-content-center">
                <div class="shop-item card p-2">
                    <div class="p-info px-3 py-3">
                    <div>
                        <h5 class="shop-item-title text-success mb-0 ">Apple MacBook Pro MF839LL/A</h5> <span>Laptop</span>
                        <div class="shop-item-id" style="display: none;">19</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">3400</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Laptop/imagesLaptop/laptopApple03.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>13.3" 2.7GHz Intel Core i5 Processor
                        8GB RAM, 128GB Solid State Drive
                        Intel Iris Graphics 6100 Graphics Processor
                        Connectivity includes 802.11ac Wi-Fi, Bluetooth 4.0, two USB 3.0 ports, two "Thunderbolt 2" ports, an HDMI port, an audio in/out port, and an SDXC card slot.
                        Fresh installation of macOS 10.14 Mojave, includes new MagSafeadapter
                       </p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
            </div>
        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           
            <div class="container d-flex justify-content-center">
                <div class="shop-item card p-2">
                    <div class="p-info px-3 py-3">
                    <div>
                        <h5 class="shop-item-title text-success mb-0 ">Apple 13in MacBook Pro</h5> <span>Laptop </span>
                        <div class="shop-item-id" style="display: none;">20</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">500</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="../Laptop/imagesLaptop/laptopApple04.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>2.3GHz dual-core Intel Core i5 processor with Turbo Boost up to 3.6GHz
                        8GB 2133MHz LPDDR3 Memory, 128GB Solid State Drive
                        Intel Iris Plus Graphics 640
                        Connectivity includes 802.11ac Wi-Fi, Bluetooth 4.2, two "Thunderbolt 3" ports (USB-C connector), and a 3.5 mm headphone jack.
                        Fresh installation of macOS 10.14 Mojave, includes new MagSafe adapter.
                        </p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cartLAPTOPS clouse-->





<!-- FOOTER -->
<footer class="bg beige" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 pt-5">
                <h4 class="h4 text-success border-bottom pb-3 border-light logo">easy.TECH</h4>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none text-secondary" href="../../ABOUT-US/about.php"> About us</a></li>
                       
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
                    <li><a class="text-decoration-none text-secondary" href="../Tablets/tablets.php">Tablets</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../Laptop/laptop.php">Laptops</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../Desktops/desktop.php">Desktops</a></li>  
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
                                <a onclick="registration()" class="text-decoration-none text-secondary sto" href="#">Sign in</a>
                            </li>
                            <li>
                                <a class="text-decoration-none text-secondary" href="../../registration/registration.php">Create account</a>
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
                        <a class="text-light text-decoration-none"  target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 pt-5">
                <h4 class="h4 text-light border-bottom pb-3 border-light">Policies</h4>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none  text-secondary" href="../../POLICIES/Terms.php">Terms and Conditions</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../../POLICIES/Privacy.php">Privacy Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../../POLICIES/Returns.php">Returns Policy</a></li>
                    <li><a class="text-decoration-none text-secondary" href="../contact.php">Contact</a></li>
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