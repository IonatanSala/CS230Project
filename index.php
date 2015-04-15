<?php


$featSection = array();
$featSection[0] = array(
	"name" => "Total War Attila",
	"img" => "img/attila.jpg",
	"cost" => 39.99
);
$featSection[1] = array(
	"name" => "Battlefield Hardline",
	"img" => "img/battlefield.jpg",
	"cost" => 44.99
);

$featSection[2] = array(
	"name" => "Bloodborne",
	"img" => "img/bloodborne.jpg",
	"cost" => 64.99
);	

$featSection[3] = array(
	"name" => "Dark Souls 2",
	"img" => "img/darksouls2.jpg",
	"cost" => 44.99
);

$featSection[4] = array(
	"name" => "Call of Duty",
	"img" => "img/COD.jpg",
	"cost" => 59.99
);

$featSection[5] = array(
	"name" => "Final Fantasy",
	"img" => "img/finalfantasy.jpg",
	"cost" => 74.99
);
$featSection[6] = array(
	"name" => "Mortal Kombat",
	"img" => "img/mortalkombatx.jpg",
	"cost" => 65.99
);
$featSection[7] = array(
	"name" => "Resident Evil 2",
	"img" => "img/residentevil2.jpg",
	"cost" => 55.99
);

$title = "Home Page";
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

					foreach ($featSection as $item) {
						
						echo "<li>";
						echo "<a href='product.php'>";
						echo "<img src='" . $item["img"] . "' alt='" . $item["name"] . "' >";
						echo "<div class='info'>";
						echo "<span>" . $item["name"] . "</span>";
						echo "<hr>";
						echo "<span>&euro; " . $item["cost"] . "</span>";
						echo "</div>";
						echo "</a>";
						echo "</li>";
					}
					
				?>
				</ul>
			</div>
		</section>

		<?php include('includes/cart.php'); ?>

<?php include('includes/footer.php'); ?>








