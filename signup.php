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
		<div class="col-md-1"></div>	
		<div class="col-md-6" id="main_content">
			<center><h3>User Registration Form</h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">Full Name:		
					</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email ID:		
					</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:		
					</label>
					<input type="text" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile Number:		
					</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:		
					</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
			</div>
		</div>
	</body>
	</html>