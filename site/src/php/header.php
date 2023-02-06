
<!DOCTYPE html>
<html lang="fr">
	<head>
		<!--
		Auteur      : Bajro Osmanovic, Thomas Intriere, Miljana Despotovic
		Date        : 23.01.2023
		Description : The header file of the project done with the bootstrap template
		-->			
			<meta charset="utf-8"/>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!--- the links for bootstrap css and javascript -->		
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
			<!-- The css of the project -->
			<link href="<?= $pathCss?>styleSheetSport.css" rel="stylesheet" type="text/css"/>
			<title><?= $pageName //the title of the page?></title>
			<!-- add icon link -->
			<link rel = "icon" type = "image/x-icon" href = "<?= $pathIcon ?>book.png">
	</head>
	<!-- The body-->
	<body class="bg-white text-dark" >
		<!-- The navigation bar-->
		<nav class="navbar navbar-expand-lg" style="background-color: #DFDFDF;">
			<div class="container-fluid">
				<!-- The logo-->
				<a class="navbar-brand" href="<?=$pathHome // path to the index of the page ?>">
      				<img src="<?= $pathIcon ?>logo.png" alt="Logo" width="60" height="54">
    			</a>

				<!-- The navbar options-->
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link <?= $activeHome ?>" aria-current="page" href="<?= $pathHome; ?>index.php">Accueil</a>
					</li>

					<li class="nav-item">
						<a class="nav-link <?= $activeSwipes ?>" href="<?= $pathSwipe ?>Swipes.php">Swipe</a>
					</li>

					<?php

					// if the user is connected we display the add the book option
					if(isset($_SESSION["isConnected"])&&$_SESSION["isConnected"]==1)
					{
					?>
						<li class="nav-item">
							<a class="nav-link <?= $activeAdd ?>" href="<?= $pathAdd ?>addBook.php">Add a book</a>
						</li>
					<?php
					}
					?>
					
					</ul>
					<?php
						// the button for connection of the user
						// if the user is not connected / if the connection doesn't existt
						if(!isset($_SESSION["isConnected"]))
						{
							// we display the button for login which goes to the login formulary
							?>
							<div class="float-right">
									<a class="nav-link" id="btnLogin" href="<?= $pathLogin ?>login.php">Login</a>
							</div>
							<?php
						}
						//otherwise
						else
						{
							// we display the name of the user and the icon which links to the profile of the user
							?>
							<a class="navbar-brand" href="#">
								<a href='<?= $pathUserInfo?>user.php'>
									<div>
										<img src="<?= $pathUser ?>userIcon.png" alt="User Icon" width="30" height="30">
										<?=$_SESSION["username"] ?>
									</div>	 
								</a>
							</a>					
							<?php
						}
						?>
				</div>
			</div>
		</nav>
