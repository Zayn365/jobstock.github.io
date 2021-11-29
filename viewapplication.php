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

    ?>
    <!-- MAIN BODY -->
    <div class="container" style="margin-top: 160px;">
        <div class=" row">
            <div class="col-lg-12 text-center" style="text-decoration: underline green;">
                <h1>Your Applications</h1>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 160px; margin-bottom:60px; overflow:scroll hidden; display:flex;">

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-bordered text-center">
                    <tr style=" background-color: darkgrey;">
                        <td>Category</td>
                        <td>Job Name</td>
                        <td>Your Name</td>
                        <td>Phone</td>
                        <td>Additional Information</td>
                        <td>CV</td>
                        <td>Date Of Submission</td>
                        <td>Delete Info</td>
                    </tr>
                    <?php
                    if (isset($_SESSION['type'])) {
                        if ($_SESSION['type'] > 0) {

                            $userid = $_SESSION['userid'];
                            $username = $_SESSION['name'];
                            $sql = "SELECT application.appid, job.name, categories.catname AS 'catname', application.appname, application.phone, application.addinfo, application.cv, application.date, user.name AS username 
                        from application 
                        INNER JOIN job on job.jobid = application.jobid 
                        INNER JOIN categories on categories.catid = job.catid 
                        INNER JOIN user on user.userid = application.userid
                        where application.userid = $userid";
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
                                        <td style="width: 100px;"><?php echo $data['catname']; ?></td>
                                        <td style="width: 200px;"><?php echo $data['name']; ?></td>
                                        <td style="width: 100px;"><?php echo $appname; ?></td>
                                        <td><?php echo $data['phone']; ?></td>
                                        <td><?php echo $data['addinfo']; ?></td>
                                        <td style="width: 100px;"><a href="uploadcv/<?php echo $data['cv'];  ?>">View Cv</a></td>
                                        <td><?php echo $data['date']; ?></td>
                                        <td><a href="<?php echo "remove.php?appid=$appid&appname=$appname"; ?>" class="btn-sm btn-danger" role="button">Remove</a></td>
                                    </tr>

                    <?php

                                }
                            }
                        }
                    } else {
                        echo "<script>alert('Only user can access this info please kindly go to the home page!')
                        window.location.href= 'index.php'
                        </script>";
                    }

                    ?>
                </table>
            </div>
        </div>

    </div>

    <!-- MAIN BODY -->
    <?php include('footer.php') ?>
</body>

</html>

</body>

</html>