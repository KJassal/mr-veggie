<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out - Vegist</title>

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
                            <h3>Check Out</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="breadcrumb-right">
                            <p>
                                <a href="index.php">Home</a> : Check Out
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- BreadCrumb End -->

        <!-- Cart Page Start -->
        <section id="cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <form>
                            <div class="row">
                                <h6>Shipping Address</h6>
                                <div class="col-full">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Address 1" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-full">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Apartment, suite, etc. (optional)" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="City" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="State" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Country" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Pincode" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-full">
                            <div class="radio-button">
                                <h6>Shipping Address & Billing Address Both Are Same ?</h6>
                                <input type="radio" id="yes" name="fav_language" value="HTML" width="auto">
                                <label for="html">Yes </label>
                                <input type="radio" id="no" name="fav_language" value="CSS" width="auto">
                                <label for="css">No </label>
                            </div>
                            <form action="" id="clickform">
                                <div class="col-full">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Address 1" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-full">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Apartment, suite, etc. (optional)" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="City" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="State" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Country" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div class="input-group input-group-icon">
                                        <input type="text" placeholder="Pincode" required />
                                        <div class="input-icon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <h6>Terms and Conditions</h6>
                            <div class="input-group">
                                <input id="terms" type="checkbox" />
                                <label for="terms">I accept the terms and conditions for signing up to this service, and
                                    hereby confirm I have read the <a href="policy.php"> policy.</a></label>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5">
                        <div class="cart-page-right">
                            <div class="title-inner">
                                <h6>YOUR ORDER</h6>
                            </div>
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name" colspan="2">Product</th>
                                            <th class="product-name">Unit Price</th>
                                            <th class="product-name">Quantity</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-thumbnail" width="13%"><img alt=" "
                                                    src="image/flavour-juice.webp">
                                            </td>
                                            <td class="product-name">Product Name
                                            </td>
                                            <td class="product-name">
                                                <span class="amount">₹ 1,481.00</span><br>
                                                <del class="silver"><span>₹ 1,851.00</span></del>
                                            </td>
                                            <td class="product-name">1</td>
                                            <td class="product-total"><span class="amount">₹ 1,481.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th colspan="4">Sub Total</th>
                                            <td>₹ 1,481.00</td>
                                        </tr>
                                        <tr class="shipping">
                                            <th colspan="4">Shipping Charges</th>
                                            <td class="shipping_charge_tab">
                                                ₹ 0.00 </td>
                                        </tr>
                                        <tr>
                                            <th colspan="3">Product Delivered From</th>
                                            <td colspan="2" class="text-center">Delhi - 110042</td>
                                        </tr>
                                        <tr class="couponapplybox">
                                            <th colspan="3">
                                                <input type="text" placeholder="Enter Coupon Code" class="couponclass">
                                            </th>
                                            <td colspan="2" class="center">
                                                <a href="#" class="btn btn-style1">Apply Now</a>
                                            </td>
                                        </tr>
                                        <tr class="couponapplyboxmessage"></tr>
                                        <tr class="order-total">
                                            <th colspan="4">Payable Amount</th>
                                            <td><strong><span class="amount total_charge_tab">₹
                                                        1,481.00</span></strong> </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row payment">
                                <div class="col-3">
                                    <div class="payment-box mode-active">
                                        <img src="image/cash-on-delivery.jpg" alt="">
                                        Cash On Delivery
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="payment-box">
                                        <img src="image/upi.png" alt="">
                                        UPI
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="payment-box">
                                        <img src="image/net-banking.png" alt="">
                                        Internet Banking
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="payment-box">
                                        <img src="image/other.png" alt="">
                                        Other Payment Mode
                                    </div>
                                </div>
                                <a href="#" class="btn btn-style1">Apply Now</a>
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

    <script>
        var checkForm = document.getElementById("clickform");
        var clickNo = document.getElementById("no");
        var clickYes = document.getElementById("yes")

        no.addEventListener('click', function () {
            clickform.style.display = "block";
        });

        yes.addEventListener('click', function () {
            clickform.style.display = "none";
        });
    </script>

    <!-- Slider Js -->
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>