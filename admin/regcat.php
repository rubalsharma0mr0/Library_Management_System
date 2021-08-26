 <?php
	require('functions.php');
	include('admin_menu.php');
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$cat_name = "";
	$query = "select * from category";
?> 

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form>
				<table class="table-bordered" width="900px" style="text-align: center;">
					<tr>
						<th>Category Name:</th>
						
					</tr>
					<?php 
						$query_run = mysqli_query($conn,$query);
						while($row = mysqli_fetch_assoc($query_run)){
							$cat_name = $row['cat_name'];						
							?>
							<tr>
								<td><?php echo $cat_name; ?></td>
								
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