 <?php
 require('functions.php');
include('admin_menu.php');
?> 

	 <div class="row">
	 	<div class="col-md-4"></div>
	 	<div class="col-md-4">
	 		<form action="" method="post">

	 			<div class="form-group">
	 				<label>Book Name:</label>
	 				<input type="text" name="book_name" class="form-control" required="">	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Book Author:</label>
	 				<select class="form-control" name="book_author" required="">
	 					<option>-Select Author-</option>
							<?php 
							$conn = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($conn,"lms");
							$query = "select author_name from authors";
							$query_run = mysqli_query($conn,$query);
							while($row = mysqli_fetch_assoc($query_run)){
							?>
							<option><?php echo $row['author_name']; ?></option>
							<?php
						}

							?>
	 				</select>	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Book Number:</label>
	 				<input type="text" name="book_no" class="form-control" required="">	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Student ID:</label>
	 				<input type="text" name="student_id" class="form-control" required="">	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Issue Date:</label>
	 				<input type="text" name="issue_date" class="form-control" value="<?php echo date("d-m-yy");  ?>" required="">	 				
	 			</div>
	 				
	 			<button class="btn btn-primary" name="issue_book">Issue Book</button>
	 		</form>
	 	</div>
	 	<div class="col-md-4"></div>	 	
	 </div>
		
	</body>
	</html>

	<?php
	if(isset($_POST['issue_book'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into issued_books values(null,$_POST[book_no],'$_POST[book_name]','$_POST[book_author]',$_POST[student_id],1,'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);
	}
?>