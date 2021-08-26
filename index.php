<?php
include('menu.php');
?>	
<div class="row">
		<div class="col-md-3" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li>(Sunday off)</li>
			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>	
				
			</ul>
		</div>
		<br><br>
		<div class="col-md-1"></div>	
		<div class="col-md-6" id="main_content">
			<center><h3>User login Form</h3></center>
			<form action="" method="post">
				
				<div class="form-group">
					<label for="name">Email ID:		
					</label>
					<input type="email" name="email" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="name">Password:		
					</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				
				<button type="submit" name="login" class="btn btn-primary">Login</button>  |<a href="signup.php">  Not Register Yet</a>
			</form>
			
	<?php
			session_start();
		if(isset($_POST['login'])){
			   $conn = mysqli_connect("localhost","root","");
			   $db = mysqli_select_db($conn,"lms");
			   $query = "select * from users where email ='$_POST[email]'";
			   $query_run = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($query_run)){
               	
                 	if($row['email'] == $_POST['email']){
               			

               			if($row['password'] == $_POST['password']){
               				
               				$_SESSION['name'] = $row['name'];
							$_SESSION['email'] = $row['email'];
							$_SESSION['id'] = $row['id'];
							header("Location:user_dashboard.php");

							  //set the session on the login page
                            $_SESSION['authenticated']=true;
               			}
               	        else{
			               	
			               	?>
			               	<br><br><center><span class="alert-danger">Wrong Password</span></center>

			               	<?php
			           	}
		            }
		               
			}
		}
	?>

		</div>
		</div>
		</div>
	</body>
	</html>