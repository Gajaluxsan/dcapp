<?php 
include('include/afheader.php');
include('class/config.php');

 ?>


<div class="container-sm mt-5">
    <div class="row mt-5">
        <?php 
        $cuid=$_SESSION['cusid'];
         $sql="SELECT c.name, a.problem,a.date,a.time FROM `appoint` a INNER JOIN customer c WHERE a.cusid =c.cusid and a.cusid='$cuid' order by a.date";
$stmt = mysqli_query($conn, $sql);
if ($stmt->num_rows > 0) {
while ($row=mysqli_fetch_assoc($stmt)) {
          echo ' <div class="col-2 mt-2">
           <div class="card text-center" style="width: 13rem;">
          <div class="card-header  fw-bold fs-5" style="text-transform: uppercase;">'.$row['problem'].'</div>
          <div class="card-body">
              <h5 class="card-title">'.$row['date'].'</h5>
              <p class="card-text">'.$row['time'].'</p>
              <a href="#" class="btn btn-primary  mt-2 mb-4 fs-5" style="width:100%;">View</a>
          </div>
      </div>
      </div>';
         }}
           ?>
        <div class="col-2 mt-2">

            <div class="text-center mt-2 mx-5">
              <button class="btn btn-success mt-5 btn-lg"><a href="app.php" style="text-decoration: none; color: white;"><i class="fa fa-3x fa-solid fa-user-plus"></i><br><span>Add</span></a></button>
            </div>
        </div>

    </div>
</div>










<?php
//  include('include/booter.php'); 
?>