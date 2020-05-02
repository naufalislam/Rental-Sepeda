<!DOCTYPE html>
<html lang="en">
<head>
	<title>Status Booking</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style type="text/css">
		.status{
			font-size: 20px;
		}
	</style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
		function kembalikan(id){
			window.location.href ='pay.php?id='+id;
			
		}
		
	</script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Alun-Alun Kota Tegal</h2>
				<!-- <h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3> -->
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Status Booking kamu</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2><span style="font-size:25px; color: #FF0000">Status Booking :</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
				</li>
			</ul>
		</div>
		<div class="more_listing">
				<!-- <a href="index.php" class="more_listing_btn">Kembalikan sepeda</a> -->
				<td><a href="javascript:kembalikan(<?php echo $row['client_id'];?>)" class="more_listing_btn">Konfirmasi Pembayaran</a>
				
			</div>
	</section>	<!--  end listing section  -->

	<?php
			include 'footer.php';
		?>
	
</body>
</html>