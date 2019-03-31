
<!DOCTYPE html>
<html lang="en">
<head>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">


    <meta charset="utf-8">
    <title>Bulls Or Bears Investors</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/bob.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <?php
    //require('index.php');
    require('predict.php');
    require_once 'Pagination.php';
    require('db_connection.php');
    global $connection;
    $conn = $connection;

    $limit      =  6;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    //$links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 3;
    $query      = "SELECT * FROM Company";

    $Paginator  = new pagination( $conn, $query );

    $results    = $Paginator->getData( $limit,$page );
    $data_arr = $results->data;

    ?>
    <script src="js/index.js"></script>


</head>

<body>
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Stocks</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Company</label>
                        <select class="form-control form-control-lg form-control-a" id="Type">
                            <option>Facebook</option>
                            <option>Google</option>
                            <option>Amazon</option>
                            <option>Microsoft</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Stock</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--/ Form Search End /-->

<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.php">
            <img src="img/bob.jpg" width="100" height="100"/>
            <span class="color-b">Bulls</span>
            <span class="color-a">Or</span>
            <span class="color-e">Bears</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-2x"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="property-single.html">Transaction History</a>
                        <a class="dropdown-item" href="blog-single.html">Account Settings</a>
                        <a class="dropdown-item" href="agents-grid.html">LogOut</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property-grid.html"><i class="fas fa-shopping-cart fa-2x"></i></a>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
    </div>
</nav>
<!--/ Nav End /-->


<?php
$j=0;
while($j==0 || $j==3 && $j<6){
    ?>
<div class = "section-t8 container">
    <div class="card-deck" style="padding: 5px">
        <?php
        for($i=$j;$i<$j+3&&$i<count($data_arr);$i++){
            ?>
            <div class="card" id="<?php echo 'card'.$data_arr[$i]['id']; ?>" >
                <div>
                    <img style="width: 20%; float:left" class="card-img-top" src="..." alt="Card image cap">

                    <h5 id="<?php echo 'card'.$data_arr[$i]['id']; ?>_name" style="width: 80%; float:right" class="card-title"><?php echo $data_arr[$i]['name']; ?></h5> </div>
                <div class="card text-center" style="margin: 0px;">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#<?php echo 'card'.$data_arr[$i]['id']; ?>_trade" data-toggle="tab" role="tab">Trade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#<?php echo 'card'.$data_arr[$i]['id']; ?>_details" data-toggle="tab" role="tab">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#<?php echo 'card'.$data_arr[$i]['id']; ?>_prediction" data-toggle="tab" role="tab">Prediction</a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_trade" >
                            <div class="card-body">
                                <div>
                                    <p  style="width: 50%; float:left" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_price">Price:<?php echo $data_arr[$i]['price']; ?></p>
                                    <?php if ($data_arr[$i]['difference'] >=0){ ?>
                                        <i  id="<?php echo 'card'.$data_arr[$i]['id']; ?>_up" class="fa fa-caret-up"  style="width:50%;float:right;color:green"></i>
                                    <?php } else { ?>
                                        <i  id="<?php echo 'card'.$data_arr[$i]['id']; ?>_down"  class="fa fa-caret-down" style="width:50%;float:right;color:red"></i>
                                    <?php } ?>
                                </div>


                                <div>
                                    <div style="width: 40%;float:right">
                                    <div class="form-check form-check-inline" >
                                        <input class="form-check-input <?php echo 'card'.$data_arr[$i]['id']; ?>" type="radio" name="<?php echo 'card'.$data_arr[$i]['id']; ?>_buy_sell" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_buy_button" value="b" checked>
                                        <label class="form-check-label" for="inlineRadio1" >Buy</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input <?php echo 'card'.$data_arr[$i]['id']; ?>" type="radio" name="<?php echo 'card'.$data_arr[$i]['id']; ?>_buy_sell" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_sell_button" value="s">
                                        <label class="form-check-label" for="inlineRadio2">Sell</label>
                                    </div>
                                    </div>

                                    <div style="width:60%:float:left">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons" aria-label="Basic example">

                                        <div class="container">
                                            <div class="page-header"></div>
                                            <div class="input-group spinner" >

                                                <input type="text" class="form-control" value="1" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_spin">

                                                <div class="input-group-btn-vertical">
                                                    <button class="btn btn-default" type="button" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_up_spinner" ><i class="fa fa-caret-up"></i></button>
                                                    <button class="btn btn-default" type="button" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_down_spinner"><i class="fa fa-caret-down"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                    <div style="padding-top: 5px">
                                        <button type="button" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_cart_button"  class="btn btn-success car" >Add to cart</button>
                                        <button type="button" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_checkout_button"  class="btn btn-success checkout">Checkout</button>
                                    </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_details" >
                            <p>
                                Open: <?php echo $data_arr[$i]['open']; ?> <br>
                                High: <?php echo $data_arr[$i]['high']; ?> <br>
                                Low:  <?php echo $data_arr[$i]['low']; ?> <br>
                                Last trade day: <?php echo $data_arr[$i]['last_trade_day']; ?> <br>
                                Previous Close: <?php echo $data_arr[$i]['previous_close']; ?> <br>
                            </p>

                        </div>

                        <div class="tab-pane" id="<?php echo 'card'.$data_arr[$i]['id']; ?>_prediction">
                            <p>
                                <?php

                                $stock = 'GOOGL';
                                predict_for_closing_price($stock);
                                ?>
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        <?php } $j=$j+3;?>
    </div>
<?php } ?>
</div>
<?php
echo $Paginator->createLinks( 'pagination' ); ?>
<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Bulls Or Bears</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Leading financial services company and pioneer in the online stock sales industry. It’s the platform for traders passionate about the markets. Intuitive and easy-to-use. Packed with opportunity-finding and market-seizing tools and features.
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone </span> +1 (123)456-7890 </li>
                            <li class="color-a">
                                <span class="color-text-a">Email </span> bobinvestors@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">The Company</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">International sites</h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">India</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">America</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Canada</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Germany</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                            </li>
                            <li class="item-list-a">
                                <i class="fa fa-angle-right"></i> <a href="#">China</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Property</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Blog</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="socials-a">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->

<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>


</body>
</html>
