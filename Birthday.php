<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Birthday to Day Calculator</title>
	<style type="text/css">
	
		body{
			background:lightblue;
			text-align:center;
		}
		h1{
			color:#ff5500;
			font-size:45px;
			
		}
		.footer{
			margin-top:145px;
			color: #f109e3;
			font-size:45px;
		}
		
	</style>
</head>
<body>
	<h2 style="font-size:35px;"><i>Current Time: <?php date_default_timezone_set("Asia/Dhaka"); echo date('g:i A'); ?> </br>
	Date: <?php echo date('d F, Y'); ?></h2></i>

	<h1 style="color:red;"><i>Birthday to Day Calculator</i></h1>
	
	<form action="" method="POST">
		<input type="text" name="dd" placeholder="Enter Day" required="required" style="background:#cbf328; font-size:20px;" maxlength="2" onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
		<input type="text" name="mm" placeholder="Enter Month" required="required" style="background:#cbf328; font-size:20px;" maxlength="2" onkeyup="this.value=this.value.replace(/[^\d]/,'')" />
		<input type="text" name="yy" placeholder="Enter Year" required="required" style="background:#cbf328; font-size:20px;" maxlength="4" onkeyup="this.value=this.value.replace(/[^\d]/,'')" />	
		<input type="submit" name="p1" value="Generate" style="background:red; font-size:20px;" />
	</form>
	
	
	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$dd = $_POST['dd'];
		$mm = $_POST['mm'];
		$yy = $_POST['yy'];
		
		$result = date("l", mktime(0,0,0,$mm,$dd,$yy));
		
		echo "<h1><i>Date: <span style='color:green;'>$dd-$mm-$yy</span></br>
			The Day was: <span style='color:blue;'>$result</span1></i></h1>";

	}
	
	?>	

	<p class="footer"><i>Created by kanon</i></p>
</body>
</html>