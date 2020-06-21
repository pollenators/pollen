<!DOCTYPE html>
<html>
	<!-- Set dependencies -->
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
		<script src="animations.js"></script>
	</head>
	<!-- Set body to hold navigation bar and archive feature -->
	<body>
		<!-- Set navigation bar -->
		<header>
			<div class="container">
				<nav class="navbar sticky-top navbar-light" style="background-color: #1b4332;">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="myNavbar" >
							<ul class="nav navbar-nav">
								<li><a href="home.html" class="text-light">HOME</a></li>
								<li><a href="about.html" class="text-light">ABOUT</a></li>
								<li><a href="archive.php" class="text-light">ARCHIVE</a></li>
								<li><a href="submit.php" class="text-light">SUBMISSIONS</a></li>
								<li><a href="challenge.php" class="text-light">CHALLENGE</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!-- Set archive feature -->
		<section class="animation">
			<div class="background">
				<div class="logo">
					<h1 class="logo">pick your poison</h1>
				</div>
				<div class="wrapper">
					<div class="wrapper items">
						<div class="items">
<?php
							// Set id for images
							echo "<a href=\"archive.php?pictureId=1\" class=\"arum\" title=\"arum\"></a>";
							echo "<a href=\"archive.php?pictureId=2\" class=\"aloe\" title=\"aloe\"></a>";
							echo "<a href=\"archive.php?pictureId=3\" class=\"banana\" title=\"banana\"></a>";
?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Set area for story to populate onto -->
		<section class="animation">
<?php
			// Database credentials
			$servername = "us-cdbr-east-05.cleardb.net";
			$username = "b8f493d5441bba";
			$password = "d2ebee76";
			$dbname = "heroku_7f19938a1668d8e";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if( $conn->connect_error ) {
				die( "Connection failed: " . $conn->connect_error );
			} 
			// Check to see what picture was clicked and get the id
			$id = "";
			if( isset( $_GET["pictureId"] ) ) {
				$id = $_GET["pictureId"];
				// SQL command
				$sql = "SELECT * FROM story ";
				$sql .= "WHERE id=" . $id . "";
				$result = $conn->query($sql);
				// Output story after id matches
				if ( $result->num_rows > 0 ) {
?>
					<div class="story">
<?php
						while( $row = $result->fetch_assoc() ) {
							echo "Title: " . $row["title"]. "<br>" . $row["article"];
						}
?>
					</div>
<?php
				}
			} 
			// Close connection
			$conn->close();
?>
		</section>
	</body>
</html>