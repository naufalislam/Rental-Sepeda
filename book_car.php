<!DOCTYPE html>
<html lang="en">
<head>
	<title>Detail Sepeda</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
			<h2 class="caption" style="text-align: center">Alun-Alun Kota Tegal</h2>
			<!-- <h3 class="properties" style="text-align: center">Mercedes Benz - Toyota - Range Rovers</h3> -->
			</section>
	</section><!--  end hero section  -->
	
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Rs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Jenis Sepeda '.$rws['car_type'];?></a>
						</h1>
						<h2>Nama/Model sepeda : <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
				<h3>Proses Peminjaman Sepeda <?php echo $rws['car_name'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table>
						<tr>
							<td>Nama : </td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Nomer Hp : </td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email : </td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Password : </td>
							<td><input type="password" name="id_no" required></td>
						</tr>
						<tr>
							<td>Gender : </td>
							<td>
								<select  class="btn btn-secondary" name="gender">
									<option> Pilih Gender </option>
									<option> Laki-Laki </option>
									<option> Perempuan </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Alamat : </td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							
							<td colspan="2" style="text-align:right"><input  class="btn btn-success"  type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
					} else
						{
							?>
								<a href="wait.php">Click Untuk Melakukan Peminjaman</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<?php
			include 'footer.php';
		?>
	
</body>
</html>