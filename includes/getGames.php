<?php

$queryGames = 'SELECT * FROM games';
$resultGames = pg_query($queryGames) or die('Query failed: ' . pg_last_error());


// Make a 2 dimensional array to hold all the games
$myGames = array();

// Get all games from the database and store in $myGames
while ($line = pg_fetch_array($resultGames, null, PGSQL_ASSOC)) {
  $myGames[] = $line;
}

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

// var_dump($myGames);

?>
