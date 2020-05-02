<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
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

	<section class="">
		<?php
			include 'header.php';
		?>
		<h2 class="caption" style="text-align: center">Alun-Alun Kota Tegal</h2>
			

	


		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Lakukan Pembayaran Di Sini</h3>
				
				<form method="post">
					<table>
						<tr>
							<td>ID Transaksi</td>
							<td><input type="text" name="mpesa" required></td>
						</tr>
						<tr>
							<td>Kode Verifikasi </td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						
						<tr>
							
							<td colspan="2" style="margin: 10;text-align:right"><input class="btn btn-success" type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE client SET mpesa = '$mpesa' WHERE id_no = '$id_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
			<div class="more_listing">
				<a href="index.php" class="more_listing_btn">Lihat Lainnya</a>
			</div>
		</div>


	<?php
			include 'footer.php';
		?>
	
</body>
</html>