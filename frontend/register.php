
/
/**
* Created by PhpStorm.
* User: nishi
* Date: 4/6/2019
* Time: 8:47 PM
*/

<!DOCTYPE html>
<html lang="en">
<head>
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
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/register.js"></script>

    <style type="text/css">
        #flid{
            margin-left :-13px;
        }

        h1,p{
            margin-left: 20px;
        }

        .colorblue{
            color: #0EBFE9;
        }

        .colorgrey{
            color:#A9A9A9;
        }

        .border{
            border:1px solid #C0C3C5;

        }
        h1{
            font-weight: bold;
        }
        p{
            color:#A9A9A9;
            font-family: "Times New Roman", "Times", "serif";
            font-weight: bold;
        }
    </style>


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
        <a class="navbar-brand text-brand" href="login.php">
            <img src="img/bob.jpg" width="100" height="100"/>
            <span class="color-b">Bulls</span>
            <span class="color-a">Or</span>
            <span class="color-e">Bears</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Carousel Star /-->

<!--<div class="intro intro-carousel">-->
<!--    <div id="carousel" class="owl-carousel owl-theme">-->
<!--        <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">-->
<!--            <div class="overlay overlay-a"></div>-->
<!--            <div class="intro-content display-table">-->
<!--                <div class="table-cell">-->
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-8">-->
<!--                                <div class="intro-body">-->
<!--                                    <h1 class="intro-title mb-4">How To Double Your Stock Returns in 2019</h1>-->
<!--                                    <p class="intro-title-top">Even the biggest goals are achiveable if you have a road map on how to do it. Follow our steps and you will be your way</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">-->
<!--            <div class="overlay overlay-a"></div>-->
<!--            <div class="intro-content display-table">-->
<!--                <div class="table-cell">-->
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-8">-->
<!--                                <div class="intro-body">-->
<!--                                    <h1 class="intro-title mb-4">What To Expect For The Markets Next Week</h1>-->
<!--                                    <p class="intro-title-top">Investors will be watching oil prices as futures hit near term highs</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">-->
<!--            <div class="overlay overlay-a"></div>-->
<!--            <div class="intro-content display-table">-->
<!--                <div class="table-cell">-->
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-8">-->
<!--                                <div class="intro-body">-->
<!--                                    <h1 class="intro-title mb-4">Stock Market-->
<!--                                        Basics</h1>-->
<!--                                    <p class="intro-title-top">Want to know how the stock market really works?</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--/ Carousel end /-->

//delete from above
<div class="container col col-md-4 border">
    <div class="form-group">
        <form action="registerAction.php" name="signupform" method="post">

            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account!</p>
            <hr >
            <div class="col col-md-12" id ="flid">
                <div  class="col col-md-6">
                    Name:<input class="form-control" type="text" id="fid" name="name" placeholder="Enter Name">
                    <br>
                </div>
                <div class="col col-md-6">
                    Username:<input class="form-control" type="text" id="lid" name="username" placeholder="User Name" required>
                </div><br>
                <div class="col col-md-6">
                   Gender:<br>
                   Male <input type="radio" name="gender" value="male">
                    Female <input  type="radio" name="gender" value="female">
                </div>

            </div>
            <br>

            <div class="col col-md-11">
                Email:<input class="col col-md-3 form-control" type="email" id="eid" name="email" placeholder="Email" required>
            </div>
            <br>

            <div class="col col-md-11">
              Password  <input class="col col-md-3 form-control" type="password" id="pid" name="password" placeholder="Password">
            </div>
            <br>
            <div class="col col-md-11">
              Phone no:  <input class="col col-md-3 form-control" type="text" id="ppid" name="phone" placeholder="Enter Phone">
            </div>
            <br>
            <br>
            <br>
            <div class="col col-md-12">
                <input form-control" type="checkbox" name="termscheck" id="tcheck">
                <label id="termstextid"><span class="colorgrey">I accept the</span> <span class="colorblue">Terms of Use</span> <span class="colorgrey">& </span><span class="colorblue">Privacy Policy</span></label>
            </div>
            <br>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Sign Up" name="signup" >
            <!--<span><?php echo ($error)?></span>-->
            <span>
                <?php if(isset($_GET['msg']))
                echo $_GET['msg'];
                 ?>
            </span>

        </form>
    </div>
</div>



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

<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
