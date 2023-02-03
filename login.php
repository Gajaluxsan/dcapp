<?php include('include/header.php');
include('class/config.php');
session_start();
$err="";
$user="";
$pass="";
 ?>

<?php 
if (isset($_POST['login'])) {
$user =$_POST['uname'];
$pass =$_POST['pass'];
if(empty($user)){
  $err="Enter User Name";
}
else if(empty($pass)){
  $err="Enter User Password";
}
else{
  $sql="SELECT `cusid`, `name`, `phone`, `address`, `password` FROM `customer` WHERE `name`='$user' and `password`= '$pass'";
$stmt = mysqli_query($conn, $sql);
if ($stmt->num_rows > 0) {
while ($row=mysqli_fetch_assoc($stmt)) {
  var_dump($row);
$_SESSION['cusid']=$row['cusid'];
$_SESSION['name']=$row['name'];
   header("Location: aflogin.php");

}

}
else{
  $err="Login Failed";
  $user="";
  $pass="";
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
    <input type="text" name="uname" class="form-control" value="<?php echo $user; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" value="<?php echo $pass; ?>" class="form-control" id="exampleInputPassword1">
  </div>
    <div class="mb-1 text-center text-danger"><?php echo $err; ?></div>

  <div class="mb-3 mt-3">
   <button type="submit" class="btn btn-primary btn-lg ms-5" name="login" style="width:30%;">Login</button>
  <button type="reset" class="btn btn-info btn-lg ms-5"  style="width:30%;">Clear</button>
  </div>

</form>
	</div>	
	<div class="col-4"></div>	
</div>
</div>










