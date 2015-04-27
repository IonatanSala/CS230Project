<?php

$queryUsers = 'SELECT * FROM users';
$resultUsers = pg_query($queryUsers) or die('Query failed: ' . pg_last_erro());

// Make a 2 dimensional array to hold all the the users
$myUsers = array();

// Get all users from the database and store in $myUsers
while ($line = pg_fetch_array($resultUsers, null, PGSQL_ASSOC)) {
  $myUsers[] = $line;
}

?>
