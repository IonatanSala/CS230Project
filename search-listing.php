<?php
include('includes/header.php');
$dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
    or die('Could not connect: ' . pg_last_error());
$term = $_GET["term"];
// echo $term;


$query = "SELECT * FROM games WHERE lower(title) LIKE '%$term%'";

$result = pg_query($dbconn, $query) or die("Error in query: $query.
         " . pg_last_error($db));

$games = array();
// Print result on screen
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    $games[] = $line;
}

pg_close($dbconn);



?>


<section class="featured">
  <h2><?php echo "Results"; ?></h2>
  <hr>
  <div class="featured-items">
    <ul>
    <?php

      foreach($games as $game) {

        echo "<li>";
        echo "<a href='product.php?id=".$game["id"]."'>";
        echo "<img src='" . $game["images"] . "' alt='" . $game["title"] . "' >";
        echo "<div class='info'>";
        echo "<span>" . $game["title"] . "</span>";
        echo "<hr>";
        echo "<span>" . $game["price"] . "</span>";
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
