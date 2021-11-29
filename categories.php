<?php include('connect.php'); ?>
<?php include('header1.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    </style>
</head>

<body>

   
    <?php
    if (isset($_SESSION['type']) == 0) {
        echo "<script>alert('You are not authorized to access this information!!')</script>";
        echo "<script>
        window.location.href = 'index.php'
    </script>";
    } elseif ($_SESSION['type'] == 2) {
        echo "<script>alert('You are not authorized to access this information!!')</script>";
        echo "<script>
        window.location.href = 'index.php'
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
    <!--form -->
    <div class="container">



        <div class="single">
            <h1>Add Categories</h1>
            <div class="col-md-4">
                <form action="categories.php" method="post">

                    <!-- for get data from id in view table -->
                    <input type="hidden" name="catid" value="" class="form-control">

                    <div class="form-group">
                        <input type="text" placeholder="enter a name" name="Name" value="" class="form-control">
                    </div>

                    <input type="submit" name="addcat" value="Add Category" class="btn btn-primary">
                    <input type="submit" name="updatecat" value="Update Category" class="btn btn-info">

                </form>


            </div>


        </div>
        <div class=col-lg-8>
            <table class='table center'>
                <tr>
                    <!--<td>ID</td>-->
                    <td>Name</td>
                    <td style="padding-left:20px;">Update</td>
                    <td>Delete</td>
                </tr>



                <?php
                $query1 = "SELECT * FROM categories";
                $result = mysqli_query($con, $query1);
                if (mysqli_num_rows($result) > 0) {

                    while ($data = mysqli_fetch_array($result)) {
                        // echo "<pre>" . print_r($row[]) . "</pre>";
                        //echo 'My Name is'. $row[1] . 'My id is'.$row[0] ."<br>";
                        //$update = ;
                        $id = $data[0];
                        $name = $data[1];

                ?>

                        <tr>
                            <!--<td><?php //echo $id; ?></td>-->
                            <td><?php echo $name; ?></td>
                            <td style="padding-left:20px;"><a href="<?php echo "update.php?catid=$id&catname=$name" ?> " class="btn-sm btn-primary">Edit</a></td>
                            <td> <a href="<?php echo "delete.php?catid=$id&catname=$name" ?>" class="btn-sm btn-danger">Remove</a></td>
                        </tr>
                <?php
                    }
                }

                if (isset($_POST['addcat'])) {
                    $catname = $_POST['Name'];
                    $query = "INSERT INTO `categories`(`catname`) VALUES ('$catname')";
                    if (mysqli_query($con, $query)) {
                        //echo "<script> alert('Value has been assigned!')</script>";
                    } else {
                        echo "<script> alert('Value has not been assigned!')</script>";
                    }
                }
                //print_r ($query);
                ?>
            </table>


        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
    <?php include('footer.php') ?>
    <!--PHP--->



</body>

</html>