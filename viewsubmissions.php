<?php include('connect.php'); ?>
<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Application</title>
</head>

<body>
    <?php
    if (isset($_SESSION['type'])) {
        if ($_SESSION['type'] == 1) {
    ?>
            <!-- MAIN BODY -->
            <div class="container" style="margin-top: 160px;">
                <div class="row">
                    <div class="col-lg-12 text-center" style="text-decoration: underline green;">
                        <h1>User Applications</h1>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 160px; margin-bottom:60px; overflow:scroll hidden; display:flex;">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover table-bordered text-center">
                            <tr style=" background-color: darkgrey;">
                                <td>Application Id</td>
                                <td>Category</td>
                                <td>Job Name</td>
                                <td>Name of Applicant</td>
                                <td>Phone</td>
                                <td>Additional Information</td>
                                <td>CV</td>
                                <td>Date Of Submission</td>
                                <td>Username</td>
                                <td>Delete Info</td>
                            </tr>
                            <?php


                            $userid = $_SESSION['userid'];
                            $username = $_SESSION['name'];
                            $sql = "SELECT application.appid, job.name, categories.catname AS 'catname', application.appname, application.phone, application.addinfo, application.cv, application.date, user.name AS username 
                        from application 
                        INNER JOIN job on job.jobid = application.jobid 
                        INNER JOIN categories on categories.catid = job.catid 
                        INNER JOIN user on user.userid = application.userid";
                            $query = mysqli_query($con, $sql);
                            if (mysqli_num_rows($query)) {
                                while ($data = mysqli_fetch_assoc($query)) {
                                    $appid = $data['appid'];
                                    $data['name'];
                                    $data['catname'];
                                    $appname = $data['appname'];
                                    $data['phone'];
                                    $data['addinfo'];
                                    $data['cv'];
                                    $data['date'];
                                    $data['username'];


                            ?>

                                    <tr>
                                        <td style="width: 100px;"><?php echo $appid; ?></td>
                                        <td style="width: 100px;"><?php echo $data['catname']; ?></td>
                                        <td style="width: 200px;"><?php echo $data['name']; ?></td>
                                        <td style="width: 100px;"><?php echo $appname; ?></td>
                                        <td><?php echo $data['phone']; ?></td>
                                        <td><?php echo $data['addinfo']; ?></td>
                                        <td style="width: 100px;"><a href="uploadcv/<?php echo $data['cv'];  ?>">View Cv</a></td>
                                        <td><?php echo $data['date']; ?></td>
                                        <td><?php echo $data['username'];; ?></td>
                                        <td><a href="<?php echo "remove.php?appid=$appid&appname=$appname"; ?>" class="btn-sm btn-danger" role="button">Remove</a></td>
                                    </tr>

                            <?php

                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>
    <?php
        }
    } else {
        echo "<script>alert('Only admin can access this info please kindly go to the home page!')
                        window.location.href= 'index.php'
                        </script>";
    }
    ?>

    <!-- MAIN BODY -->
    <?php include('footer.php') ?>
</body>

</html>

</body>

</html>