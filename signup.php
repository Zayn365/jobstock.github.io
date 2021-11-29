<?php include('connect.php'); ?>
<?php include('header1.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Now</title>

</head>

<body>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Title Header Start -->
    <section class="login-plane-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create An Account</h3>
                        </div>
                        <div class="panel-body">
                            <img src="assets/img/logo.png" class="img-responsive" />
                            <form method="post" action="signup.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="name" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <div class="form-group">
                                        <input class="btn btn-login" name="signup" type="submit" value="Signup">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST["signup"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (mysqli_query($con, "INSERT INTO `user`(`name`, `email`, `password`, `roletype`) VALUES ('$name','$email','$password','2')")) {
            echo "<script>alert('You have Registered successfully!')</script>";
    ?>
            <script>
                window.location.href = 'http://localhost/project2/login.php'
            </script>
    <?php
        } else {
            echo "<script>alert('You have not Registered successfully!')</script>";
        }
    }

    ?>
    <?php include('footer.php') ?>



</body>

</html>