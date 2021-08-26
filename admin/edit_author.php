<?php
	require('functions.php');
	include('admin_menu.php');
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$author_name = "";
	$author_id = "";	
	$query = "select * from authors where author_id = $_GET[aid]";
	$query_run = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$author_name = $row['author_name'];
		$author_id = $row['author_id'];
		}
?>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				
				<div class="form-group">
					<label>Author Name:</label>
					<input type="text" name="author_name" value="<?php echo $author_name;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Author ID:</label>
					<input type="text" name="author_id" value="<?php echo $author_id;?>" class="form-control" required="">
				</div>
				
				<button class="btn btn-primary" name="update">Update Book</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['update'])){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		$query = "update authors set author_name = '$_POST[author_name]',author_id=$_POST[author_id] where author_id = $_GET[aid]";
		$query_run = mysqli_query($conn,$query);
		header("location:manage_author.php");
	}
?>