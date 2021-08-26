<?php
include('user_menu.php');
function get_user_issue_book_count(){
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"lms");
	$user_issue_book_count = 0;
	$query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
	$query_run = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$user_issue_book_count = $row['user_issue_book_count'];
	} 
	return($user_issue_book_count);
}
?> 

	<div class="row">

		<div class="col-md-3">
			<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Books:</div>
				<div class="card-body">
					<p class="card-text">Number Of Issued Books: <?php echo get_user_issue_book_count();  ?></p>
					<a href="view_issued_book.php" class="btn btn-danger" target="_blank">View Issuesed Books</a>
				</div>
			</div>
		    </div>

		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>		
		
	</div>
	</body>
	</html>