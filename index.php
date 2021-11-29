<?php include('connect.php'); ?>
<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Stock</title>


    <style>
        #btnview:hover {
            background-color: #11b719;
            color: white;
            transition: ease-in-out 0.5s;
        }
    </style>
</head>

<body>
    
    <!-- Slider -->
    <div class="clearfix"></div>
    <section class="slide-banner scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
        <div class="slideshow-container">
            <div class="slideshow-item">
                <div class="bg" data-bg="assets/img/banner-3.jpg"></div>
            </div>
            <div class="slideshow-item">
                <div class="bg" data-bg="assets/img/banner-6.jpg"></div>
            </div>
            <div class="slideshow-item">
                <div class="bg" data-bg="assets/img/banner-5.jpg"></div>
            </div>
            <div class="slideshow-item">
                <div class="bg" data-bg="assets/img/banner-2.jpg"></div>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="hero-section-wrap fl-wrap">
            <div class="container">
                <div class="intro-item fl-wrap">
                    <div class="caption text-center cl-white">
                        <h2>Discover 7412+ Jobs Here</h2>
                        <p>Expolore top rated tours, hotels and restaurants around the world</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End-->
    <!-- info -->
    <div class="clearfix"></div>
    <section class="how-it-works animated slideInRight">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Working Process</p>

                        <h2>How It <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-1.png" class="img-responsive" alt="" /><span class="process-num">01</span></span>
                        <h4>Create An Account</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-2.png" class="img-responsive" alt="" /><span class="process-num">02</span></span>
                        <h4>Search Jobs</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-3.png" class="img-responsive" alt="" /><span class="process-num">03</span></span>
                        <h4>Save & Apply</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info end -->
    <!-- Video Bannar -->
    <div class="clearfix"></div>
    <section class="video-sec dark" id="video" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Best For Your Projects</p>

                    <h2>Watch Our <span>video</span></h2>
                </div>
            </div>
            <div class="video-part" ><a href="#" style="width:80px; height:80px;" data-toggle="modal" data-target="#my-video" class="video-btn"><i class="fa fa-play"></i></a></div>
        </div>
    </section>
    <!-- Video Bannar End -->
    <!-- More Info -->
    <!-- <?php
            echo "<pre>", print_r($_SERVER['HTTP_HOST']), "</pre>";
            ?> -->
    <section class="wp-process home-three">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>How We Work</p>

                    <h2>Our Work <span>Process</span></h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-search"></span></div>
                    <div class="work-process-caption">
                        <h4>Search Job</h4>

                        <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                            posuere lacus</p>
                    </div>
                </div>
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-mobile"></span></div>
                    <div class="work-process-caption">
                        <h4>Find Job</h4>

                        <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                            posuere lacus</p>
                    </div>
                </div>
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-profile-male"></span></div>
                    <div class="work-process-caption">
                        <h4>Hire Employee</h4>

                        <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                            posuere lacus</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm"><img src="assets/img/wp-iphone.png" class="img-responsive" alt="" /></div>
            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-layers"></span></div>
                    <div class="work-process-caption">
                        <h4>Start Work</h4>

                        <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                            posuere lacus</p>
                    </div>
                </div>
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-wallet"></span></div>
                    <div class="work-process-caption">
                        <h4>Pay Money</h4>

                        <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                            posuere lacus</p>
                    </div>
                </div>
                <div class="work-process">
                    <div class="work-process-icon"><span class="icon-happy"></span></div>
                    <div class="work-process-caption">
                        <h4>Happy</h4>

                        <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                            posuere lacus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="call-to-act">
        <div class="container-fluid">
            <div class="col-md-6 col-sm-6 no-padd bl-dark">
                <div class="call-to-act-caption">
                    <h2>We Are One Of The Best Sites Out There For Jobs! So SignUp And Join Us! </h2>

                    <h3>Trusted results for Best Job Sites In Usa. Check Visymo Search for the best results! Unlimited Access.
                        100% Secure. Always Facts. Privacy Friendly. The Best Resources. Results & Answers. Types: Best Results,
                        Explore Now, New Sources, Best in Search.
                    </h3>
                    <a href="signup.php" class="btn bat-call-to-act">SignUp</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 no-padd gr-dark">
                <div class="call-to-act-caption">
                    <h2>If Your Already A Member Than Login And Find New Exciting Jobs!</h2>

                    <h3>Trusted results for Best Job Sites In Usa. Check Visymo Search for the best results! Unlimited Access.
                        100% Secure. Always Facts. Privacy Friendly. The Best Resources. Results & Answers. Types: Best Results,
                        Explore Now, New Sources, Best in Search.</h3>
                    <a href="login.php" class="btn bat-call-to-act">LogIn</a>
                </div>
            </div>
        </div>
    </section>
    <!-- More Info End -->
    <div>
        <!-- br -->
        <br>
    </div>
    <div class="heading">
        <div class="row">
            <div class="col-lg-12 text-center animated slideInUp">
                <div class="main-heading">
                    <p>200 New Jobs</p>

                    <h2>New & Random <span>Jobs</span></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Company Detail Start -->
    <div class="box display-flex animated slideInUp" style="margin-top:100px; ">
        <div class="row">
            <div class="col-lg-12">
                <?php
                $query1 = "SELECT job.jobid , job.name, categories.catname as 'catname' , job.desc, job.skill , job.timing, job.date, job.salary, job.location, job.email, job.website,job.phone,job.img
          from job
          INNER JOIN categories ON categories.catid = job.catid ORDER by job.jobid DESC LIMIT 3";
                $result = mysqli_query($con, $query1);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <!-- Job Detail Start -->
                    <!-- Job Detail Start -->
                    <section class="section">
                        <div class="container white-shadow bg-dark">

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

                                <div class="details" id="btndiv" style="margin-top:20px;">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <center> <a href="single.php?jobid=<?php echo $jobid = $data['jobid'] ?>" class="btn-success btn-md" style="padding: 10px; width:12em; border:none; border-radius:2px; border-radius:2px; text-align:center; justify-content:center; align-item:center;">
                                                    More Details>>
                                                </a> </center>
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
                <div class="text-center mb-lg-5" style="margin-bottom:4rem;">
                    <a href="viewjobs.php"><button id="btnview" class="btn-lg btn-muted" style="text-decoration: none; border:none;">View all Jobs>>></button></a>
                    </section>

                </div>
                <!--col main-->
            </div>
            <!--row main-->
        </div>
        <!--BOX-->
        <!-- Company Detail End -->


        <?php include('footer.php') ?>


</body>

</html>