<!DOCTYPE html>
<html>
	<head>
		<title>pollen</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.js" integrity="sha256-wypDCQw+qwWtdARZAAtUMv/1SWOEB1XHZwAFoNc9Wn8=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.css" integrity="sha256-+dIh4jG2jQTHZwW81yUo8h6tzXWcNumyNL5XPZbwp1E=" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	<header>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">POLLEN</a>
				  </div>
				  <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="/public/home.php">HOME</a></li>
					  <li><a href="/public/about.html">ABOUT</a></li>
					  <li><a href="/public/challenge.php">CHALLENGE</a></li>
					</ul>

				  </div>
				</div>
			  </nav>
		</header>

		<section class="animation">
			<div class="main">
				<div class="svgs">
					<div class="poison">
						<h2>Pick Your Poison</h2>
<?php
						echo "<a href=\"home.php?pictureId=1\" class=\"arum\"></a>";
						echo "<a href=\"home.php?pictureId=2\" class=\"aloe\"></a>";
						echo "<a href=\"home.php?pictureId=3\" class=\"banana\"></a>";
?>

					</div>
				</div>
			</div>
		</section>

		<section class="animation">
			<div class="story">
				<h2>Story</h2>
<?php

				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "mysql";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
  					die("Connection failed: " . $conn->connect_error);
				} 

				// Output story if id matches
				// Check to see what picture was clicked and get the id
				$id = "";
				if( isset( $_GET["pictureId"] ) ) {
					$id = $_GET["pictureId"];
				}
				// SQL command
				$sql = "SELECT * FROM story ";
				$sql .= "WHERE id=" . $id . "";
				
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "Title: " . $row["title"]. "<br>" . $row["article"];
					}
				}

				// Close connection
				$conn->close();
?>
				
			</div>
		</section>

	</body>

	<footer>
		<div class="footer-buttons">
			<a href="mailto:pollen.forensicbotany@gmail.com"><i class="fa fa-envelope"></i></a>
			<a href="https://github.com/pollenators/pollen"><i class="fa fa-github"></i></a>
			<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>  
		</div>
	</footer>

</html>