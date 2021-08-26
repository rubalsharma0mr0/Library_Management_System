<?php
include('menu.php');
	session_start();
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address'];
	}
?>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="update.php" method="post">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name;?>" name="name">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email;?>" name="email">
				</div>
				<div class="form-group">
					<label>Mobile:</label>
					<input type="text" class="form-control" value="<?php echo $mobile;?>" name="mobile">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<textarea rows="3" cols="40" name="address" class="form-control"><?php echo $address;?></textarea>
				</div>
				<button  type="submit" name="update" class="btn btn-primary">Update</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>