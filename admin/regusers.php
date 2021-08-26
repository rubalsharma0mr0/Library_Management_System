 <?php
	require('functions.php');
	include('admin_menu.php');
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$password = "";
 	$query = "select * from users ";
?> 

	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form>
				<table class="table-bordered" width="900px" style="text-align: center;">
					<tr>
						<th>Name:</th>
						<th>Email:</th>
						<th>Mobile:</th>
						<th>Address:</th>
						<th>Password:</th>
					</tr>
					<?php 
						$query_run = mysqli_query($conn,$query);
						while($row = mysqli_fetch_assoc($query_run)){
							$name = $row['name'];
							$email = $row['email'];
							$mobile = $row['mobile'];
							$address = $row['address'];
							$password = $row['password'];
							?>
							<tr>
								<td><?php echo $name; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $mobile; ?></td>
								<td><?php echo $address; ?></td>
								<td><?ph p echo $password; ?></td>
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