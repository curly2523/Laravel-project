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
    <title>Add Category</title>

    <!-- Fontfaces CSS-->
    <link href={{asset("css/font-face.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/font-awesome-4.7/css/font-awesome.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/font-awesome-5/css/fontawesome-all.min.css")}} rel="stylesheet" media="all">
    <link href={{asset("vendor/mdi-font/css/material-design-iconic-font.min.css")}} rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href={{asset("vendor/bootstrap-4.1/bootstrap.min.css")}} rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href={{ asset('css/theme.css') }} rel="stylesheet" media="all">

</head>
<body class="animsition" >
    <div class="page-wrapper" style="overflow: auto">
        <div class="page-content--bge5" style="overflow: auto">
            <div class="container" style="overflow: auto">
                <div class="login-wrap" style="overflow: auto">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src={{asset("images/icon/logo.png")}} alt="CoolAdmin">
                            </a>
                            <h2 style="margin-top: 30px;">Add New Category</h2>
                        </div>
                        <div class="mt-5">
                        </div>
                        <div>
                            @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="login-form">
                            <form action="{{ route('categories.store') }}" method="post">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <label>Category name</label>
                                    <input class="au-input au-input--full" type="txt" name="category_name" id="category_name" placeholder="Enter Category Name">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
</html>