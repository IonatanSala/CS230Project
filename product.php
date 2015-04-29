<?php
include('includes/connectDB.php');

$id = $_GET['id'];

// select from database where id == id
$game = $myGames[$id];
// echo that data on page

include('includes/header.php');

?>

	<section class="product">
			<div class="product-content">
				<div class="item-container">
					<img src='<?php echo $game["images"]; ?>' alt="Total War Attila">
				</div>
				<div class="item-description">
					<h2><?php echo $game["title"]; ?></h2>
					<hr>
					<h3><?php echo $game["price"]; ?></h3>
					<div class="product-btn">
						<button class="btn-console"><a href="#">
							<span>SELECT CONSOLE</span>
						</a></button>
						<button class="btn-cart"><a href="#">
							<span>ADD TO CART</span>
						</a></button>
					</div>
					<div class="product-description">
						<p> <?php echo $game["description"]; ?> <p>

					</div>
				</div>
			</div>
	</section>

	<?php include('includes/cart.php'); ?>

<?php include('includes/footer.php'); ?>
