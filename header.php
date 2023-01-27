<!doctype html>
<html dir="ltr" lang="en-US">

<head>
    <title>Greatly Social</title>
    <link type="image/x-icon" rel="shortcut icon" href="assets/images/fevicon.png" />
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700" /> -->
    <link type="text/css" rel="stylesheet" href="assets/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/font/stylesheet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="assets/css/styles.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/responsive.css" />

</head>

<body>

    <?php
    function chk_active($p)
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($actual_link, $p) !== false) {
            return true;
        } else {
            return false;
        }
    }
    ?>

    <!--Header-->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img class="header-logo" src="assets/images/header_logo.svg" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                        <div class="plate plate4" onclick="this.classList.toggle('active')">
                            <svg class="burger" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                                <path class="line line1" d="M 50,35 H 30" />
                                <path class="line line2" d="M 50,35 H 70" />
                                <path class="line line3" d="M 50,50 H 30" />
                                <path class="line line4" d="M 50,50 H 70" />
                                <path class="line line5" d="M 50,65 H 30" />
                                <path class="line line6" d="M 50,65 H 70" />
                            </svg>
                            <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                                <path class="line" d="M 34,32 L 66,68" />
                                <path class="line" d="M 66,32 L 34,68" />
                            </svg>
                        </div>
                    </span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link <?php if (chk_active('index')) {
                                                    echo " active ";
                                                } ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Testimonials</a>
                        </li>
                    </ul>
                    <div class="btns login-signup">
                        <a href="#" class="borderred ">Login</a>
                        <a href="#" class="btnblack signup-btn">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Modal -->
    </header>
</body>