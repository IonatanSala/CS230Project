<?php

  $dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
  or die('Could not connect: ' . pg_last_error());

  // Query Games from the database
  $queryGames = 'SELECT * FROM games';
  $resultGames = pg_query($queryGames) or die('Query failed: ' . pg_last_error());


  // Make a 2 dimensional array to hold all the games
  $myGames = array();

  // Get all games from the database and store in $myGames
  while ($line = pg_fetch_array($resultGames, null, PGSQL_ASSOC)) {
    $myGames[] = $line;
  }

  // Get Users from the database
  $queryUsers = 'SELECT * FROM users';
  $resultUsers = pg_query($queryUsers) or die('Query failed: ' . pg_last_erro());

  // Make a 2 dimensional array to hold all the the users
  $myUsers = array();

  // Get all users from the database and store in $myUsers
  while ($line = pg_fetch_array($resultUsers, null, PGSQL_ASSOC)) {
    $myUsers[] = $line;
  }

  // Free resultset
  pg_free_result($result);

  // Closing connection
  pg_close($dbconn);


?>
