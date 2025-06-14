<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegist</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- Magnific Popup CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">

    <!-- Slider CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/movement.css">
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
                            <h3>Product Name</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="breadcrumb-right">
                            <p>
                                <a href="index.html">Home</a> : <a href="product.html">Product</a> : Product Name
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb End -->

        <!-- Product Des Page Start -->
        <section id="product-des-top" style="z-index: 9999999;">
            <div class="container">
                <div class="row">
                    <!-- Image Box -->
                    <div class="col-lg-4 col-12">
                        <div class="gallery-slider_wrapper">
                            <div class="single-gallery-carousel-content-box owl-carousel owl-theme">
                                <a class="item" href="image/side-img1.webp">
                                    <img src="image/side-img1.webp" alt="Awesome Image" />
                                </a>
                                <a class="item" href="image/side-img2.webp">
                                    <img src="image/side-img2.webp" alt="Awesome Image" />
                                </a>
                                <a class="item" href="image/side-img3.webp">
                                    <img src="image/side-img3.webp" alt="Awesome Image" />
                                </a>
                            </div>
                            <div style="margin:10px 25px 0 25px;">
                                <div class="single-gallery-carousel-thumbnail-box owl-carousel owl-theme">
                                    <div class="item" href="image/side-img1.webp">
                                        <img src="image/side-img1.webp" alt="Awesome Image" />
                                    </div>
                                    <div class="item" href="image/side-img2.webp">
                                        <img src="image/side-img2.webp" alt="Awesome Image" />
                                    </div>
                                    <div class="item" href="image/side-img3.webp">
                                        <img src="image/side-img3.webp" alt="Awesome Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="col-lg-5 col-12">
                        <div class="product-details">
                            <div class="product-upper">
                                <h3>Blood Orange with Kale</h3>
                                <p><strong>SKU : </strong><span>12345678</span></p>
                                <hr>
                                <div class="starts">
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star yellow"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="rates">
                                    $19.00 <span class="overline">$20.00</span> <span class="off">5%</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <div class="product-size">
                                    <p>Size : <span>1 KG</span></p>
                                    <ul>
                                        <li class="price-active">1/2 KG</li>
                                        <li>1 KG</li>
                                        <li>2 KG</li>
                                        <li>5 KG</li>
                                    </ul>
                                </div>
                                <div class="product-quantity">
                                    <span class="quantity">Quantity : </span>
                                    <span class="minus">-</span>
                                    <span class="num"></span>
                                    <span class="plus">+</span>
                                </div>
                                <!-- Side Menu Bar Start -->
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <div class="sidebar-content">

                                        <h3>My Shopping Cart</h3>
                                        <div class="sidebar-content-box">
                                            <img src="image/side-img1.webp" alt="">
                                            <div class="box-item">
                                                <h5>Product Name</h5>
                                                <p>₹ 1,200 <span> ₹1,500</span></p>
                                                <h6>Size : 5 kg <span>5%</span></h6>
                                                <div class="product-quantity">
                                                    <span class="minus">-</span>
                                                    <span class="num">01</span>
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                            <div class="delete">
                                                <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                        <div class="sidebar-content-box">
                                            <img src="image/side-img1.webp" alt="">
                                            <div class="box-item">
                                                <h5>Product Name</h5>
                                                <p>₹ 1,200 <span> ₹1,500</span></p>
                                                <h6>Size : 5 kg <span>5%</span></h6>
                                                <div class="product-quantity">
                                                    <span class="minus">-</span>
                                                    <span class="num">01</span>
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                            <div class="delete">
                                                <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                        <div class="sidebar-content-box">
                                            <img src="image/side-img1.webp" alt="">
                                            <div class="box-item">
                                                <h5>Product Name</h5>
                                                <p>₹ 1,200 <span> ₹1,500</span></p>
                                                <h6>Size : 5 kg <span>5%</span></h6>
                                                <div class="product-quantity">
                                                    <span class="minus">-</span>
                                                    <span class="num">01</span>
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                            <div class="delete">
                                               <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                        <div class="sidebar-content-box">
                                            <img src="image/side-img1.webp" alt="">
                                            <div class="box-item">
                                                <h5>Product Name</h5>
                                                <p>₹ 1,200 <span> ₹1,500</span></p>
                                                <h6>Size : 5 kg <span>5%</span></h6>
                                                <div class="product-quantity">
                                                    <span class="minus">-</span>
                                                    <span class="num">01</span>
                                                    <span class="plus">+</span>
                                                </div>
                                            </div>
                                            <div class="delete">
                                                <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-button">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Total Item:-</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>2 Items</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>Subtotal:-</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>₹ 400.00 /-</h5>
                                            </div>
                                        </div>
                                    <a href="cart-page.html" class="btn btn-style1">View Cart</a>
                                    <a href="check-out.html" class="btn btn-style2">Check Out</a>
                                </div>
                                </div>
                                <!-- Side Menu Bar End -->
                                <a href="check-out.php" class="btn btn-style1 full-width">Shop now</a>
                                <a href="" class="btn btn-style1 half-page" onclick="openNav();">Shop now</a>
                                <a href="cart-page.html" class="btn btn-style2">Add To Cart</a>
                                <hr>
                            </div>
                            <div class="product-lower">
                                <!-- <p>SKU : <span>12345678</span></p> -->
                                <p>Share :
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                                </p>
                                <img src="image/trust_image.webp" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Side Box -->
                    <div class="col-lg-3 col-12">
                        <div class="side-box">
                            <i class="fa fa-truck"></i>
                            <h4>DELIVERY INFO</h4>
                            <p>From then, delivery is generally within 2-10 days, depending on your location.</p>
                        </div>
                        <div class="side-box">
                            <i class="fa fa-home"></i>
                            <h4>30 DAYS RETURNS</h4>
                            <p>Not the right fit? No worries. We'll arrange pick up and a full refund within 7 days
                                including the delivery fee.</p>
                        </div>
                        <div class="side-box">
                            <i class="fa fa-home"></i>
                            <h4>30 DAYS RETURNS</h4>
                            <p>Not the right fit? No worries. We'll arrange pick up and a full refund within 7 days
                                including the delivery fee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="product-des-bottom">
            <div class="tabs  wow bounceInUp animated  animated">
                <input type="radio" id="tab1" name="tab-control" checked>
                <input type="radio" id="tab2" name="tab-control">
                <input type="radio" id="tab3" name="tab-control">
                <ul>
                    <li title="Features"><label for="tab1" role="button"><span>DESCRIPTION</span></label></li>
                    <li title="Delivery Contents"><label for="tab2" role="button"><span>ADDITIONAL
                                INFORMATION</span></label></li>
                    <li title="Shipping"><label for="tab3" role="button"><span>REVIEWS</span></label></li>
                </ul>
                <div class="content">
                    <section>
                        <h5>More Detail</h5>
                        <ol>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                            <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.
                            </li>
                            <li>type here your detail one by one li more add</li>
                            <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy
                                text ever since. Lorem Ipsum is simply dummy text.</li>
                        </ol>
                        <h5>Key Specification</h5>
                        <ol>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                            <li>Lorem Ipsum has been the ‘s standard dummy text. Lorem Ipsumum is simply dummy text.
                            </li>
                            <li>type here your detail one by one li more add</li>
                            <li>has been the industry’s standard dummy text ever since. Lorem Ips</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the ‘s standard dummy text. Lorem Ipsum has been the industry’s standard dummy
                                text ever since. Lorem Ipsum is simply dummy text.</li>
                        </ol>
                    </section>
                    <section>
                        <table>
                            <tbody>
                                <tr class="product-info">
                                    <th class="head">Vendor:</th>
                                    <td class="product-vendor">Vegist juice</a></td>
                                </tr>
                                <tr class="product-info">
                                    <th class="head">Size:</th>
                                    <td>200 Ml, 500 Ml, 1 Lt</td>
                                </tr>
                                <tr class="product-info">
                                    <th class="head">Flavour:</th>
                                    <td>Caret, Kiwi, Orange</td>
                                </tr>
                                <tr class="product-info">
                                    <th class="head">SKU:</th>
                                    <td class="variant-sku">123456</td>
                                </tr>
                                <tr class="product-info">
                                    <th class="head">Weight:</th>
                                    <td>10.0 kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section>
                        <h5>Our Reviews</h5>
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star yellow"></i>
                        <i class="fa fa-star"></i>
                        <p>Based on 1 review</p>
                        <p class="click-form" id="click-form">Write a Review</p>
                        <form action="" id="form">
                            <div class="col-half">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Enter Your Full Name" required />
                                    <div class="input-icon"><i class="fa fa-user"></i></div>
                                </div>
                            </div>
                            <div class="col-half">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Enter Your Email" required />
                                    <div class="input-icon"><i class="fa-solid fa-envelope"></i></div>
                                </div>
                            </div>
                            <div class="col-half">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Enter Your Rating" required />
                                    <div class="input-icon"><i class="fa-solid fa-star"></i></div>
                                </div>
                            </div>
                            <div class="col-half">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Enter Your Review Title" required />
                                    <div class="input-icon"><i class="fa-solid fa-user"></i></div>
                                </div>
                            </div>
                            <div class="col-full">
                                <div class="input-group input-group-icon">
                                    <input type="text" placeholder="Enter Your Review" required />
                                    <div class="input-icon"><i class="fa-solid fa-user"></i></div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-style1">Submit Now</a>
                        </form>
                        <hr>
                        <div class="review-box">
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star yellow"></i>
                            <i class="fa fa-star"></i>
                            <div class="client-name">Kawaljeet Kaur - <span>29-06-2023</span></div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error doloribus veniam
                                praesentium repudiandae magni provident enim totam perspiciatis. Et quisquam reiciendis
                                saepe assumenda.</p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- Product Des Page End -->

        <!-- Related Product Start -->
        <section id="trending-products" style="margin-top: 0px; margin-bottom: 50px">
        <div class="section-title wow zoomIn animated  animated" style="visibility: visible; animation-name: zoomIn;">
            <div class="section-img"> <img src="image/title-img.webp" alt="" class="img-fluid"> </div>
            <h2>Related Products</h2>
        </div>
        <div class="container">
            <div class="row owl-carousel">
            <div class="col-md-12">
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
                                <p><a href="#"><i class="fa fa-shopping-bag"></i> ADD TO CART</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
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
                                <p><a href="#"><i class="fa fa-shopping-bag"></i> ADD TO CART</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
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
                                <p><a href="#"><i class="fa fa-shopping-bag"></i> ADD TO CART</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
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
                                <p><a href="#"><i class="fa fa-shopping-bag"></i> ADD TO CART</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
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
                                <p><a href="#"><i class="fa fa-shopping-bag"></i> ADD TO CART</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
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
                                <p><a href="#"><i class="fa fa-shopping-bag"></i> ADD TO CART</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Related Product End -->

    </main>

    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->


    <!-- JavaScript Link -->
    <script src="js/jquey.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/animation.js"></script>

    <!-- jQuery Library-->
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <!-- Owl Carousel JS-->
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <!-- Magnific Popup JS-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js'></script>

    <script>
        function singleGalleryCarousel() {
            if ($('.single-gallery-carousel-content-box').length && $('.single-gallery-carousel-thumbnail-box').length) {

                var $sync1 = $(".single-gallery-carousel-content-box"), // variable declaration
                    $sync2 = $(".single-gallery-carousel-thumbnail-box"),
                    flag = false,
                    duration = 500;

                $sync1.owlCarousel({ //function for preview carousel
                    items: 1,
                    margin: 0,
                    nav: false,
                    dots: false
                })
                    .on('changed.owl.carousel', function (e) {
                        //var currentItem = e.item.index;
                        //alert(currentItem);
                        if (!flag) {
                            flag = true;
                            $sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
                            flag = false;
                        }
                    });

                $('.single-gallery-carousel-content-box').magnificPopup({ //function for magnific popup
                    type: 'image',
                    delegate: '.owl-item:not(.cloned) a',
                    closeOnContentClick: false,
                    removalDelay: 500,
                    callbacks: {
                        beforeOpen: function () {
                            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                            this.st.mainClass = this.st.el.attr('data-effect');
                        }
                    },
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-zoom-in mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1]
                    },
                    zoom: {
                        enabled: true,
                        duration: 300
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        titleSrc: function (item) {
                            return item.el.attr('title') + '<small></small>';
                        }
                    }
                });

                $sync2.owlCarousel({ //function for thumbnails carousel
                    margin: 1,
                    items: 7,
                    nav: true,
                    dots: false,
                    navText: false,
                    center: false,
                    responsive: {
                        0: {
                            items: 2,
                            autoWidth: false
                        },
                        400: {
                            items: 3,
                            autoWidth: false
                        },
                        768: {
                            items: 4,
                            autoWidth: false
                        }
                    },
                })
                    .on('click', '.owl-item', function () {
                        $sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
                    })
                    .on('changed.owl.carousel', function (e) {
                        if (!flag) {
                            flag = true;
                            $sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
                            flag = false;
                        }
                    });
            };
        }
        singleGalleryCarousel(); //FUNCTION CALLED HERE



        const plus = document.querySelector(".plus"),
            minus = document.querySelector(".minus"),
            num = document.querySelector(".num");

        window.addEventListener("load", () => {
            if (localStorage["num"]) {
                num.innerText = localStorage.getItem("num");
            } else {
                let a = "01";
                num.innerText = a;
            }
        });

        plus.addEventListener("click", () => {
            a = num.innerText;
            a++;
            a = (a < 10) ? "0" + a : a;
            localStorage.setItem("num", a);
            num.innerText = localStorage.getItem("num");
        });

        minus.addEventListener("click", () => {
            a = num.innerText;
            if (a > 1) {
                a--;
                a = (a < 10) ? "0" + a : a;
                localStorage.setItem("num", a);
                num.innerText = localStorage.getItem("num");
            }
        });

    </script>

<script>
        $(document).ready(function() {
            var silder = $(".owl-carousel");
            silder.owlCarousel({
                autoPlay: true,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
                items: 1,
                center: false,
                nav: false,
                // margin: 40,
                dots: true,
                loop: true,
                navText: ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
                responsive: {
                    0: {
                        items: 1,
                    },
                    575: {
                        items: 1
                    },
                    768: {
                        items: 3
                    },
                    991: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        });
    </script>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "30%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        // Write a review
        let clickForm = document.getElementById("click-form");

        clickForm.addEventListener('click', function () {
            form.style.display = "block";
        });

    </script>



    <!-- Slider Js-->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>