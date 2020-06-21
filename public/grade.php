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
	<!-- Set body to hold navigation bar and grade for challenge feature -->
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
		<!-- Set a grade for challenge feature -->
		<section class="animation">
			<div class="story">
				<div id="page-wrap"></div>
					<h2>Challenge Grade</h2>
<?php    
			// Set variables for answers related to each question
			$answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
			// Set a variable to count the number of correct answers
			$totalCorrect = 0;
			// If an answer is correct, increment the count variable by 1
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
			if ($answer4 == "A") { $totalCorrect++; }
			// If the count variable is greater than or equal to 3, then echo a positive message
			if ($totalCorrect >= 3) {
				echo "<p>Great job!  You got $totalCorrect / 4 correct.</p>";
			}
			// If the count variable is less than 3, than echo an encouraging message
			if ($totalCorrect < 3) {
				echo "<p>Great effort!  You got $totalCorrect / 4 correct.  Re-visit the resources and come back to ace the challenge!</p>";
			}
?>
			</div>
		</section>
	</body>
</html>