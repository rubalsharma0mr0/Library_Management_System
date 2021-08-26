<?php 
		function get_user_count(){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		$user_count = "";
		$query = "select count(*) as user_count from users";
		$query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];

		}
		return($user_count);  
		}

		function get_book_count(){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		$book_count = "";
		$query = "select count(*) as book_count from books";
		$query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$book_count = $row['book_count']; 

		}
		return($book_count);  
		}

		function get_author_count(){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		$author_count = "";
		$query = "select count(*) as author_count from authors";
		$query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$author_count = $row['author_count'];

		}
		return($author_count);  
		}

		function get_catogories_count(){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		$catogories_count = "";
		$query = "select count(*) as catogories_count from category";
		$query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$catogories_count = $row['catogories_count'];

		}
		return($catogories_count);  
		}

		function get_issbook_count(){
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"lms");
		$issbook_count = "";
		$query = "select count(*) as issbook_count from issued_books";
		$query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$issbook_count = $row['issbook_count'];

		}
		return($issbook_count);  
		}
?>