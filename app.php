<?php include('include/afheader.php');
include('class/config.php');
 ?>


<div class="container-sm">
<div class="row">
	<div class="col-4"></div>	
	<div class="col-4 loginform" >
<?php 
$err= "";
$srr="";
$select="";
$ddate="";
$ttime="";
if(isset($_POST['Application'])) {
$select= $_POST['Problem'];
$ddate= $_POST['adate'];
$ttime= $_POST['atime'];
if(empty($select) && $select == ""){
  $err="Select You Problem";
}
elseif (empty($ddate)) {
 $err="Select Date";
}
elseif (empty($ttime)) {
  $err="Select Time";
}
else{
  $cid=$_SESSION['cusid'];
   $sql="INSERT INTO `appoint`( `cusid`, `problem`, `date`, `time`) VALUES ('$cid','$select','$ddate','$ttime')";
$stmt = mysqli_query($conn, $sql);
if ($stmt) {
   echo "<script>Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your Appointment has been saved',
  showConfirmButton: false,
  timer: 1000
})</script>";
}
}

}



 ?>





		<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select Your Problem</label>
    <select class="form-control" name="Problem">
      <option selected hidden  value="">Select_Problem</option>
      <option value="eye">Eye Problem</option>
      <option value="ear">Ear Problem</option>
      <option value="lung">lungs Problem</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date</label>
    <input type="date" id="datefield"value="<?php echo $ddate; ?>"  class="form-control" name="adate" id="exampleInputPassword1">
  </div>
   <div class="mb-3"> 
    <label for="exampleInputPassword1" class="form-label">Time</label>
    <input type="time" value="<?php echo $ttime; ?>" class="form-control" name="atime" min="09:00" max="16:00" id="exampleInputPassword1">
  </div>
    <div class=" text-center fw-bold fs-4 text-danger"><?php echo $err; ?></div>
    
  <div class="mb-3 mt-3">
  <button type="submit" class="btn btn-primary btn-lg mt-2" name="Application" style="width:100%;">Appointment</button>
  	
  </div>
</form>
	</div>	
	<div class="col-4"></div>	
</div>
</div>



<script type="text/javascript">
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("datefield").setAttribute("min", today);
</script>







