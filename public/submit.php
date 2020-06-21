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
	<!-- Set body to hold navigation bar and submissions feature -->
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
		<!-- Set submissions feature -->
		<section class="animation">
			<div class="main">
				<div class="wrapper">
					<div class="item">
						<h2>Submit a Story</h2>
						<!-- Set form to collect story from user -->
						<form action="submit.php" method="post" id="userStoryForm">
							<div class="userStoryFormElement">
								<label for="userEmail">Email</label><br />
								<input type="text" id="userEmail" name="userEmail"/>
							</div>
							<div class="userStoryFormElement">
								<label for="userSource">Article Link</label><br />
								<input type="text" id="userSource" name="userSource"/>
							</div>
							<div class="userStoryFormElement">
								<label for="userDescription">Article Description</label><br />
								<textarea name="userDescription" class="userDescription"></textarea>
							</div>
							<input type="submit" value="Pollenate"/>
						</form>
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
						// If post method is found, set variables for user email, article link and article description
						if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
							$userEmail = $_POST["userEmail"];
							$userSource = $_POST["userSource"];
							$userDescription = $_POST["userDescription"];
							// Store into database
							$sql = "INSERT INTO userStories (email, source, description) ";
							$sql .= "VALUES ('$userEmail', '$userSource', '$userDescription')";
							// Query submission into database
							$result = $conn->query($sql);
							// Run sql command to sort and select only the most recent submission
							$sql = "SELECT * FROM userStories ORDER BY id DESC LIMIT 1";
							// Query database for most recent submission
							$result = $conn->query($sql);
							// Output submission
							if ( $result->num_rows > 0 )  {
								while( $row = $result->fetch_assoc() ) {
?>
									<span class="submit">Email: 
<?php 						
										echo( $row["email"] );
?>
									</span>
									<span class="submit">Article Link:
<?php
										echo( $row["source"] );
?>
									</span>
									<span class="submit">Article Description:
<?php
										echo( $row["description"]);
?>	
									</span>
<?php
								}
							}
						}
						// Close connection
						$conn->close();
?>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>