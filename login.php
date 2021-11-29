<?php include('connect.php') ?>
<?php session_start();?>
<!doctype html>
<html lang="en">

<!-- login35:56-->

<head>
    <!-- Basic Page Needs
	================================================== -->
    <title>Job Stock </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">

    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">

</head>

<body class="simple-bg-screen" style="background-image:url(assets/img/banner-10.jpg);">
    <div class="Loader"></div>
    <div class="wrapper">
        <?php // include('header1.php')

        ?>
        <!-- Title Header Start -->
        <section class="login-screen-sec">
            <div class="container">
                <div class="login-screen">
                    <a href="index.php"><img src="assets/img/logo.png" class="img-responsive" alt=""></a>
                    <form method="post" action="login.php">
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <input class="btn btn-login" type="submit" value="LOGIN" name="login" style="border-radius: 20px;">
                        <span>You Have No Account? <a href="signup.php"> Create An Account</a></span>
                        <span><a href="index.php"> Back To HomePage</a></span>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php
    if (isset($_POST['login'])) {


        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
        $res = mysqli_query($con, $sql);
        //echo print_r(mysqli_num_rows($res));

        if (mysqli_num_rows($res) > 0) {

            $data = mysqli_fetch_array($res);
            $userid = $data['userid'];
            $roletype = $data['roletype'];
            $username = $data['name'];

            $_SESSION['name'] = $username;
            $_SESSION['userid'] = $userid;
            $_SESSION['type'] = $roletype;
            if ($roletype == 1) {
                echo "<script>alert('Admin Logged In Successfully!!')</script>";
    ?>
                <script>
                    <?php
                    if ($_SERVER['HTTP_HOST'] == 'localhost') { ?>
                        window.location.href = 'http://localhost/project2/index.php'
                    <?php } else { ?>
                        window.location.href = '/'
                    <?php } ?>
                </script>
            <?php
            } elseif ($roletype > 1) {
                echo "<script>alert('User Logged In Successfully!!')</script>";
            ?>
                <script>
                    <?php
                    if ($_SERVER['HTTP_HOST'] == 'localhost') { ?>
                        window.location.href = 'http://localhost/project2/index.php'
                    <?php } else { ?>
                        window.location.href = '/'
                    <?php } ?>
                </script>
    <?php
            }
        } else {
            echo "<script>alert('Invalid email or password!!')</script>";
        }
    }

    ?>
</body>

<!-- login35:58-->

</html>
<!---->