<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Halaman Admin</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Tambah Sepeda Baru
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Tambah Sepeda Baru</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Nama Sepeda <span>(Wajib diisi)</span></label>
									<input type="text" class="field size1" name="car_name" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Merk Sepeda <span>(Wajib diisi)</span></label>
									<input type="text" class="field size1" name="car_type" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Harga Sewa Sepeda <span>(Wajib diisi)</span></label>
									<input type="text" class="field size1" name="hire_cost" required />
								</p>
								<p>
									<span class="req">Pilih foto</span>
									<label>Foto Sepeda <span>(Wajib diisi)</span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">Bisa dinaiki berapa orang</span>
									<label>Berapa Penumpang<span>(Wajib diisi)</span></label>
									<input type="text" class="field size1" name="capacity" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Pengelolaan</h2>
					</div>
					
					<div class="box-content">
						<a href="add_vehicles.php" class="add-button"><span>Lihat Sepeda yang Tersedia</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>Pilih Semua</label></p>
						<p><a href="#">Hapus yang dipilih</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Urutkan Berdasarkan</label>
							<select class="field">
								<option value="">Jenis Sepeda</option>
							</select>
							<select class="field">
								<option value="">Nama Sepeda</option>
							</select>
							<select class="field">
								<option value="">Harga Sewa</option>
							</select>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<?php
				include 'footer.php';
			?>
</body>
</html>