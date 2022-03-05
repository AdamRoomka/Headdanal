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
    
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Contact</title>
    <link rel="icon" href="../images/green.png">
</head>
<body>
    <div id="transparent" scroll="no"></div>
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
                    <a class="nav-icon position-relative text-decoration-none ms-3" href="#">
                        <i onclick="registration()" class="fa fa-fw fa-user text-light ms-4"></i>
                    </a>
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
            </div>
        </div>
    </nav>
    <!-- close Modal -->
    <!-- CLOSE TOP NAV -->

    <!-- Registration -->
    <div class="hide" id="hide">
        <div class="registration">




            <div class="h-100 me-2 hide" id="login">
                <h5 class="text-center mb-5 mt-5 col-12">Login</h5>
                <a href="#" onclick="closing()" class="close fs-1 text-secondary" aria-hidden="true">&times;</a>
                <?php include('./php/errorslogin.php'); ?>
                <form method="post" action="index.php">
                    <div class="form-outline mb-5 d-flex justify-content-center">
                        <input type="text" id="email" name="email" class="form-control w-75" placeholder="Your Email" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="password" id="password" name="password" class="form-control w-75" placeholder="Password" />
                    </div>
                    <a href="#" onclick="register()" class=" createYourAccount">Create your account</a>

                    <button type="submit" class="loginbtn btn btn-success" name="login_user">Login</button>

                    <a href="#" onclick="forgot()" class="forgotpass">Forgot password?</a>
                </form>
            </div>
            <div class="h-100 me-2" id="register">
                <h5 class="text-center mb-5 mt-5 col-12">Create an account</h5>
                <a href="#" onclick="closing()" class="close fs-1 text-secondary" aria-hidden="true">&times;</a>
                
                <form method="post" action="index.php">
                    <?php include('./php/errorsregister.php'); ?>
                    <div class="form-outline mb-2 d-flex justify-content-center">
                        <input type="text" name="username" id="username" class="form-control w-75" placeholder="Username" value="<?php echo $username; ?>" />
                    </div>
                    <div class="form-outline mb-2 d-flex justify-content-center">
                        <input type="text" name="email" id="email" class="form-control w-75" placeholder="Your Email" value="<?php echo $email; ?>" />
                    </div>
                    <div class="mb-2 d-flex justify-content-center">
                        <input type="password" name="password_1" id="password" class="form-control w-75" placeholder="Password" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="password" name="password_2" id="rep-password" class="form-control w-75" placeholder="Repeat your password" />
                    </div>
                    <a href="#" onclick="login()" class="existingAcc">You have existing account?</a>

                    <button type="submit" name="reg_user" class="registerbtn btn btn-success ">Register</button>
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
                <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#about-us">About us</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
            </ul>  
          </div>
        </div>
      </nav>
<!-- CLOUSE HEADER-BOTTOM  -->

<!-- CONTACT START -->

<div>
    <div class="contact-bg pb-5">
        <div class="contact">
            <div class="container">
                <div class="row contact-card-bg">
                    <div class="col-xl-6 col-lg-12 mb-2">
                        <div class="contact-card">
                            <div class="card-body">
                                <div class="card-header beige text-white mt-3"><i class="fa fa-envelope"></i> Contact us.
                                </div>
                                <form class="mt-2">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" rows="6" required></textarea>
                                    </div>
                                    <div class="mx-auto mt-2">
                                    <button type="submit" class="btn btn-success text-right">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card bg-light mb-3">
                            <div class="card-header beige text-white text-uppercase mt-4"><i class="fa fa-home"></i> Address</div>
                            <div class="card-body">
                                <p>Gedimino pr. 24</p>
                                <p>69420 VILNIUS</p>
                                <p>Lithuania</p>
                                <p>Email : info@easy.TECH</p>
                                <p>Tel.  +370 666 55444</p>           
                            </div>           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- CONTACT END -->

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
                    <li><a class="text-decoration-none text-secondary" href="#">Sign in</a></li>
                    <li><a class="text-decoration-none text-secondary" href="#">Create account</a></li>
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














    <script src="../SCRIPT/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>