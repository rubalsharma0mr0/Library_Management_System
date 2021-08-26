 <?php
 require('functions.php');
include('admin_menu.php');
?> 

	 <div class="row">
	 	<div class="col-md-4"></div>
	 	<div class="col-md-4">
	 		<form action="" method="post">

	 			<div class="form-group">
	 				<label>Author Name:</label>
	 				<input type="text" name="author_name" class="form-control" required="">	 				
	 			</div>

	 				 			
	 			<button class="btn btn-primary" name="add_author">Add Author</button>
	 		</form>
	 	</div>
	 	<div class="col-md-4"></div>	 	
	 </div>
	
	</body>
	</html>

	<?php
	if(isset($_POST['add_author'])){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		$query = "insert into author values('','$_POST[author_name]')";
		$query_run = mysqli_query($conn,$query);
	}
?>