<?php 
include('include/header.php');
include ('class/config.php');


?>


<?php 
$err="";
$uname="";
$phone="";
$add="";
$pass="";
$repass="";

if(isset($_POST['reg'])) {
$uname= $_POST['uname'];
$phone= $_POST['phone'];
$add= $_POST['address'];
$pass= $_POST['pass'];
$repass= $_POST['repass'];

if(empty($uname)){
  $err="Enter The User name";
}
elseif (empty($phone) || !(strlen($phone) == 10) || !is_numeric($phone)) {
  $err="Enter Valid The Phone No";
}
elseif (empty($add)){
  $err="Enter The Address";
}
elseif (empty($pass) || !(strlen($pass) >= 8)){
  $err ="Enter Valid password";
}
elseif (empty($repass) || !(strlen($pass) >= 8)){
 $err="Enter Valid Reconform password";
}
elseif (!($pass == $repass)){
  $err="Password Not match";
}
else{
  $sql="INSERT INTO `customer`( `name`, `phone`, `address`, `password`) VALUES ('$uname','$phone','$add','$pass')";
$stmt = mysqli_query($conn, $sql);
if ($stmt) {
   header("Location: login.php");
}
else{
$err="Login Falid";  
}
}
}


 ?>



<div class="container-sm">
<div class="row">
	<div class="col-4"></div>	
	<div class="col-4 loginform" >
		<form method="post"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User_Name</label>
    <input type="text" name="uname" value="<?php echo $uname; ?>" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone No</label>
    <input type="text" name="phone" maxlength="10" value="<?php echo $phone; ?>" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="address" value="<?php echo $add; ?>" class="form-control" id="exampleInputPassword1" >
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  maxlength="10" value="<?php echo $pass; ?>" class="form-control" id="exampleInputPassword1" >
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm-Password</label>
    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="repass" maxlength="10" value="<?php echo $repass; ?>" class="form-control" id="exampleInputPassword1" >
  </div>
    <div class="mb-1 text-center text-danger"><?php echo $err; ?></div>
  <div class="mb-3 mt-3">
  <button type="submit" class="btn btn-primary btn-lg ms-5" name="reg" style="width:30%;">Register</button>
  <button type="reset" class="btn btn-warning text-white btn-lg ms-5"  style="width:30%;">Clear</button>
  	
  </div>
</form>
	</div>	
	<div class="col-4"></div>	
</div>
</div>











