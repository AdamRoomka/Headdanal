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
    
    <title>Laptop</title>
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
                <form method="post" action="desktop.php">
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



<!-- cartAPPLE -->
<h2 class="container text-center p-5 brand text-success">APPLE</h2>

<div class="container bg beige pt-5 pb-5">
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
                    <div class="text-center p-image mt-3"> <img class="shop-item-image img-fluid" src="./imagesLaptop/laptopApple01.webp"> </div>
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
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopApple02.webp"> </div>
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
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopApple03.webp"> </div>
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
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopApple04.webp"> </div>
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
<!-- cartAPPLE clouse-->


<!-- cartDELL -->
<h2 class="container text-center p-5 brand text-success">DELL</h2>

<div class="container bg beige pt-5 pb-5">
    <div class="row  gy-5">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">Dell Inspiron 15 5515</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">21</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">907</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopDell01.webp"> </div>
                    <div class="p-about shop-item-details">"> </div>
                    <div class="p-about shop-item-details">
                        <p>15.6-inch FHD (1920 x 1080) Anti-Glare LED Backlight Touch Narrow Border WVA Display
                            AMD Ryzen 7 5700U 8-core/16-thread Mobile Processor with Radeon Graphics
                            16GB 3200MHz DDR4, 512GB PCIe NVMe Class 35 Solid State Drive
                            AMD Radeon Graphics with shared graphics memory
                            802.11ac 2x2 WiFi + Bluetooth 4.1
                           
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
                            <h5 class="shop-item-title text-success mb-0 ">2022 Dell Inspiron 5000 2-in-1 14"  HD</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">22</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">679</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopDell02.webp"> </div>
                    <div class="p-about shop-item-details">
                        <p>???15.6" diagonal HD Display???1366 x 768 resolution boasts impressive color and clarity, Anti-Glare Energy-efficient LED screen.
                            ???4GB DDR4 RAM???Plenty of high-bandwidth RAM to smoothly run your games as well as multiple programs. ??? 128GB PCIe SSD???Save files fast and store more data. 
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
                        <h5 class="shop-item-title text-success mb-0 ">2022 Newest Dell Inspiron 3000 Premium</h5> <span>Laptop</span>
                        <div class="shop-item-id" style="display: none;">23</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">758</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/LaptopDell03.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>???Dell Inspiron Laptop???16GB high-bandwidth RAM to smoothly run multiple applications and browser tabs all at once; 1TB PCIe Solid State Drive allows to fast bootup and data transfer
                        ???11th Generation Processor???11th Generation Intel Core i5-1135G7 Quad-Core Processor (4 Cores, 8MB Cache, 8 Threads, Base Frequency at 2.4 GHz, up to 4.2 GHz at Maximum Turbo Speed)</p>
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
                        <h5 class="shop-item-title text-success mb-0 ">2022 Dell Inspiron 3593 15.6"</h5> <span>Laptop</span>
                        <div class="shop-item-id" style="display: none;">24</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">749</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopDell04.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>Full-size non-backlit Keyboard with numeric keypad. 802.11 Dual Band Wireless-AC WLAN, Stereo Speakers, Built-in HD Webcam, 10/100/1000GB Ethernet LAN;USB 3.2 Gen 1 Type A (x2), USB 2.0 Type A (x1), HDMI (x1) - SD Media Card Reader (SD, SDHC, SDXC) - 10/100/1000 Mbps- 1 combo headphone / microphone jack</p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cartDELL clouse-->


<!-- cartHP -->
<h2 class="container text-center p-5 brand text-success">HP</h2>

