<?php include('connect.php'); ?>
<?php include('header1.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Job Details</title>
</head>

<body>
   
    <div class="heading">
        <div class="row">
            <div class="col-lg-12 text-center animated slideInUp">

                <h1 style="margin-top:150px; font-family:arial; text-decoration:underline green; ">Job Details</h1>
            </div>
        </div>
    </div>


    <!-- Company Detail Start -->
    <div class="box display-flex animated slideInUp" style="margin-top:100px; ">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $jobid = $_GET['jobid'];
                $query2 = "SELECT job.jobid , job.name, categories.catname as 'catname' , job.desc, job.skill , job.timing, job.date, job.salary, job.location, job.email, job.website,job.phone,job.img
          from job
          INNER JOIN categories ON categories.catid = job.catid 
          WHERE job.jobid = '$jobid'";
                $result = mysqli_query($con, $query2);
                $data = mysqli_fetch_array($result);
                $_SESSION['jobid'] = $jobid;
                ?>
                <!-- Job Detail Start -->
                <!-- Job Detail Start -->
                <section class="section">
                    <div class="container white-shadow bg-dark">

                        <div class="detail-pic">
                            <img src="<?php echo "uploads1/" . $data['img'] ?>" class="img" />
                            <a href="#" class="detail-edit" title=""><i class="fa fa-briefcase" style="cursor:default;"></i></a>
                        </div>
                        <!--PIC DIv-->
                        <div class="detail-status">
                            <span><?php echo $data['date'] ?></span>
                        </div>
                        <!--Detail Div-->


                        <div class="row bottom-mrg top-mrg">
                            <div class="col-md-7 col-sm-7">
                                <div class="detail-desc-caption">
                                    <h4><?php echo $data['name'] ?></h4>
                                    <span class="designation">Category: <?php echo $data['catname']  ?></span>
                                    <p style="max-width: 500px; word-wrap: break-word"><b style="text-decoration:underline green;">Description:</b><br><?php echo $data['desc'] ?></p>
                                    <ul>
                                        <li><i class="fa fa-briefcase"></i><span>Full time</span></li>
                                        <li><i class="fa fa-flask"></i><span><?php echo $data['skill']; ?></span></li>
                                    </ul>
                                </div>
                                <!--Coloumn Div-->
                            </div>
                            <!--Row Div-->

                            <div class="col-md-5 col-sm-5">
                                <div class="get-touch" style="text-align:justify;">
                                    <h4>Get in Touch</h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i><span style="max-width: 270px; word-wrap: break-word"><?php echo $data['location']; ?></span></li>
                                        <li><i class="fa fa-envelope"></i><span> <?php echo $data['email']; ?></span></li>
                                        <li><a href="<?php echo $data['website'];?>"><i class="fa fa-globe"></i><span> <?php echo $data['website']; ?></span></a></li>
                                        <li><i class="fa fa-phone"></i><span><?php echo $data['phone']; ?></span></li>
                                        <li><i class="fa fa-money"></i><span>$<?php echo $data['salary']; ?></span></li>
                                    </ul>
                                </div>
                                <!--get touch-->
                            </div>
                            <!--get touch Col-->
                            <!--BTN Details-->
                            <div class="details" style="margin-left:20px;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php
                                        if (isset($_SESSION['type'])) {
                                            if ($_SESSION['type'] == 1 || $_SESSION['type'] == 2) {
                                        ?>
                                                <center><a href="apply.php"><button class="btn-success btn-md" style="padding:5px; width:12em; border:none; border-radius:2px; text-align:center;">Apply for job</button></a>
                                                <?php
                                            }
                                        } else {
                                                ?>
                                                <center>
                                                    <a class="btn btn-success" href="login.php">Login</a>
                                                    <a class="btn btn-success" href="signup.php">Signup</a>
                                                </center>
                                            <?php
                                            echo "<br><br><br>";
                                            echo "<center class='text-success'>" . "You have to Login to apply for the Job!<br> If you don't have an account please Signup!!" . "</center>";
                                        }
                                            ?>
                                    </div>
                                    </center>
                                    <!--BTN Details end-->
                                </div>
                </section>
                <!-- Job Detail End -->
                <!-- Job Detail End -->

                <?php

                ?>


                <?php include('footer.php') ?>



</body>

</html>