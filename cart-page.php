<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegist</title>

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
                            <h3>My Cart</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="breadcrumb-right">
                            <p>
                                <a href="index.html">Home</a> : My Cart
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb End -->

        <!-- Wishlist Page Start -->
        <section id="wishlist" class="whishlist-large">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-wrap">
                            <div class="table-wishlist">
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="45%" style="text-align: center;">Product Name</th>
                                            <th width="15%">Unit Price</th>
                                            <th width="15%">Stock Status</th>
                                            <th width="15%" colspan="2" style="text-align: center;">Action</th>
                                            <!-- <th width="10%"></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="45%">
                                                <div class="display-flex align-center">
                                                    <div class="img-product">
                                                        <img src="image/side-img1.webp" alt="" class="mCS_img_loaded">
                                                    </div>
                                                    <div class="name-product">
                                                        Blood Orange With Kale
                                                    </div>
                                                </div>
                                            </td>
                                            <td width="20%">₹ 1,200.00</td>
                                            <td width="25%">
                                                <div class="product-quantity">
                                                    <span class="minus">-</span>
                                                    <span class="num"> </span>
                                                    <span class="plus">+</span>
                                                </div>
                                            </td>

                                            <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bill-box">
                        <a href="check-out.php" class="btn btn-style2">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Wishlist Page End -->

        <section id="trending-products" class="whishlist-small">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-6">
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
                    <div class="col-md-3 col-6">
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
                    <div class="col-md-6 col-6">
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
                    <div class="col-md-6 col-6">
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
                    <div class="col-md-6 col-6">
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
                <a href="check-out.php" class="btn btn-style2" style="margin: 20px 0px;">Check Out</a>
            </div>
        </section>
    </main>

    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->


    <!-- JavaScript Link -->
    <script src="js/jquey.js"></script>

    <script>
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

    <!-- Slider Js -->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>