 <?php
	require('functions.php');
	include('admin_menu.php');
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$book_name = "";
	$author = "";
	$category = "";
	$book_no = "";
	$price = "";
 	$query = "select books.book_name, books.book_no, book_price, authors.author_name from books left join authors on books.author_id = authors.author_id  ";
?> 

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form>
				<table class="table-bordered" width="900px" style="text-align: center;">
					<tr>
						<th>Books Name:</th>
						<th>Author:</th>
						<th>Book Number:</th>
						<th>Price:</th>
					</tr>
					<?php 
						$query_run = mysqli_query($conn,$query);
						while($row = mysqli_fetch_assoc($query_run)){
							$book_name = $row['book_name'];
							$author_name = $row['author_name'];	
							$price = $row['book_price'];		
							$book_no = $row['book_no'];
							
							?>
							<tr>
								<td><?php echo $book_name; ?></td>
								<td><?php echo $author_name; ?></td>
								<td><?php echo $price; ?></td>
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