<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src="images/account.png" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $_SESSION['nama']; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $_SESSION['level']; ?>
					</div>
				</div>
				<div class="profile-userbuttons">
					<?php
					$username = $_SESSION['username'];
					$cek = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");
					$cek2 = mysqli_fetch_assoc($cek);
					?>
					<a type="button" href="?page=pengguna_edit&kode=<?php echo $cek2['id_user'] ?>" class="btn btn-success btn-sm">Edit</a>
					<a href="logout.php" type="button" onclick="return confirm('ANDA YAKIN AKAN KELUAR ... ?')" class="btn btn-danger btn-sm">Logout</a>
				</div>
				<span class="profile-desc-text"> &nbsp; </span>
				<div class="portlet light bordered">
					<div class="row list-separated profile-stat">
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"> <?php 
							$sql = "SELECT * FROM orders";
							$query = mysqli_query($koneksi,$sql);
							$count = mysqli_num_rows($query);
							echo " $count";
							?></div>
							<div class="uppercase profile-stat-text"> Pesanan </div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"><?php 
							$sql = "SELECT * FROM transaksi";
							$query = mysqli_query($koneksi,$sql);
							$count = mysqli_num_rows($query);
							echo " $count";
							?></div>
							<div class="uppercase profile-stat-text"> Transaksi </div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<div class="uppercase profile-stat-title"> <?php 
							$sql = "SELECT * FROM masakan";
							$query = mysqli_query($koneksi,$sql);
							$count = mysqli_num_rows($query);
							echo " $count";
							?> </div>
							<div class="uppercase profile-stat-text"> Masakan </div>
						</div>
					</div>
					<div>
					</div></div>
				</div>
			</div>
