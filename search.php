<?php include('connect.php'); ?>
<?php include('header1.php'); ?>
 <br>
 <br>
 <br>
 <br>
 <br>


<?php
  if (isset($_POST['btnsearch'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);
    $sql = "SELECT job.jobid , job.name, categories.catname as 'catname' , job.desc, job.skill , job.timing, job.date, job.salary, job.location, job.email, job.website,job.phone,job.img
          from job
          INNER JOIN categories ON categories.catid = job.catid
          WHERE job.name LIKE '%$search%' OR job.salary LIKE '%$search%' OR job.skill LIKE '%$search%' OR job.desc LIKE '%$search%'  OR catname LIKE '%$search%'";
    $query = mysqli_query($con, $sql);
    $queryResult = mysqli_num_rows($query);
 ?> <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1 class="text-center"> Search Results For <?php echo " ' " . "$search" . " ' "; ?></h1>
       </div>
     </div>
   </div>
   <br>
   <br>
   <br>
   <?php

    if ($queryResult > 0) {
      while ($data = mysqli_fetch_array($query)) {
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
             <div class="details" id="btndiv">
               <div class="row">
                 <div class="col-lg-12">
                   <center><a href="single.php?jobid=<?php echo $jobid = $data['jobid'] ?>" id="btn" class="btn-success btn-md" style="padding: 10px; width:12em; border:none; border-radius:2px; border-radius:2px; text-align:center; justify-content:center; align-item:center;">
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
      }
    } else {
      echo "<h1 class='text-center text-success'>Sorry there are no Results!!</h1><br><br>";
    }
  }
?>
<?php include('footer.php') ?>



 </body>

 </html>