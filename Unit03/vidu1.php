<?php 
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";

	if(isset($_GET['name'])){
		echo "<br> Hello " .$_GET['name'];
	}

 ?>