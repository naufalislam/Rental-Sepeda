<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<link rel="stylesheet" href="css/main.css" />
<header>
			<div class="wrapper">
				<h1 class="logo">Penyewaan Sepedah</h1><br>
				
				
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php" class="menu">Home</a></li>
						
						<li><a href="contact.php" class="menu">Contact</a></li>
					
					
					<li><a href="account.php" class="menu">Login</a></li>
					<li><a href="login.php" class="menu">Login Admin</a></li>
					</ul>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">Lihat Status</a></li>
								<li><a href="message_admin.php">Hubungi Admin</a></li>
								<li><a href="admin/logout.php">Logout</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>