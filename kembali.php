<?php
	include 'includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Dikembalikan' WHERE client.client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Sepeda berhasil dikembalikan  ';
	?>
		<meta content="4; index.php" http-equiv="refresh" />
	<?php
	}
?>