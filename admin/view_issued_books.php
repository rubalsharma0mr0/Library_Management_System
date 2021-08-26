 <?php
	require('functions.php');
	include('admin_menu.php');
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$book_name = "";
	$author = "";
	$book_no = "";
	$student_name = "";
	$query = "select issued_books.book_name,issued_books.book_author,issued_books.book_no,users.name from issued_books left join users on issued_books.student_id = users.id";
?> 

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form>
				<table class="table-bordered" width="900px" style="text-align: center;">
					<tr>
						<th>Books Name:</th>
						<th>Author Name:</th>
						<th>Book Nunber:</th>
						<th>Student Name:</th>

					</tr>
					<?php 
						$query_run = mysqli_query($conn,$query);
						while($row = mysqli_fetch_assoc($query_run)){
							 $book_name = $row['book_name'];
							 $book_author = $row['book_author'];
							 $book_no = $row['book_no'];
							 $student_name = $row['name'];	
					?>
							<tr>								
								<td><?php echo $book_name; ?></td>
								<td><?php echo $book_author; ?></td>
								<td><?php echo $book_no; ?></td>
								<td><?php echo $student_name; ?></td>
							</tr>
							<?php 
							}	
					?>

				</table>
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>

	</body>
	</html>