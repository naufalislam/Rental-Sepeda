<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	
		<?php
			include 'header.php';
		?>

			
		<h2 class="" style="text-align: center">Alun-Alun Kota Tegal</h2>
				<!-- <h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3> -->
			
	<!--  end hero section  -->


	

	<section class="">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h2 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Sign Up </h2>
				<table height="100" align="center" >
						
						<tr >
							<td>Nama </td>
							<td><input type="text" name="fname" placeholder="Nama" required></td>
						</tr>
						<tr>
							<td>Nomor Telp </td> 
							<td><input type="text" name="phone" placeholder="Email" required></td>
						</tr>
						<tr>
							<td>Email </td>
							<td><input type="email" name="email" placeholder="Email" required></td>
						</tr>
						<tr>
							<td>Nomor ID </td>
							<td><input type="text" name="id_no" placeholder="Nomor ID" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select class="btn btn-secondray" name="gender">
									<option> Select Gender </option>
									<option> Laki-Laki </option>
									<option> Perempuan </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Alamat </td>
							<td><input type="text" name="location" placeholder="Alamat" required></td>
						</tr>
						
						<div align="center">
						
							<td colspan="2" style="text-align:center"><input class="btn btn-success" type="submit" name="save" value="Submit Details"></td>
						</div>
						
					</table>
				</form>
			</div>
		</div>
	</section>
				
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
		

	</div>
	<?php
			include 'footer.php';
		?>
	
</body>
</html>