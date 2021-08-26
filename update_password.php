<?php
session_start();
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$query = "select * from admins email = '$_SESSION[email]'";
	$query_run = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update admins set password = '$_POST['new_password']'";
	}
	?>
	<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "admin_dashboard.php";
</script>
