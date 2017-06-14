<?php 

	include('booking/DBconnect.php');

?>


<!DOTCYPE html>

<!-- This page prints out the details of the movie - "Dilwale Dulhaniya Le Jayenge" -->

<html>
	<head>
		<meta charset="UTF-8">

		<title>justMOVIES.com</title>

		<link rel="stylesheet" href="css/global.css">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	</head>
	<body>
	
		<nav class="nav-main">

			<div class="bgcolor"> <!-- TO ADD bg color to class="logo" -->    </div>

			<div class="logo"><a href="main.php" title="HOME">justMOVIES</a></div>

			<ul>
				<li>
					<input type="radio" name="nav-group" id="about" class="nav-option">
					<label for="about" class="nav-item"> <a href="about.php">ABOUT </a></label>		
					<label for="nav-close" class="nav-close"></label>


				</li>

				<li>
					<input type="radio" name="nav-group" id="movies" class="nav-option">
					<label for="movies" class="nav-item"> MOVIES </label>	
					<label for="nav-close" class="nav-close"></label>
					

					<div class="nav-content">


						<div class="nav-sub">
							<ul>
								<?php 
									include('getMovies.php');
									$movies= get_Title();

									foreach ($movies as $movie) {
										echo "<li><a href='".$movie.".php'>".$movie."</a></li>";
									}

								?>
							</ul>							
						</div>
					</div>	

				</li>

				<li>
					<input type="radio" name="nav-group" id="booking445" class="nav-option">
					<label for="booking445" class="nav-item"> <a href="booking/booking.php">BOOKING</a> </label>
					<label for="nav-close" class="nav-close"></label>	
					
				</li>

				<li>
					<input type="radio" name="nav-group" id="contact" class="nav-option">
					<label for="contact" class="nav-item"> <a href="contact.php">CONTACT</a> </label>
					<label for="nav-close" class="nav-close"></label>	
					
				</li>

			</ul>

		</nav>

		<input type="radio" name="nav-group" id="nav-close" class="nav-close-option">

		<div class="sidebar">
			<ul>
				<br />
				<li class="sideTitle">MOVIES</li><br />

				<?php 

					$movies= get_Title();

					foreach ($movies as $movie) {
						echo "<li class='sideTitle' id='moviesMain'><a href='".$movie.".php'> ".$movie." </a></li>";
					}

				?>

				<br /><br /><br />
				<li class="sideTitle" id="moviesMain"><a href="movies.php"> MOVIES </a></li>	
				<li class="sideTitle" id="mainPage"><a href="main.php"> HOME </a></li>

				

			</ul>
		</div>


		<img src="images/BG.png" width="1150" height="560" id="bgImage" />
	
		<div class="brief" id="BMB">
			<h2>DILWALE DULHANIYA LE JAYENGE</h2>
			<img src="images/Classic/DDLJ/DDLJPoster1.png" width="300" height="400" />

		</div>

		<div class="storyTable">

			<div class="storyline">
				
				<table>
				<tr><td >Genre:</td></tr>
				<tr><td >IMDB:</td></tr>
				<tr><td >Main Cast:</td></tr>
				<tr><td >Storyline:</td></tr>
				</table>
			</div>
			<div class="supportColumn">
				<table >				
				<tr><td>Comedy, Drama</td></tr>
				<tr><td>8.5</td></tr>
				<tr><td>Shah Rukh Khan, Kajol, Amrish Puri </td></tr>
				<tr><td>A young man and woman - both of Indian descent but born and raised in Britain - fall in love during a trip to Switzerland. However, the girl's traditional father takes her back to India to fulfill a betrothal promise.</td></tr>
				</table>
			<div class="bookTheTicket">
				<a href="booking/booking.php">BOOK NOW!</a>
			</div>
		</div>

		<div class="price">
			<img src="images/pound 15.png" width="350" height="350">

		</div>
		

		<div class="cancelstuff"> <a href="booking/cancelBooking.php">
			<img src="images/cancel.png" width="135" height="60" id="cancelImg" />
		</div>

	</body>


</html>