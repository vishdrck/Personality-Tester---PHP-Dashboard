<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>JCP Tester</title>
	<link rel="stylesheet" href="css/index.css">



</head>

<body>
	<?php
	require_once 'db-conn.php';
	$table_name = "users";

	$is_table_exist = false;
	$is_table_created = false;
	$sql = "CREATE TABLE $table_name (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		email VARCHAR(50) NOT NULL UNIQUE,
		password VARCHAR(255) NOT NULL,
		created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

	if (mysqli_query($conn, $sql)) {
		$is_table_created = true;
	} else {
		$is_table_exist = true;
	}
	?>
	<header>
		<div class="logo">
			<img src="images/logo.png" width="100px" height="100px" alt="logo">
		</div>
		<div class="title">
			<h1>Welcome To JCP Tester </h1>

		</div>

		<div class="button">
			<a href="candidate.php" class="btn">CANDIDATE LOGIN</a>
			<a href="adminlogin.php" class="btn">ADMIN LOGIN</a>

		</div>

		<img src="images/bgimage.png" width="550px" class="home-img" alt="image">

	</header>

	<section id="banner">
		<div class="title1">
			<h1> JCP Tester </h1>
		</div>

		<div class="title2">
			<h2>JCP Tester is an online recruitment system that tracks candidates information,</h2>
		</div>

		<div class="title3">
			<h2>personality and careers skills at simplest and fastest.</h2>
		</div>


	</section>


	<footer>
		<div class="footer">

			<br /><br />
			<h1>-SHARE-</h1>

			<a href="https://twitter.com"><img src="images/twitter.png" width="20px" id="twitter" alt="photo"></a>
			<a href="https://www.instagram.com"><img src="images/instagram.png" width="20px" id="instagram" alt="photo"></a>
			<a href="https://www.facebook.com"><img src="images/facebook.png" width="20px" id="facebook" alt="photo"></a>
			<a href="https://www.google.com/gmail"><img src="images/email.png" width="20px" id="email" alt="photo"></a>



			<h2>abc Company (Pvt) Ltd. Kandy<br>NO.200,<br>William Gopallaw Mawatha Kandy,<br>2000 Kandy,<br>Sri Lanka.</h2>

			<h3>© JCP Tester - 2020</h3>
		</div>
	</footer>

</body>

</html>