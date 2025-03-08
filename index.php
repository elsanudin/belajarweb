<?php 
session_start();
include "login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary" style="background-color:#cfd0d0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9" style="padding:5% 0 0 0;">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row" style="display:flex; flex-wrap:wrap;">
                            <div class="welcome" style="height:500px; width: 325px; background-color: rgba(19, 143, 143, 0.9); align-items:center;">
                                <div class="text-center"style="padding:60px 0 0 0">
                                    <h1 class="h4 text-gray-900 mb-4" style="font-weight:bold; font-size:30px #60d4fb">Welcome Back!</h1>
                                    <p class="desain" style="color:black; padding:0px 0 0 9px; margin:0;">silahkan masukan email dan password anda!</p>
                                    <div class="logo">
                                        <img style="width:13rem; height:13rem; padding:0 0 0 0.5rem;" src="img/logotoko.png" alt="">
                                    </div>
                                    <div class="button" style="display:flex; flex-wrap:wrap; width:100%; justify-content:center; padding:50px;">
                                        <div class="text-center" style="width: 110px">
                                            <a class="small" style="color:#3f5457;" href="forgot-password.html">Forgot Password? |</a>
                                        </div>
                                        <div class="text-center" style="width: 112px">
                                            <a class="small" style="color:#2c3348;" href="register.html">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" >
                                <div class="p-5">
                                    <?php
                                    if(isset($_POST["email"])){
                                        $email = $_POST["email"];
                                        $password = $_POST["password"];
                                        $sql = "SELECT * FROM tb_admin WHERE email = '$email' AND password = '$password' ";
                                        $query = mysqli_query($koneksi, $sql); 
                                        if (mysqli_num_rows($query) > 0) {
                                            $data = mysqli_fetch_array($query);
                                            $_SESSION['tb_admin']  = $data['id_admin'];
                                            echo '<script>alert("selamat datang '.$data["nama"].'"); location.href="include/index.php";</script>';
                                        } else {
                                            echo '<script>alert("email/password salah");</script>';
                                        }
                                    }
                                    ?>
                                    <form class="user" style="width:28rem;" method="post" >
                                        <h1 class="h4 text-gray-900 mb-4" style="font-size:34px">Login</h1>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Email Address..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" style="background-color: rgba(19, 143, 143, 0.9);" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>