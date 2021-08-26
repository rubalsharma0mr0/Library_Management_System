<?php
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$query = "delete from category where cat_id = $_GET[cid]";
	$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
	alert("Category Deleted...");
	window.location.href = "manage_cat.php";
</script>