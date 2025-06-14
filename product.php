<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product - Vegist</title>

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
                            <h3>Our Products</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="breadcrumb-right">
                            <p>
                                <a href="index.html">Home</a> : Our Products
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb End -->

        <!-- Product Page Start -->
        <section id="product-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 filter">
                        <div class="product-heading">
                            <a href="#" class="btn btn-style2">Apply Filter</a>
                        </div>
                        <div class="filter-box">
                            <h6>Product</h6>
                            <input type="radio" id="category1" name="category" value="category">
                            <label for="category1"> Category 1</label><br>
                            <input type="radio" id="category2" name="category" value="category">
                            <label for="category2"> Category 2</label><br>
                            <input type="radio" id="category3" name="category" value="category">
                            <label for="category3"> Category 3</label><br>
                            <input type="radio" id="category4" name="category" value="category">
                            <label for="category4"> Category 4</label><br>
                            <input type="radio" id="category5" name="category" value="category">
                            <label for="category5"> Category 5</label><br>
                        </div>
                        <div class="filter-box">
                            <h6>Product Price</h6>
                            <input type="radio" id="product-price-1" name="product-price" value="product-price">
                            <label for="product-price-1"> ₹10 - ₹49</label><br>

                            <input type="radio" id="product-price-2" name="product-price" value="product-price">
                            <label for="product-price"> ₹50 - ₹99</label><br>

                            <input type="radio" id="product-price-3" name="product-price" value="product-price">
                            <label for="product-price-3"> ₹100 - ₹149</label><br>

                            <input type="radio" id="product-price-4" name="product-price" value="product-price">
                            <label for="product-price-4"> ₹150 - ₹199</label><br>

                            <input type="radio" id="product-price-5" name="product-price" value="product-price">
                            <label for="product-price-5"> ₹200 - ₹249</label><br>

                            <input type="radio" id="product-price-6" name="product-price" value="product-price">
                            <label for="product-price-6"> ₹250 - ₹299</label><br>

                            <input type="radio" id="product-price-7" name="product-price" value="product-price">
                            <label for="product-price-7"> ₹300 - ₹349</label><br>

                            <input type="radio" id="product2" name="product" value="Bike">
                            <label for="product2"> ₹350 - ₹399</label><br>

                        </div>
                        <div class="filter-box">
                            <h6>Product Size</h6>
                            <input type="radio" id="product-size-1" name="product-size" value="product-size">
                            <label for="product-size-1"> 1 KG</label><br>

                            <input type="radio" id="product-size-2" name="product-size" value="product-size">
                            <label for="product-size-2"> 2 KG</label><br>

                            <input type="radio" id="product-size-3" name="product-size" value="product-size">
                            <label for="product-size-3"> 3 KG</label><br>

                            <input type="radio" id="product-size-4" name="product-size" value="product-size">
                            <label for="product-size-4"> 4 KG</label><br>

                            <input type="radio" id="product-size-5" name="product-size" value="product-size">
                            <label for="product-size-5"> 5 KG</label><br>

                            <input type="radio" id="product-size-6" name="product-size" value="product-size">
                            <label for="product-size-6"> 6 KG</label><br>

                            <input type="radio" id="product-size-7" name="product-size" value="product-size">
                            <label for="product-size-7"> 7 KG</label><br>

                            <input type="radio" id="product1" name="product" value="Car">
                            <label for="product1"> 8 KG</label><br>

                        </div>
                    </div>

                    <!-- products -->
                    <div class="col-lg-10 col-md-12">
                        <div class="product-page-banner">
                            <img src="image/product-page-banner.webp" alt="">
                        </div>
                        <div class="container-fluid product-margin">
                            <div class="row">
                                <div class="col-12 filter-button">
                                    <div id="mySidenav2" class="sidenav1">
                                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                        <div class="filter-box">
                                            <h6>Product</h6>
                                            <input type="radio" id="category1" name="category" value="category">
                                            <label for="category1"> Category 1</label><br>
                                            <input type="radio" id="category2" name="category" value="category">
                                            <label for="category2"> Category 2</label><br>
                                            <input type="radio" id="category3" name="category" value="category">
                                            <label for="category3"> Category 3</label><br>
                                            <input type="radio" id="category4" name="category" value="category">
                                            <label for="category4"> Category 4</label><br>
                                            <input type="radio" id="category5" name="category" value="category">
                                            <label for="category5"> Category 5</label><br>
                                        </div>
                                        <div class="filter-box">
                                            <h6>Product Price</h6>
                                            <input type="radio" id="product-price-1" name="product-price" value="product-price">
                                            <label for="product-price-1"> ₹10 - ₹49</label><br>

                                            <input type="radio" id="product-price-2" name="product-price" value="product-price">
                                            <label for="product-price"> ₹50 - ₹99</label><br>

                                            <input type="radio" id="product-price-3" name="product-price" value="product-price">
                                            <label for="product-price-3"> ₹100 - ₹149</label><br>

                                            <input type="radio" id="product-price-4" name="product-price" value="product-price">
                                            <label for="product-price-4"> ₹150 - ₹199</label><br>

                                            <input type="radio" id="product-price-5" name="product-price" value="product-price">
                                            <label for="product-price-5"> ₹200 - ₹249</label><br>

                                            <input type="radio" id="product-price-6" name="product-price" value="product-price">
                                            <label for="product-price-6"> ₹250 - ₹299</label><br>

                                            <input type="radio" id="product-price-7" name="product-price" value="product-price">
                                            <label for="product-price-7"> ₹300 - ₹349</label><br>

                                            <input type="radio" id="product2" name="product" value="Bike">
                                            <label for="product2"> ₹350 - ₹399</label><br>

                                        </div>
                                        <div class="filter-box">
                                            <h6>Product Size</h6>
                                            <input type="radio" id="product-size-1" name="product-size" value="product-size">
                                            <label for="product-size-1"> 1 KG</label><br>

                                            <input type="radio" id="product-size-2" name="product-size" value="product-size">
                                            <label for="product-size-2"> 2 KG</label><br>

                                            <input type="radio" id="product-size-3" name="product-size" value="product-size">
                                            <label for="product-size-3"> 3 KG</label><br>

                                            <input type="radio" id="product-size-4" name="product-size" value="product-size">
                                            <label for="product-size-4"> 4 KG</label><br>

                                            <input type="radio" id="product-size-5" name="product-size" value="product-size">
                                            <label for="product-size-5"> 5 KG</label><br>

                                            <input type="radio" id="product-size-6" name="product-size" value="product-size">
                                            <label for="product-size-6"> 6 KG</label><br>

                                            <input type="radio" id="product-size-7" name="product-size" value="product-size">
                                            <label for="product-size-7"> 7 KG</label><br>

                                            <input type="radio" id="product1" name="product" value="Car">
                                            <label for="product1"> 8 KG</label><br>

                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-style1" onclick="openNav()">Apply Filter</a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-6" style="padding-right: 0;
                                padding-left: 0">
                                    <div class="product-box">
                                        <div class="product-icon">
                                            <i class="fa fa-heart"></i>
                                            <br>
                                            <i class="fa fa-shop"></i>
                                        </div>
                                        <div class="product-box-img">
                                            <img src="image/product-img/amrud.jpg" alt="">
                                        </div>
                                        <div class="product-box-content">
                                            <div class="product-type">
                                                <p>Guava</p>
                                            </div>
                                            <div class="stars">
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star yellow"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <!-- <p>Guava</p> -->
                                            <div class="rate">₹16.00 <span class="rate-2">₹20.00</span> <span class="discount">25% off</span></div>
                                            <div class="product-overlay">
                                                <p><a href="product-des.php"><i class="fa fa-search"></i> Viw Details</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Page End -->

    </main>

    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->

    <script>
        function openNav() {
            document.getElementById("mySidenav2").style.width = "80%";
        }

        function closeNav() {
            document.getElementById("mySidenav2").style.width = "0";
        }
    </script>

    <!-- JavaScript Link -->
    <script src="js/jquey.js"></script>

    <!-- Slider Js -->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>