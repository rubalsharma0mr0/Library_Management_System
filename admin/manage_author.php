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
						<th>Author ID</th>
						<th>Name</th>						
						<th>Action</th>
					</tr>
			    </thead>
			    <?php 			    
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"lms");
				$query = "select * from authors";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run)){
					?>
				<tr>
					<td><?php echo $row['author_id'];  ?></td>
					<td><?php echo $row['author_name'];  ?></td>
					<td>
					<button class="btn" name=""><a href="edit_author.php?aid=<?php echo $row['author_id']; ?>">Edit</a></button>
					<button class="btn" name=""><a href="delete_author.php?aid=<?php echo $row['author_id']; ?>">Delete</a></button>
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