<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Disetujui' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Permintaan Berhasil Di setujui';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
