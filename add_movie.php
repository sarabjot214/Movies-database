<?php include "include/db.php"; 
	/*if(isset($_POST['product_submit'])) {
		$prod_title=mysqli_real_escape_string($conn,strip_tags($_POST['prod_title']));
		$prod_desc=mysqli_real_escape_string($conn,$_POST['prod_desc']);
		$prod_cat=mysqli_real_escape_string($conn,strip_tags($_POST['prod_cat']));
		$prod_qty=mysqli_real_escape_string($conn,strip_tags($_POST['prod_qty']));
		$prod_cost=mysqli_real_escape_string($conn,strip_tags($_POST['prod_cost']));
		$prod_price=mysqli_real_escape_string($conn,strip_tags($_POST['prod_price']));
		$prod_disc=mysqli_real_escape_string($conn,strip_tags($_POST['prod_disc']));
		$prod_del_chrg=mysqli_real_escape_string($conn,strip_tags($_POST['prod_del_chrg']));
		if(isset($_FILES['prod_image']['name'])) {
			$file_name=mt_rand()."_".$_FILES['prod_image']['name'];
			$path_add="../images/product/$file_name";
			$prod_image="images/product/$file_name";
			$img_confirm=1;
			$file_type=pathinfo($_FILES['prod_image']['name'],PATHINFO_EXTENSION);
			if($_FILES['prod_image']['size']>200000) {
				$img_confirm=0;
				echo 'The size is very big';
			}
			if($file_type!='jpg' && $file_type!='jpeg' && $file_type!='png' && $file_type!='gif') {
				$img_confirm=0;
				echo 'Type is not matching';
			}
			if($img_confirm==0) {
				
			}else {
				if(move_uploaded_file($_FILES['prod_image']['tmp_name'],$path_add)) {
					$prod_ins_sql="INSERT INTO products (prod_image,prod_title,prod_desc,prod_cat,prod_quantity,prod_cost,prod_price,prod_disc,prod_del_chrg) VALUES ('$prod_image','$prod_title','$prod_desc','$prod_cat','$prod_qty','$prod_cost','$prod_price','$prod_disc','$prod_del_chrg')";
					$prod_ins_run=mysqli_query($conn,$prod_ins_sql);
				}
			}
		}
		else {
			echo "sorry";
		}
	}*/
?>
<!doctype html>
<html>
	<head>
		<title>Add New Movie</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/lightbox.js"></script>
	</head>
	
	<body>
		<?php include "include/header.php"; ?>
		<div class="container">					
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Movie Poster Image</label>
					<input type="file" name="image" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Movie Name</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Movie Details</label>
					<textarea class="form-control" name="details" ></textarea>
				</div>
				<div class="form-group">
					<label>Movie IMDB Rating</label>
					<input type="number" class="form-control" name="rating" required>
				</div>
				<div class="form-group">
					<label>Movie File</label>
					<input type="file" name="movie" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary btn-block" >
				</div>
			</form>
		</div>
		<br><br>
		<?php include "include/footer.php"; ?>
	</body>
</html>