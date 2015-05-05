<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<!-- This resets all the css for every browser -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<!-- fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="icons/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>

		<!-- the maing navigation -->
		<header class="nav-header">
			<nav class="navbar">
				<ul class="nav-content">
					<li class="logo"><a href="index.php"><img src="img/logo1.png"></a></li>
					<li><a href="console.php?id=Xbox One">Xbox One</a></li>
					<li><a href="console.php?id=Ps4">PlayStation 4</a></li>
					<li><a href="console.php?id=Xbox 360">Xbox 360</a></li>
					<li><a href="console.php?id=Ps3">PlayStation 3</a></li>
					<li><a href="console.php?id=3DS">Nintendo 3DS</a></li>
					<li><a href="console.php?id=Wii U">Wii U</a></li>
					<li>
						<form class="icon-search-container" action="search-listing.php" method="get">
							<input class="search-container" type="text" name="term" placeholder="Search...">
							<button style="border: 0; background: transparent;" type="submit"><i class="fa fa-search fa-2x"></i></button>
							<!-- <input type="submit" name = "search" value="" /></i> -->
						</form>
					</li>
					<li id= "cart-icon"><a href="#"><i class="fa fa-shopping-cart fa-2x"></i><!-- (0) --></a></li>
				</ul>
			</nav>
		</header>
