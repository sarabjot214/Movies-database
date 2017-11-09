<?php include "include/db.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($_GET['name']))
			echo $_GET['name']; ?></title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/lightbox.js"></script>
	</head>
	<body>
		<?php
			include 'include/header.php';
			if(isset($_GET['movie_id']) && isset($_GET['name']))
			{	
				$sql="SELECT * FROM movie WHERE id='$_GET[movie_id]' LIMIT 1";
				$run= mysqli_query($conn,$sql);
				$rows=mysqli_fetch_assoc($run);
				echo "
					<video controls>
						<source src='$rows[path]' type='video/mp4'>
						Your browser does not support HTML5 video.
					</video>
			";
			}
			else
				echo "Source File Not Found!!!";
		?>
	</body> 
</html>
