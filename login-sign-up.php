<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up / Login - Vegist</title>

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
                            <h3>Sign Up / Login</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="breadcrumb-right">
                            <p>
                                <a href="index.php">Home</a> : Sign Up / Login
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb End -->

        <section id="login-sign-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="signup-box" id="signup-box">
                            <div class="form-signup-box sign-up-signup-box">
                                <form action="#">
                                    <div class="section-title">
                                        <h2>Create Account</h2>
                                    </div>
                                    <div class="social-signup-box">
                                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <span>or use your email for registration</span>
                                    <div class="col-full">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="Enter Your Full Name" required="">
                                            <div class="input-icon"><i class="fa-solid fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-full">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="Enter Your Email" required="">
                                            <div class="input-icon"><i class="fa-solid fa-envelope"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-full">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="Enter Your Password" required="">
                                            <div class="input-icon"><i class="fa-solid fa-lock"></i></div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-style1" tabindex="0">Sign Up</a>
                                    <!-- <a href="#" class="btn btn-style2 button-hide" tabindex="0" id="signin">Sign In</a> -->
                                </form>
                            </div>
                            <div class="form-signup-box sign-in-signup-box">
                                <form action="#">
                                    <div class="section-title">
                                        <h2>Sign In Your Account</h2>
                                    </div>
                                    <div class="social-signup-box">
                                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <span>or use your account</span>
                                    <div class="col-full">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="Enter Your Email" required="">
                                            <div class="input-icon"><i class="fa-solid fa-envelope"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-full">
                                        <div class="input-group input-group-icon">
                                            <input type="text" placeholder="Enter Your Password" required="">
                                            <div class="input-icon"><i class="fa-solid fa-lock"></i></div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-style1" tabindex="0">Sign In</a>
                                    <!-- <a href="#" class="btn btn-style2 button-hide" tabindex="0" id="signup">Sign Up</a> -->
                                </form>
                            </div>
                            <div class="overlay-signup-box">
                                <div class="overlay">
                                    <div class="overlay-panel overlay-left">
                                        <h1>Welcome Back</h1>
                                        <p>Enter your personal details and start journey with us</p>
                                        <!-- <button class="ghost" id="signUp">Sign Up</button> -->
                                        <a href="#" class="btn btn-style1" tabindex="0" id="signin">Sign In</a>
                                    </div>
                                    <div class="overlay-panel overlay-right">
                                        <h1>Hello, Friends</h1>
                                        <p>To keep connected with us please signup with your personal info</p>
                                        <!-- <button class="ghost" id="signIn">Sign In</button> -->
                                        <a href="#" class="btn btn-style1" tabindex="0" id="signup">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->


    <!-- JavaScript Link -->
    <script src="js/jquey.js"></script>

    <!-- Box Js -->
    <script>
        const signUpButton = document.getElementById('signup');
        const signInButton = document.getElementById('signin');
        const signupbox = document.getElementById('signup-box');

        signUpButton.addEventListener('click', () => {
            signupbox.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            signupbox.classList.remove("right-panel-active");
        });
    </script>

    <!-- Slider Js -->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>