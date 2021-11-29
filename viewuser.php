<?php include('connect.php'); ?>
<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <?php
    if ($_SESSION['type'] == 1) {
    ?>
        <div class="heading2">
            <div class="row">
                <div class="col-lg-12">
                    <mark style="text-decoration: underline;">
                        <h1 class="heading text-center underline">Current <span class="text-success">USERS</span></h1>
                    </mark>
                </div>
            </div>
        </div>
        <!-- MAIN BODY -->
        <div class="container" style="margin-top: 10px; margin-bottom:60px;">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover table-bordered">
                        <tr style="background-color: darkgrey;">
                            <td>Name
                                <sup style="color:darkred;">(New To Old)</sup>
                            </td>
                            <td>Email</td>
                            <td>Password</td>
                        </tr>
                        <?php
                        $sql = "SELECT * FROM `user` where roletype = '2'  
                                ORDER BY user.userid DESC";
                        $query = mysqli_query($con, $sql);
                        if (mysqli_num_rows($query)) {
                            while ($data = mysqli_fetch_assoc($query)) {
                                $data['userid'];
                                $data['name'];
                                $data['email'];
                                $data['password'];
                                $data['roletype'];
                        ?>

                                <tr>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['password']; ?></td>
                                </tr>
                    <?php

                            }
                        }
                    } else {
                        echo "<script>alert('Only admin can access this info please kindly go to the home page!')
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