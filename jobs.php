<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Stock</title>
</head>

<body>
    <?php include('connect.php') ?>
    
    <?php
    if (isset($_SESSION['type']) == 0) {

        echo "<script>
        window.location.href = 'login.php'
    </script>";
    }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="sub-section">
            <br>
        </div>
        <div class="heading">
            <h1>Create a Job:</h1>
        </div>
        <br>
        <br>
        <!-- Form for JOBS -->
        <div class="row">
            <div class="col-lg-5">

                <form action="jobs.php" method="post" enctype="multipart/form-data">

                    <!--viewjob form -->
                    <input type="hidden" name="catid" value="" class="form-control">
                    <div class="form-group"><i class="fa fa-user large">&nbsp;<b>Name of the Job:</b></i>
                        <input type="text" placeholder="Name" name="name1" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <i class="fa  fa-commenting">&nbsp;<b>Description:</b></i> <textarea placeholder="Description" name="desc" value="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-black-tie">&nbsp;<b>Skill:</b></i> <input placeholder="Skill" name="skill" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-hourglass-half">&nbsp;<b>Timing:</b></i> <input type="text" placeholder="timing" name="time" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <i class="fa fa fa-dollar">&nbsp;<b>Salary:</b></i> <input type="number" placeholder="Salary" name="salary" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <i class="fa  fa-location-arrow">&nbsp;<b>Location:</b></i><textarea placeholder="Location" name="location" value="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-check">&nbsp;<b>CategoryID:</b></i>
                        <select name="catid" class="form-control" value="">
                            <?php
                            $sql = "Select * from categories";
                            $query = mysqli_query($con, $sql);
                            if (mysqli_num_rows($query) > 0) {
                                while ($row = mysqli_fetch_array($query)) {
                                    $row[0];
                                    $row[1];
                            ?>
                                    <option value="<?php echo $row[0]; ?>">
                                        <?php echo $row[1]; ?> </option>
                                <?php
                                }
                            } else {
                                ?>
                                <option>The Value has not been added!!</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-envelope">&nbsp;<b>Email:</b></i> <input placeholder="Email" name="email" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-url">&nbsp;<b>Website:</b></i> <input placeholder="Website" name="website" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-phone">&nbsp;<b>Phone:</b></i> <input placeholder="Phone Number" name="phone" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <i class="fa fa-photo">&nbsp;<b>Image:</b></i><input type="file" name="filename">
                    </div>
                    <input type="submit" name="addjob" value="Add Job" class="btn btn-primary">
                    <!--<input type="submit" name="updatecat" value="Update Job" class="btn btn-info">-->

                </form>
            </div>


        </div>
    </div>
    <br>
    <br>
    <br>
    <?php

    $query1 = "SELECT job.jobid , job.name, categories.catname as 'catname' , job.desc, job.skill , job.timing, job.date, job.salary, job.location, job.email, job.website,job.phone,job.img 
                    from job INNER JOIN categories ON categories.catid = job.catid ORDER by job.jobid DESC;";
    $result = mysqli_query($con, $query1);
    if ($_SESSION['type'] == 2) {
    } elseif (mysqli_num_rows($result) > 0) {
    ?>
        <div class="table wrap" style="display:flex; overflow:scroll;">
            <!-- table div (main)-->

            <div class=" row">
                <div class="col-lg-12 box" style="justify-content:center">
                    <br>
                    <br>
                    <br>

                    <table class="table table table-hover table-bordered text-center align-center table-striped">
                        <tr style="background-color: darkgrey;">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Categories</td>
                            <td>Description</td>
                            <td>Skills</td>
                            <td>Timing</td>
                            <td>Date</td>
                            <td>Salary</td>
                            <td>Location</td>
                            <td>Email</td>
                            <td>Website</td>
                            <td>Phone</td>
                            <td>Image</td>



                        </tr>
                        <?php

                        //echo "<pre>".print_r($target_file)."</pre>";




                        //echo "<pre>". print_r(mysqli_fetch_array($result))."</pre";
                        while ($data = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?= $data['jobid']; ?></td>
                                <td><?= $data['name']; ?></td>
                                <td><?= $data['catname']; ?></td>
                                <td style="max-width: 200px; word-wrap: break-word">
                                    <?= $data['desc']; ?>
                                </td>
                                <td><?= $data['skill']; ?></td>
                                <td><?= $data['timing']; ?></td>
                                <td><?= $data['date']; ?></td>
                                <td><?= $data['salary']; ?></td>
                                <td style="max-width: 200px; word-wrap: break-word">
                                    <?= $data['location']; ?>
                                </td>
                                <td><?= $data['email']; ?></td>
                                <td><a href="<?php echo $data['website'];?>"><?= $data['website']; ?></a></td>
                                <td><?= $data['phone']; ?></td>
                                <td><?= $data['img']; ?></td>

                            </tr>
                    <?php

                        }
                    }
                    ?>
                    </table>
                </div>
            </div>
        </div><!-- table div (main) END-->
        <!-- PHP FOR THE TABLE--> <?php

                                    if (isset($_POST['addjob'])) {
                                        $temp_dir = "/Applications/MAMP/htdocs/project2/uploads1/";
                                        $target_file = basename($_FILES["filename"]["name"]);
                                        //$targetFilePath = $temp_dir . $target_file;
                                        $imgfiletype = strtolower(pathinfo($temp_dir, PATHINFO_EXTENSION));

                                        if (!empty($_FILES["filename"]["name"])) {
                                            // Allow certain file formats
                                            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                                            // echo "<pre>".print_r($allowTypes) ."</pre>". " ALLOW FILES ";
                                            // echo "<pre>".print_r($target_file) ."</pre>". " TARGET";
                                            if (move_uploaded_file($_FILES["filename"]["tmp_name"], 'uploads1/' . $_FILES['filename']['name'])) {
                                                // Insert image file name into database
                                                $insert = "INSERT into job ('img') VALUES ('$target_file')";
                                            }
                                        }

                                        $name1 = $_POST['name1'];
                                        $desc = $_POST['desc'];
                                        $skill = $_POST['skill'];
                                        $timing = $_POST['time'];
                                        $date = date('d/m/y');
                                        $salary = $_POST['salary'];
                                        $location = $_POST['location'];
                                        $catid = $_POST['catid'];
                                        $email = $_POST['email'];
                                        $website = $_POST['website'];
                                        $phone = $_POST['phone'];
                                        $imgname = $target_file;

                                        //echo "<pre>".print_r($target_file)."</pre>";
                                        //inserting the query !!!!!!
                                        if (mysqli_query($con, "INSERT INTO `job`(`name`, `desc`, `skill`, `timing`, `date`, `salary`, `location`, `catid`, `email`, `website`, `phone` ,`img`)
     VALUES ('$name1','$desc','$skill','$timing','$date','$salary','$location','$catid','$email','$website','$phone','$imgname')") == 1) {
                                            echo "<script>alert('DATA HAS BEEN RECORDED')</script>
                                            <script>
                                            window.location.href='index.php';
                                            </script>";
                                        } else {
                                            echo "<script>alert('DATA HAS NOT BEEN RECORDED')</script>
                                            <script>
                                            window.location.href='jobs.php';
                                            </script>";;
                                        }
                                    }
                                    
                                    ?>





        <br>
        <br>
        <?php include('footer.php') ?>



</body>

</html>