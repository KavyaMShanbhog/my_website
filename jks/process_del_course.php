<?php
require('config.php');


			$query="delete from courses where c_id =".$_GET['sid'];
		
			mysqli_query($con,$query) or die("can't Execute...");
			
			
			header("location:allc.php");

?>