<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>

	<title>Admin</title>
	<style type="text/css">
		body {
    background: #000000cf;
}
	</style>
	
</head>
<body>


	<?php 
	session_start();

	
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	
	
	<?php
	include'navbar.php';

	include_once 'koneksi.php';
	include'sidebar.php';
	?>

	<div id="page-content-wrapper">
	</div>
	<div class="col">
		<div class="profile-content">
			
		</div>
	</div> 
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min"></script>

</body>
</html>