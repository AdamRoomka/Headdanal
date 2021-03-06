<?php include('../php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">

    <link rel="icon" href="../main-images/green.png">
    <link rel="stylesheet" href="../main.css">
    <style>
        .image{
            background-image: url("./laptop-img.jpg");
            background-size: cover;
        }
    </style>
</head>
<body class="image" style="background-repeat: no-repeat; overflow: hidden;">
        
    <!-- Registration -->
    <div>
        <div class="registration"  style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="h-100 me-2" id="register">
                <h5 class="text-center mb-5 mt-5 col-12">Create an account</h5>
                <a href="../index.php" onclick="closing()" class="close fs-1 text-secondary" aria-hidden="true">&times;</a>
                <form method="post" action="registration.php">

                    <?php include('../php/errorsregister.php'); ?>

                    <div class="form-outline mb-2 d-flex justify-content-center">
                        <input type="text" name="username" id="username" class="form-control w-75" placeholder="Username" value="<?php echo $username; ?>" />
                    </div>
                    <div class="form-outline mb-2 d-flex justify-content-center">
                        <input type="email" name="email" id="email" class="form-control w-75" placeholder="Your Email" value="<?php echo $email; ?>" />
                    </div>
                    <div class="mb-2 d-flex justify-content-center">
                        <input type="password" name="password_1" id="password" class="form-control w-75" placeholder="Password" />
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="password" name="password_2" id="rep-password" class="form-control w-75" placeholder="Repeat your password" />
                    </div>
                    <div class="d-flex justify-content-end m-4">
                        <button type="submit" name="reg_user" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>