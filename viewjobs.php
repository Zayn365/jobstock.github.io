<?php include('connect.php'); ?>
<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>View Jobs</title>
</head>

<body>
  
    <!-- Title Header Start -->
    <section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <h1>Browse Jobs</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- Company Detail Start -->
    <div class="box display-flex animated slideInUp" style="margin-top:100px; ">
        <div class="row">
            <div class="col-lg-12">
                <?php $query1 = "SELECT job.jobid , job.name, categories.catname as 'catname' , job.desc, job.skill , job.timing, job.date, job.salary, job.location, job.email, job.website,job.phone,job.img
          from job
          INNER JOIN categories ON categories.catid = job.catid ORDER by job.jobid DESC";
                $result = mysqli_query($con, $query1);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <!-- Job Detail Start -->
                    <!-- Job Detail Start -->
                    <section class="section">
                        <div class="container white-shadow">

                            <div class="detail-pic">
                                <img src="<?php echo "uploads1/" . $data['img'] ?>" class="img" />
                                <a href="#" class="detail-edit" title="edit" style="cursor:default"><i class="fa fa-briefcase"></i></a>
                            </div>
                            <!--PIC DIv-->
                            <div class="detail-status">
                                <span><?php echo $data['date'] ?></span>
                            </div>
                            <!--Detail Div-->


                            <div class="row bottom-mrg top-mrg" style="text-align: center;">
                                <div class="col-md-12 col-sm-12">
                                    <div class="detail-desc-caption">
                                        <h4><?php echo $data['name'] ?></h4>
                                        <span class="designation">Category: <?php echo $data['catname']  ?></span>
                                        <center>
                                            <p class="text-wrap" style="max-width:400px; word-wrap: break-word;"><b style="text-decoration:underline green;">Description:</b><br><?php echo $data['desc']; ?></p>
                                        </center>
                                        <ul>
                                            <li><i class="fa fa-briefcase"></i><span>Full time</span></li>
                                            <li><i class="fa fa-flask"></i><span><?php echo $data['skill']; ?></span></li>
                                        </ul>
                                    </div>
                                    <!--Coloumn Div-->
                                </div>
                                <!--Row Div-->

                                <!--BTN Details-->
                                <div class="details" id="btndiv">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center><a href="single.php?jobid=<?php echo $jobid = $data['jobid'] ?>" class="btn-success btn-md" style="padding: 10px; width:12em; border:none; border-radius:2px; border-radius:2px; text-align:center; justify-content:center; align-item:center;">
                                                    More Details>>
                                                </a></center>
                                        </div>
                                        <!--BTN Details end-->


                                    </div>
                                </div>
                            </div>
                    </section>
                    <!-- Job Detail End -->
                    <!-- Job Detail End -->

                <?php
                };
                ?>

                <?php include('footer.php') ?>



</body>

</html>