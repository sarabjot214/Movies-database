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
		<?php include 'include/header.php'; ?>
		
		<div class="container">
					<?php
						if(isset($_GET['movie_id'])){
							$sql="SELECT * FROM movie WHERE id='$_GET[movie_id]' LIMIT 1";
							$run= mysqli_query($conn,$sql);
							$rows=mysqli_fetch_assoc($run);
							echo "
								<div class='page-header'>
									<h2>$rows[name]</h2>
								</div>
								<div class='col-md-12 details '>
									<img src='$rows[poster_img]' class='img-thumbnail' style='width:250px; float: left;'>
									<h3>IMDB Rating : <span class='label label-success'>$rows[rating] / 10</span></h3>
									<div>$rows[description]</div>
								</div>
							";
							$x=$rows['downloads'];
							$x++;
							$path=$rows['path'];
							$sql="UPDATE movie SET downloads=$x where id='$_GET[movie_id]'";
							$run= mysqli_query($conn,$sql);
							echo "
							<a class='btn btn-success' href='play.php?name=$_GET[name]&movie_id=$_GET[movie_id]'>Play</a>
							<a class='btn btn-success' href='$path' download='$_GET[name].mp4'>Download</a>
							";
						}
						else
							echo "Source Not found!!!!";
					?>
		</div>
		<br><br>
		<?php include 'include/footer.php'; ?>
	</body>
</html>