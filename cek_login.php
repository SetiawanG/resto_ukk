<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user inner join level on user.id_level = level.id_level where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['nama_level']=="admin"){
	
		$_SESSION['nama'] = $data['nama_user'];
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		
		header("location:halaman_admin.php?page=home");

	
	}else if($data['nama_level']=="kasir"){
			
		$_SESSION['nama'] = $data['nama_user'];
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kasir";
		
		header("location:halaman_kasir.php?page=home");


	}else if($data['nama_level']=="waiter"){
			
		$_SESSION['nama'] = $data['nama_user'];
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "waiter";
		
		header("location:halaman_waiter.php");

	}else{

		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>