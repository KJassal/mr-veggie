<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password - Vegist</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Slider CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!-- Css Links -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/mob-menu.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>


    <!-- Header Start -->
    <?php include('header.php'); ?>
    <!-- Header End -->

    <main>

        <!-- BreadCrumb Start -->
        <section id="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="breadcrumb-left">
                            <h3>Forget Password</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="breadcrumb-right">
                            <p>
                                <a href="index.php">Home</a> : Forget Password
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb End -->

        <!-- Cart Page Start -->
        <section id="forget-password">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="signup-box" id="signup-box">
                            <div class="form-signup-box sign-up-signup-box">
                                <form action="#">
                                    <div class="section-title">
                                        <h2>Forget Password</h2>
                                    </div>
                                    <span>We will send you an email to reset your password.</span>
                                    <div class="col-full">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="Enter Your Email" required="">
                                            <div class="input-icon"><i class="fa-solid fa-envelope"></i></div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-style1" tabindex="0">Get Link</a>
                                </form>
                            </div>
                            <div class="overlay-signup-box">
                                <div class="overlay">
                                    <div class="overlay-panel overlay-right">
                                        <h1>Hello, Friends</h1>
                                        <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cart Page End -->

    </main>

    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->


    <!-- JavaScript Link -->
    <script src="js/jquey.js"></script>

    <!-- Slider Js -->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>