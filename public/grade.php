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
		<script src="animations.js"></script>
	</head>
	<body>
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
		
		<section class="animation">
			<div class="story">
				<div id="page-wrap"></div>
		
<?php    
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
        
            $totalCorrect = 0;
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            echo "<div id='results'>$totalCorrect / 4 correct</div>";

			if ($totalCorrect < 3) {
				echo "<p>Great effort!  Visit the resources again and come back to ace the challenge!</p>";

				$link1 = 'https://sciencing.com/forensic-botany-14631.html';
				$link2 = 'https://www.encyclopedia.com/science/news-wires-white-papers-and-books/forensic-botany';
				$link3 = 'https://www.theatlantic.com/science/archive/2015/11/fighting-crime-with-pollen/416259/';
				$link4 = 'https://deshasil.wixsite.com/independentlabs/single-post/2018/06/01/Cases-where-forensic-botany-has-been-used-in-criminal-investigations';
				echo "<a href='$link1'>What Is Forensic Botany?</a>";
				echo "<a href='$link2'>Forensic Botany</a>";
				echo "<a href='$link3'>Fighting Crime, With Pollen</a>";
				echo "<a href='$link4'>Independent Labs</a>";
			}
?>

			</div>
		</section>

		<footer>
			<div class="footer-buttons">
				<a href="mailto:pollen.forensicbotany@gmail.com"><i class="fa fa-envelope"></i></a>
				<a href="https://github.com/pollenators/pollen"><i class="fa fa-github"></i></a>
				<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>  
			</div>
		</footer>
	</body>
</html>