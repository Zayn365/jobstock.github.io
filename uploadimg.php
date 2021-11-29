<?php
include ('connect.php');
$statusMsg = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uploadimg.php" method="post" enctype="multipart/form-data">
       <input type="file" name="filename">
       <input type="submit" name="btnupload" value="Upload">
    </form>

    <?php
     $temp_dir = "/Applications/MAMP/htdocs/project2/uploads1";
     $target_file= basename($_FILES["filename"]["name"]);
     $targetFilePath = $temp_dir . $target_file;
     $imgfiletype = strtolower(pathinfo( $targetFilePath,PATHINFO_EXTENSION));
     echo "<pre>".print_r($target_file)."</pre>";
    
     
if(!empty($_FILES["filename"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($target_file, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["filename"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into job ('img') VALUES ('$target_file')");
            if($insert){
                $statusMsg = "The file ".$target_file. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF  files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
    
    
</body>
</html>