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
					  <li class="active"><a href="/views/index.html">HOME</a></li>
					  <li><a href="/views/about.html">ABOUT</a></li>
					  <li><a href="/views/folder/challenge.php">CHALLENGE</a></li>
					  <li><a href="/views/folder/submit.php">SUBMIT</a></li>
					</ul>

				  </div>
				</div>
			  </nav>
		</header>

		<section class="animation">
			<div class="main">
				<div class="svgs">
					<div class="poison">
						<h2>Submit a Story</h2>

						<form action="submit.php" method="post">
							<label for="userEmail">Email</label>
							<input type="text" id="userEmail" name="userEmail"/>

							<label for="userSource">Article Link</label>
							<input type="text" id="userSource" name="userSource"/>

							<label for="userDescription">Article Description</label>
							<textarea name="userDescription"></textarea>

							<input type="submit" value="Submit"/>
						</form>

<?php

						$servername = "localhost";
						$username = "root";
						$password = "root";
						$dbname = "pollen";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 

						if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
							$userEmail = $_POST["userEmail"];
							$userSource = $_POST["userSource"];
							$userDescription = $_POST["userDescription"];

							// If something was submitted, store into db
							$sql = "INSERT INTO userStories (email, source, description) ";
							$sql .= "VALUES ('$userEmail', '$userSource', '$userDescription')";

							$result = $conn->query($sql);

							// Select everthing that was submitted
							$sql = "SELECT * FROM userStories ORDER BY id DESC LIMIT 1";

							$result = $conn->query($sql);

							// Output submission
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
								//	echo "Email: " . $row["email"] . "<br>" . "Article Link: " . $row["source"]. "<br>" . "Article Description: " . $row["description"];
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

	<footer>
		<div class="footer-buttons">
			<a href="mailto:pollen.forensicbotany@gmail.com"><i class="fa fa-envelope"></i></a>
			<a href="https://github.com/pollenators/pollen"><i class="fa fa-github"></i></a>
			<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>  
		</div>
	</footer>

</html>