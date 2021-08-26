<?php
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$query = "delete from books where book_no = $_GET[bn]";
	$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
	alert("Book Deleted...");
	window.location.href = "manage_book.php";
</script>