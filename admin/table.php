<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">
	.table td input{
		border: solid lightgray 2px;
		padding: 8px 15px;
		border-radius: 5px;
		border: none;
	}
	.table td{
		width: 250px!important;
	}
	.table td input{
	}
</style>

<table class="table">
	<tr>
		<th>
			appid
		</th>
		<th>
			cusid
		</th>
		<th>
			problem
		</th>
		<th>
			date
		</th>
		<th>
			time
		</th>
		<th>
			Edit
		</th>
		<th>
			Delete
		</th>

	</tr>







<?php include '../class/config.php'; 

$sql="SELECT `appid`, `cusid`, `problem`, `date`, `time` FROM `appoint`";
$stmt = mysqli_query($conn, $sql);
if ($stmt->num_rows > 0) {
while ($row=mysqli_fetch_assoc($stmt)) {
?>
<tr>
	<td><input class="<?php echo $row['appid']; ?>" type="text" name="" disabled value="<?php $apid =$row['appid']; echo $apid; ?>"></td>
	<td><input class="<?php echo $row['appid']; ?>" type="text" name="" disabled value="<?php echo $row['cusid']; ?>"></td>
	<td><input class="<?php echo $row['appid']; ?>" type="text" name="" disabled value="<?php echo $row['problem']; ?>"></td>
	<td><input class="<?php echo $row['appid']; ?>" type="date" name="" disabled value="<?php echo $row['date']; ?>"></td>
	<td><input class="<?php echo $row['appid']; ?>" type="time" name="" disabled value="<?php echo $row['time']; ?>"></td>

	<td><input type="submit" id="<?php echo $apid; ?>" onclick="changer(<?php echo $apid ?>)" class="btn btn-primary" value="Edit"></td>
	<td><input type="submit" id="deleter" class="btn btn-danger" value="Delete"></td>

</tr>

<?php
}}
?>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
	function changer(id) {
		$('#'+id).prop("value", "Save");
		$('#'+id).attr('class', 'btn btn-success '+id );
		$('.'+id).prop( "disabled", false );
		$('.'+id).css({'border':'solid black 1px'});

	}
$(".readyforsave").click(function(){
  clsslist =  $(this).attr("class");
  console.log(clsslist);
});

</script>

</table>