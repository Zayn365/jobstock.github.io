<?php session_start();
?>
<!-- CSS==================================================-->
<link rel="stylesheet" href="assets/plugins/css/plugins.css">
<link href="assets/css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
<style>
    /* .navbar:before {
        display: contents !important;
    } */

    /* .container::before {
        display: contents !important;
    } */
    /* .nav.navbar.bootsnav ul.nav>li>a {
        background-color: tomato !important;
    } */

    #menu :hover {
        color: green;
        transition: 9ms ease-in;
    }

    #logout-btn {
        color: #b6c8d6;
        text-align: center;
    }

    #logout-btn:hover {
        color: #07b107 !important;
    }
</style>
<!--header-->
<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav " style="top: 0; display:block; position: relative">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
        <div class="navbar-header"><a class="navbar-brand" href="index.php"><img src="assets/img/logo-new.png" class="logo logo-scrolled" alt=""></a></div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">

                <li class="dropdown megamenu-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
                    <ul class="dropdown-menu megamenu-content" role="menu">
                        <li>
                            <div class="row">
                                <div class="col-menu col-md-3">
                                    <h6 class="title">Main Pages</h6>


                                    <div class="content" id="menu">
                                        <ul class="menu-col">
                                            <?php
                                            if (isset($_SESSION['type'])) {

                                                if ($_SESSION['type'] == 1) {

                                            ?>


                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="categories.php">Categories</a></li>
                                                    <li><a href="jobs.php">Create a Job</a></li>
                                                    <li><a href="viewjobs.php">View Jobs</a></li>
                                                    <li><a href="viewsubmissions.php">View User Applications</a></li>
                                                    <li><a href="viewuser.php">View Users</a></li>

                                                <?php
                                                } elseif ($_SESSION['type'] == 2) {
                                                ?>


                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="viewjobs.php">View Jobs</a></li>
                                                    <li><a href="jobs.php">Create a Job</a></li>
                                                    <li><a href="viewapplication.php">View Applications</a></li>


                                                <?php
                                                }
                                            } else {
                                                ?><li><a href='index.php'>Home</a></li>
                                                <li><a href='signup.php'>Sign up</a></li>
                                                <li><a href='viewjobs.php'>View Jobs</a></li>
                                                <li><a href='login.php'>Login</a></li>


                                            <?php
                                            }
                                            ?>



                                        </ul>
                                    </div>


                                </div>


                            </div>
                        </li>

                    </ul>
                </li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><?php include('searchengine.php') ?></li>
            </ul>
            <?php
            if (isset($_SESSION['type'])) {
                if ($_SESSION['type'] > 0) {
            ?>
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="text-success dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user fa-xl"></i><?php echo $_SESSION['name']; ?>
                            </a>
                            <ul class="dropdown-menu ">
                                <!-- <li> -->
                                <a id='logout-btn' href="logout.php">Log Out</a>
                                <!-- </li> -->


                        </li>
                    </ul>
                    </ul>
                <?php
                }
            } else {
                ?>
                <ul class=" nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="login.php"><i class="fa fa-pencil" aria-hidden="true"></i>LogIn</a></li>
                    <li class="left-br">
                        <a href="signup.php" class="signin">Sign Up Now</a>
                    </li>
                </ul>
            <?php
            }
            ?>
        </div>
    </div>
</nav>