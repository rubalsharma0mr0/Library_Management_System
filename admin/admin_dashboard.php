 <?php
 require('functions.php');
 include('admin_menu.php');
?> 

	<div class="row">
		<div class="col-md-1"></div>

		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Users:</div>
				<div class="card-body">
					<p class="card-text">Number Of Total Users: <?php echo get_user_count(); ?> </p>
					<a href="regusers.php" class="btn btn-danger" target="_blank">View Registerd Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>

		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Books:</div>
				<div class="card-body">
					<p class="card-text">Number Of Avaliable Books: <?php echo get_book_count(); ?> </p>
					<a href="regbooks.php" class="btn btn-primary" target="_blank">View Avaliable Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>

		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Catogories:</div>
				<div class="card-body">    
					<p class="card-text">Number Of Total Catogories: <?php echo get_catogories_count(); ?> </p>
					<a href="regcat.php" class="btn btn-danger" target="_blank">View Catogories</a>
				</div>
			</div>
		</div>		

		</div>

		<br><br>

		<div class="row">	

		<div class="col-md-1"></div>

		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Authors:</div>
				<div class="card-body">
					<p class="card-text">Number Of Total Authors: <?php echo get_author_count(); ?> </p>
					<a href="regauth.php" class="btn btn-success" target="_blank">View Registerd Authors</a>
				</div>
			</div>
	    </div>		
			
		<div class="col-md-1"></div>

		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Books:</div>
				<div class="card-body">
					<p class="card-text">Number Of Books Issued: <?php echo get_issbook_count(); ?> </p>
					<a href="view_issued_books.php" class="btn btn-info" target="_blank">View Issued Books</a>
				</div>
			</div>
		</div> 

		</div>
	</body>
	</html>