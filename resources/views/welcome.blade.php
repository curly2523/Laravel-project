<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Welcome</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        {{-- <aside class="menu-sidebar2" style="overflow: hidden">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
        </aside> --}}
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2 d-flex justify-content-between align-items-center">
                            <div class="logo d-block" style="align-self: flex-start">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            
                             <!-- Integrated Sidebar Items in Header -->
                <nav class="navbar-header d-none d-lg-flex align-items-center">
                    <ul class="list-unstyled navbar__list d-flex align-items-center">
                        <li class="nav-item" style="margin-right: 20px;">
                            <a class="nav-link" href="#" style="color: aliceblue">
                                <i class="fas fa-tachometer-alt" style="color: aliceblue"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inbox.html" style="color: aliceblue">
                                <i class="fas fa-chart-bar" style="color: aliceblue"></i> About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: aliceblue">
                                <i class="fas fa-shopping-basket" style="color: aliceblue"></i> Contact Us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: aliceblue">
                                <i class="fas fa-copy" style="color: aliceblue"></i> Pages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <a class="dropdown-item" href="login">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                                <a class="dropdown-item" href="register">
                                    <i class="fas fa-user"></i> Register
                                </a>
                                <a class="dropdown-item" href="forget-pass.html">
                                    <i class="fas fa-unlock-alt"></i> Forget Password
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End Integrated Sidebar Items in Header -->
                            <div class="header-button2">

                                <div class="header-button-item js-item-menu">
                                    
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


           <!-- BREADCRUMB-->
<section class="au-breadcrumb " >
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span" >You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active",>
                                    <a href="#">Home</a>
                                </li>
                            </ul>
                        </div>
                        <div class="au-breadcrumb-right">
                            <a href="{{route('register')}}">
                            <button class="au-btn au-btn-icon au-btn--green m-l-10">
                                Register</button></a>
                            <a href="{{route('login')}}">
                            <button class="au-btn au-btn-icon au-btn--pink m-l-10">
                                Login</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->


  <!-- MAIN CONTENT-->
  <main class="main-content" >
    <section class="hero">
        <div class="container">
            <h1>Welcome to Our Website</h1>
            <h3>"Connecting You to Tomorrow's Technology Today"</h3>
            <p>
                Explanation: This tagline highlights the company's focus on advanced mobile technology and exceptional customer service, positioning them as a leading provider in the industry committed to delivering both innovation and customer satisfaction.</p>
            <a href="#">
                <img src="images/icon/phpnes.jpg" alt="phones" style="width: 500px; height: 300;"/>
            </a><br>
            <a href="about.html" class="btn btn-lg btn-success">Learn More</a>
        </div>
    </section>
</main>
<!-- END MAIN CONTENT-->

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
