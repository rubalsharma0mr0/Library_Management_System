<?php
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$query = "delete from authors where author_id = $_GET[aid]";
	$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
	alert("Author Deleted...");
	window.location.href = "manage_author.php";
</script>