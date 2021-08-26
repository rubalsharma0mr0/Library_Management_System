<?php
	require('functions.php');
	include('admin_menu.php');
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$cat_name = "";
	$cat_id = "";	
	$query = "select * from category where cat_id = $_GET[cid]";
	$query_run = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$cat_name = $row['cat_name'];
		$cat_id = $row['cat_id'];
		}
?>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				
				<div class="form-group">
					<label>Category Name:</label>
					<input type="text" name="cat_name" value="<?php echo $cat_name;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Category ID:</label>
					<input type="text" name="cat_id" value="<?php echo $cat_id;?>" class="form-control" required="">
				</div>
				
				<button class="btn btn-primary" name="update">Update Category</button>

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
		$query = "update category set cat_name = '$_POST[cat_name]',cat_id=$_POST[cat_id] where cat_id = $_GET[cid]";
		$query_run = mysqli_query($conn,$query);
		header("location:manage_cat.php");
	}
?>