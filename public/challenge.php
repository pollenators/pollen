<!DOCTYPE html>
<html>
	<head>
		<title>pollen</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
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
					<a class="navbar-brand" href="/public/index.html">POLLEN</a>
				  </div>
				  <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="/public/index.html">HOME</a></li>
					  <li><a href="/public/about.html">ABOUT</a></li>
					  <li><a href="/public/quiz.php">CHALLENGE</a></li>
					</ul>

				  </div>
				</div>
			  </nav>
		</header>
		
		<section class="animation">
			<div class="story">
				<p>If you're interested in learning more about forensic botany, visit the resources below.  Come back to take the challenge that's based-off of the resources!</p>
				<br>
				<br>
				<a href="https://sciencing.com/forensic-botany-14631.html">What Is Forensic Botany?</a>
				<a href="https://www.encyclopedia.com/science/news-wires-white-papers-and-books/forensic-botany">Forensic Botany</a>
				<a href="https://www.theatlantic.com/science/archive/2015/11/fighting-crime-with-pollen/416259/">Fighting Crime, With Pollen</a>
				<a href="https://deshasil.wixsite.com/independentlabs/single-post/2018/06/01/Cases-where-forensic-botany-has-been-used-in-criminal-investigations">Independent Labs</a>
				<br>
				<br>
				<div id="page-wrap">
					<form action="grade.php" method="post" id="quiz">
						<ol>
							<li>
								<h5>Where are pollens usually found on a victim?</h5>
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
									<label for="question-1-answers-A">nasal passages</label>
								</div>
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
									<label for="question-1-answers-B">under the shoes</label>
								</div>
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
									<label for="question-1-answers-C">ears</label>
								</div>
							</li>
							<li>
								<h5>What criminal case in 1935 was solved by examining wood grains and knots from a ladder?</h5>
								<div>
									<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
									<label for="question-2-answers-A">Jack the Ripper</label>
								</div>
								<div>
									<input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
									<label for="question-2-answers-B">OJ Simpson</label>
								</div>
								<div>
									<input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
									<label for="question-2-answers-C">Lindbergh baby</label>
								</div>
							</li>
							<li>
								<h5>What can dried leaves be used for in forensic botany?</h5>
								<div>
									<input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
									<label for="question-3-answers-A">foot fungus evaluation</label>
								</div>
								<div>
									<input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
									<label for="question-3-answers-B">DNA evaluation</label>
								</div>
								<div>
									<input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
									<label for="question-3-answers-C">blood test</label>
								</div>
							</li>
							<li>
								<h5>What can be examined to run a Random Amplified Polymorphic DNA analysis?</h5>
								<div>
									<input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
									<label for="question-4-answers-A">pollens</label>
								</div>
								<div>
									<input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
									<label for="question-4-answers-C">tree branches</label>
								</div>
								<div>
									<input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
									<label for="question-4-answers-D">seeds</label>
								</div>
							</li>
						</ol>
						<input type="submit" value="Submit" />
					</form>
				</div>
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