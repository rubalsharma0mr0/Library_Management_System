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
						<th>Category Name</th>						
						<th>Action</th>
					</tr>
			    </thead>
			    <?php 			    
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"lms");
				$query = "select * from category";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run)){
					?>
				<tr>
					<td><?php echo $row['cat_name'];  ?></td>
					<td>
					<button class="btn" name=""><a href="edit_cat.php?cid= <?php echo $row['cat_id']; ?>">Edit</a></button>
					<button class="btn" name=""><a href="delete_cat.php?cid= <?php echo $row['cat_id']; ?>">Delete</a></button>
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