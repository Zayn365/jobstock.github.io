<?php include('connect.php'); ?>
<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  
    <?php
    if (isset($_SESSION['type'])) {
        if ($_SESSION['type'] > 0) {
    ?>
            <!--BREAK-->
            <div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="container">
                <div class="heading" style="margin-bottom: 50px;">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1>Job Application Form:</h1>
                        </div>
                    </div>
                </div>

                <div class="row" style="display:flex; margin:auto;">
                    <div class="col-lg-5">

                        <form action="apply.php" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">


                            <div class="form-group"><i class="fa fa-user large">&nbsp;<b>Full Name:</b></i>
                                <input type="text" placeholder="Name" name="name" value="" class="form-control">
                            </div>
                            <div class="form-group"><i class="fa fa-phone large">&nbsp;<b>Your Phone#:</b></i>
                                <input type="text" placeholder="Name" name="phone" value="" class="form-control">
                            </div>
                            <div class="form-group"><i class="fa fa-comment large">&nbsp;<b>Additional Information:</b></i>
                                <textarea type="textarea" placeholder="Additional Information" name="addinfo" value="" class="form-control"></textarea>
                            </div>
                            <div class="form-group"><i class="fa fa-phone large">&nbsp;<b>Upload your Curriculum Vitae(CV):</b></i>
                                <input type="file" name="cv" value="" class="form-control">
                            </div>
                            <input type="Submit" name="btnsub" value="submit" class=" btn btn-success">
                        </form>
                    </div><!-- col end-->
                </div><!-- row end-->
            </div><!-- container end-->

            <?php include('footer.php') ?>

    <?php

            if (isset($_POST['btnsub'])) {
                $jobid = $_SESSION['jobid'];
                $userid = $_SESSION['userid'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $appinfo = $_POST['addinfo'];

                $file = $_FILES['cv']['name'];
                $tmp = $_FILES['cv']['tmp_name'];

                $date = date('d/m/y');

                move_uploaded_file($tmp, "/Applications/MAMP/htdocs/project2/uploadcv/$file");

                if (mysqli_query($con, "INSERT INTO `application`(`userid`, `jobid`, `appname`, `phone`, `addinfo`, `cv`, `date`)  VALUES ('$userid','$jobid','$name','$phone','$appinfo','$file','$date')")) {
                    echo "<script>alert('Your Application has been Submitted Successfully')</script>";
                    echo "<script>window.location.href = 'viewapplication.php' </script>";
                } else {
                    echo "<script>alert('Your Application has not been Submitted Successfully')</script>";
                }
            }
        }
    }

    ?>
</body>

</html>