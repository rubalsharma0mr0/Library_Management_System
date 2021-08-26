 <?php
 require('functions.php');
include('admin_menu.php');
?> 

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Author</th>
						<th>Category</th>
						<th>Number</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
			    </thead>
			    <?php 			    
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"lms");
				$query = "select * from books";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run)){
					?>
				<tr>
					<td><?php echo $row['book_name'];  ?></td>
					<td><?php echo $row['author_id'];  ?></td>
					<td><?php echo $row['cat_id'];  ?></td>
					<td><?php echo $row['book_no'];  ?></td>
					<td><?php echo $row['book_price'];  ?></td>
					<td>
					<button class="btn" name=""><a href="edit_book.php?bn=<?php echo $row['book_no']; ?>">Edit</a></button>
					<button class="btn" name="eidt"><a href="delete_book.php?bn=<?php echo $row['book_no']; ?>">Delete</a></button>
				    </td>
				</tr>
					<?php

				}
	
			     ?>


			</table>
			
		</div>
		<div class="col-md-2"></div>

	</div>
	</body>
	</html>