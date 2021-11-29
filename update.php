<?php
include('connect.php');
$id = $_GET['catid'];
$name = $_GET['catname'];
$query1 = "SELECT * FROM categories";
$result = mysqli_query($con, $query1);
$data = mysqli_fetch_assoc($result);
?>
<?php include('header1.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="row" style="margin-left: 20px;">
        <div class="col-sm-2">
            <form method="post">

                <!-- for get data from id in view table -->
                <input type="hidden" name="catid" value="" class="form-control">

                <div class="form-group">
                    <input required="required" type="hidden" placeholder="Enter a number" name="Id" class="form-control" value="<?php echo $id; ?>">

                    Update Name:<input required="required" type="text" placeholder="Enter a Name" name="Name" class="form-control" value="<?php echo $name; ?>">
                </div>

                <input type="submit" name="update" value="Update Category" class="btn btn-primary">


            </form>
        </div>
    </div>
    <?php

    if (isset($_POST['update'])) {
        $updname = $_POST['Name'];
        $updatequery = "UPDATE categories SET `catname` = '$updname' WHERE catid=$id";
        $res1 = mysqli_query($con, $updatequery);

        //header('location:javacript://history.go(-1)');
        if ($res1)

    ?>
        <script>
            window.location.href = 'categories.php'
        </script>

    <?php
    //header('Location: categories.php');
    echo "RECORD UPDATED";
} else {
    echo "Not Updated!";
}
    ?>

    <?php include('footer.php') ?>

</body>

</html>