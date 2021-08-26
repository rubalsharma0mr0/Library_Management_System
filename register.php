<?php
   $conn = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($conn,"lms");
   $query = "insert into users values(
   null,
   '$_POST[name]',
   '$_POST[email]',
   '$_POST[password]',
   '$_POST[mobile]',
   '$_POST[address]')";
   $query_run = mysqli_query($conn,$query); 
   ?>
   <script type="text/javascript">
   	alert("Registration successfully....You may login now."); 
   	window.location.href = "login.php";
   </script>