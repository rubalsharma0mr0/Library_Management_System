<?php

	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$query = "update admins set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]'";
	$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
	alert("Updated successfully..."); 
	window.location.href = "admin_dashboard.php";
</script>