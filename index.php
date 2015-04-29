<?php
// Connect to the DB, get games and users
include('includes/connectDB.php');
//Set the title for this homepage
$title = "Home Page";
// include the header
include('includes/header.php');

 ?>

		<!-- LANDING SECTION -->
		<section class="landing">
			<div class="jumbotron">
				<div>
					<h2>World's largest</h2>
					<h2>video game store</h2>
					<button><a href="#">Learn More</a></button>
				</div>
			</div>
		</section>

		<!-- FETURED SECTION -->
		<section class="featured">
			<h2>Featured Items</h2>
			<hr>
			<div class="featured-items">
				<ul>
				<?php

					for($i = 14; $i<43; $i+=4) {

						echo "<li>";
						echo "<a href='product.php?id=".$i."'>";
						echo "<img src='" . $myGames[$i]["images"] . "' alt='" . $myGames[$i]["title"] . "' >";
						echo "<div class='info'>";
						echo "<span>" . $myGames[$i]["title"] . "</span>";
						echo "<hr>";
						echo "<span>" . $myGames[$i]["price"] . "</span>";
						echo "</div>";
						echo "</a>";
						echo "</li>";

					}
				?>
				</ul>
			</div>
		</section>

		<?php
			// Incude the cart into the homepage
			include('includes/cart.php');
		?>



<?php
	// Include the footer
	include('includes/footer.php');

?>
