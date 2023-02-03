<?php 
session_start();
if (!isset($_SESSION['cusid'])) {
   header("Location: login.php");
}
 ?>
<head>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assest/style.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
  <nav>
  	<div class="headder">
  		<div class="logo">
  			<h3 style="text-transform: uppercase;"><a href="aflogin.php"><?php echo $_SESSION['name']; ?></a></h3>
  		</div>
  		<div class="menu">
  			<ul type="none">
  				<li><a href="logout.php?logoutid=<?php echo $_SESSION['cusid']; ?>">Logout</a></li>
  				<li><a href="aflogin.php">View's</a></li>  				
  				<li><a href="app.php">Appointment</a></li>
  			</ul>
  		</div>
  	</div>
  </nav>
<style >
	.logo h3 a{
		
		text-decoration: none;
		color: black;
		font-size: 30px;
		font-weight: 700;
	}
	.headder {
		width: 100%;
		margin: 20px;
		display: flex;
		margin-top: 60px;
	}
	.headder .logo{
		margin-left: 102px;
		width: 30%;
	}
	.headder .menu{
		height: 45px;
		width: 60%;
	}
	.headder ul li a:hover{
		border: none;
		border-bottom: solid brown 2px;
	}
	.headder ul li a{
text-decoration: none;
	}
	.headder ul li a{
		cursor: pointer;
		float: right;
		color: burlywood;
		margin-right: 40px;
		font-size: 20px;
		font-weight: 400;
		font-family: monospace;
	}
</style>