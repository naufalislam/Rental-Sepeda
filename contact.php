<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Us</h3>

<div class="container">
  <form ="/#">
    <label for="fname">Nama </label>
    <input type="text" id="fname" name="firstname" placeholder="Nama Depan">

    <label for="lname">Last Belakang</label>
    <input type="text" id="lname" name="lastname" placeholder="Nama Belakang">

    <label for="country">Alamat</label>
    <select id="country" name="country">
      <option value="tegal">Tegal</option>
      <option value="slawi">Slawi</option>
      <option value="brebes">Brebes</option>
      <option value="pemalang">Pemalang</option>
    </select>

    <label for="subject">Komentar</label>
    <textarea id="subject" name="subject" placeholder="Ketikan Sesuatu ..." style="height:200px"></textarea>

    <input type="submit" a href="index.php" value="Submit">
  </form>


  

</div>
