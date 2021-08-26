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
	 				<label>Book Author ID:</label>
	 				<input type="text" name="book_author" class="form-control" required="">	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Book Category ID:</label>
	 				<input type="text" name="book_cat" class="form-control" required="">	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Book Number:</label>
	 				<input type="text" name="book_no" class="form-control" required="">	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Book Price:</label>
	 				<input type="text" name="book_price" class="form-control" required="">	 				
	 			</div>

	 			<div class="form-group">
	 				<label>Upload Book:</label>
	 				<input type="file" name="fileToUpload" class="form-control" required="">	 				
	 			</div>
	 			
	 			<button class="btn btn-primary" name="add_book">Add Book</button>
	 		</form>
	 	</div>
	 	<div class="col-md-4"></div>	 	
	 </div>
 
	</body>
	</html>

	<?php
	if(isset($_POST['add_book'])){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		
		$query = "insert into books values(
		null,
		'$_POST[book_name]',
		'$_POST[book_author]',
		'$_POST[book_cat]',
		 $_POST[book_no],
		 $_POST[book_price],
		'$_POST[fileToUpload]',
		 )";
		$query_run = mysqli_query($conn,$query);

		if(isset($_FILES['fileToUpload'])!=''){

		  $errors= array();
		  $file_name = $_FILES['fileToUpload']['name'];
		  $file_tmp =$_FILES['fileToUpload']['tmp_name'];
		  $file_type=$_FILES['fileToUpload']['type'];
		  $tmp = explode('.', $file_name);
		  $file_extension = end($tmp);
		  
		  $result=mysqli_query($conn,"SELECT count(*) as total from `books`");
		  $data=mysqli_fetch_assoc($result);
		  $count=$data['total']+1;
		  
		  $file_name_new=basename($file_name,".$file_extension");
		  $file_name_new=$file_name_new.$count.".".$file_extension;
		  
		  if(empty($errors)==true){
			 move_uploaded_file($file_tmp,"uploads/".$file_name_new);
		  }else{
			 print_r($errors);
		  }
		}  

	}
	



	?>	
