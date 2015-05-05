<?php
  include('includes/connectDB.php');
  $title = $_GET['id'];
  $platform = $title;

  include('includes/header.php');

 ?>
<?php

    $games = array();

    foreach($myGames as $game) {
      if($game["platform"] == $platform) {
        $games[] = $game;
      }
    }

?>


 <!-- FETURED SECTION -->
 <section class="featured">
   <h2><?php echo $platform ?></h2>
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


 <?php include('includes/footer.php'); ?>