<div class="container bg beige pt-5 pb-5">
    <div class="row  gy-5">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">2021 Newest HP 14"</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">25</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">379</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopHp01.webp"> </div>
                    <div class="p-about shop-item-details">
                        <p>Laptop Light-Weight, AMD 3020e(Up to 2.6GHz), 8GB RAM, 128GB SSD + 64GB eMMC, 1 Year Office 365, WiFi, Bluetooth 5, USB Type-A&C, HDMI, Webcam, Win10, w/Ghost Manta Accessories. Substantial high-bandwidth RAM to smoothly run your games and photo- and video-editing applications.</p>
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
                            <h5 class="shop-item-title text-success mb-0 ">2021 Newest HP 15.6"</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">26</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">549</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopHp02.webp"> </div>
                    <div class="p-about shop-item-details">
                        <p>Micro-Edge HD Laptop, Intel Core i3-1115G4 up to 4.1GHz (Beat i5-1035G4), 16GB RAM, 512GB NVMe SSD, Numpad, Lightweight, WiFi, Bluetooth, Webcam, Fast Charge, HDMI, Win10 S. 3 GHz base frequency, up to 4.1 GHz with Intel Turbo Boost Technology.</p>
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
                        <h5 class="shop-item-title text-success mb-0 ">2022 Newest HP 15.6"</h5> <span>Laptop</span>
                        <div class="shop-item-id" style="display: none;">27</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">399</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopHp03.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>FHD IPS Laptop Computer, Intel Celeron N4020(up to 2.8 GHz), 8GB RAM, 128GB SSD, Office 365, HDMI, Bluetooth, Webcam, USB-C, Windows 10S, Black, Online Class Ready, JVQ Mousepad. Dual-core, two-way processing provides maximum high-efficiency power to go. Dual Stereo speakers & HP True Vision HD Camera and dual-array microphones. </p>
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
                        <h5 class="shop-item-title text-success mb-0 ">HP Pavilion 15 </h5> <span>Laptop</span>
                        <div class="shop-item-id" style="display: none;">28</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">888</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopHp04.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>11th Gen Intel Core i7-1165G7 Processor, 16 GB RAM, 512 GB SSD Storage, Full HD IPS Micro-Edge Display, Windows 11 Pro, Compact Design, Long Battery Life (15-eg0025nr, 2021). Experience a laptop with premium performance, so you can spend less time getting more done; it???s like a small PC. </p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cartHP clouse-->


<!-- cartLENOVO -->
<h2 class="container text-center p-5 brand text-success">LENOVO</h2>

<div class="container bg beige pt-5 pb-5 mb-5">
    <div class="row  gy-5">
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="container d-flex justify-content-center">
                    <div class="shop-item card p-2">
                        <div class="p-info px-3 py-3">
                        <div>
                            <h5 class="shop-item-title text-success mb-0 ">Lenovo Chromebook C330 2-in-1"</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">29</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">248</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopLenovo01.webp"> </div>
                    <div class="p-about shop-item-details">
                        <p>10th Generation Intel Core i5-10210U Processor (4-Core, 1.6 GHz Up to 4.2 GHz, 6 MB Cache). Equipped with the latest 10th Gen Intel processor, long battery life, and speedy connectivity. FHD Laptop, Intel Core i5-10210U(up to 4.2GHz), 20GB RAM 512GB SSD, WiFi Bluetooth HDMI, Grey, Windows 11.
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
                            <h5 class="shop-item-title text-success mb-0 ">Lenovo IdeaPad 3i 15.6"</h5> <span>Laptop</span>
                            <div class="shop-item-id" style="display: none;">30</div>
                        </div>
                        <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                            <h1 class="shop-item-price">570</h1>
                        </div>
                    </div>
                    <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopLenovo02.webp"> </div>
                    <div class="p-about shop-item-details">
                        <p>i3-1115G4 11th Generation Intel Core i3-1115G4 Processor (6MB Cache, up to 4.1 GHz) | Intel UHD Graphics
                            ???15.6??? FHD Touchscreen Display???The 1920 x 1080 resolution boasts impressive color and clarity. IPS technology for wide viewing angles. Energy-efficient LED backlight.
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
                        <h5 class="shop-item-title text-success mb-0 ">Lenovo IdeaPad 3 Laptop, 14.0"</h5> <span>Laptop</span>
                        <div class="shop-item-id" style="display: none;">31</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">520</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopLenovo03.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>Powerhouse performance from AMD Ryzen 5 5500U mobile processor, 8GB DDR4 RAM, 256GB SSD storage, and AMD Radeon 7 Graphics
                        The IdeaPad 3 14-inch laptop has 4-side narrow bezels that let you see more of the FHD (1920 x 1080) screen for wider viewing angles and less clutter.</p>
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
                        <h5 class="shop-item-title text-success mb-0 ">Lenovo Flex 5 14 2-in-1</h5> <span>Laptop</span>
                        <div class="shop-item-id" style="display: none;">32</div>
                    </div>
                    <div class="p-price d-flex flex-row mt-3"> <span>???</span>
                        <h1 class="shop-item-price">738</h1>
                    </div>
                </div>
                <div class="text-center p-image mt-3"> <img class="shop-item-image" src="./imagesLaptop/laptopLenovo04.webp"> </div>
                <div class="p-about shop-item-details">
                    <p>Thin, light, and stylish ??? This 2-in-1 laptop weighs just 3.64 pounds and is only 0.82" thick. It's soft and comfortable to the touch, with a durable paint that creates a better user experience. Digital pen included
                        The 10-point, 14-inch FHD (1920 x 1080) IPS touchscreen allows the Lenovo Flex 5 14"
                        </p>
                </div>
                <div class="buttons align-self-center d-flex flex-row gap-3 px-3"> <button class="btn btn-outline-success w-100  shop-item-button">Buy Now</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cartLENOVO clouse-->


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
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a>
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