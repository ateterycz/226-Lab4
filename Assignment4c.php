<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>
				Andrew Teterycz CSC226 Portfolio
			</title>
			<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/jumbotron/">
			<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
			<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
			<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
			<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
			<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
			<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
			<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
				<meta name="theme-color" content="#563d7c">
			<style>
				.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;}
				@media (min-width: 768px) {
				.bd-placeholder-img-lg {
				font-size: 3.5rem;}
				}
			</style>

				<link href="stylesheet.css" rel="stylesheet">
		</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#9999ff">
				<a class="navbar-brand">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="home.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Assignment2.html">Assignment 2</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Assignment3.html">Assignment 3</a>
						</li>
						<li class="nav-item  active">
							<a class="nav-link">Assignment 4 <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">x</a>
						</li>
					</ul>
				</div>
			</nav>

			<main role="main">
				<div class="jumbotron" style="background-color:#212121">
					<div class="container">
						<h1 style="color:white;text-align:center;" class="display-3">Part 3</h1>
					</div>
				</div>
				<div class="col">
					<div class="row">
						<?php
							include "dbconnect.inc.php";
							$checkQ = "SELECT CUSTOMER_NAME, CREDIT_LIMIT FROM CUSTOMER WHERE CREDIT_LIMIT<=7500";
							$stmt = $conn->prepare($checkQ);
							$stmt->execute();
							$result = $stmt->get_result();
							if($result->num_rows > 0){
								$user = $result->fetch_assoc();
							}
							for($i=1;$i<$result->num_rows;$i++){
								$user = $result->fetch_assoc();
								echo $user['CUSTOMER_NAME']." has a credit limit of ".$user['CREDIT_LIMIT']."<br>";
							}
						?>
					</div>
					<br>
					<div class="row">
						<form action="displayPart.php" onsubmit="$_POST[$user['PART_NUM'] method="POST">
							<label for="PartNum">Choose a Part Number:</label>
							<select id="PartNum" name="PartNum">
								<?php
 									$query1 = "SELECT PART_NUM FROM PART";
									$stmt = $conn->prepare($query1);
									$stmt->execute();
									$result = $stmt->get_result();
									if($result->num_rows > 0){							
										for($i=1;$i<$result->num_rows;$i++){
											$user = $result->fetch_assoc();
											echo '<option value="'.$user['PART_NUM'].'">'.$user['PART_NUM'].'</option>';
										}
									}
 								?>	
 							<input type="submit" name="Submit" value="Submit">
 							</select>
						</form>
						
					</div>
				</div>
				<br>
				<p><a class="btn btn-secondary" href="Assignment4.html">Back</a></p>
			</main>
			<hr>
			<footer class="container">
				<p>Copyright 2021 - Andrew Teterycz</p>
			</footer>
		</body>
	</html>