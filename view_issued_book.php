 <?php	
 include('user_menu.php');
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$book_name = "";
	$author = "";
	$book_no = "";
	$query = "select book_name, book_author, book_no from issued_books where student_id = $_SESSION[id] and status = 1";
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
					
					</tr>
					<?php 
						$query_run = mysqli_query($conn,$query);
						while($row = mysqli_fetch_assoc($query_run)){
							 $book_name = $row['book_name'];
							 $author = $row['book_author'];
							 $book_no = $row['book_no'];
							 	
					?>
							<tr>								
								<td><?php echo $book_name; ?></td>
								<td><?php echo $author; ?></td>
								<td><?php echo $book_no; ?></td>
								
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