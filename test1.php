<?php 
$dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
    or die('Could not connect: ' . pg_last_error());
$term = $_GET["term"];
echo $term;


$query = "SELECT * FROM games WHERE lower(title) LIKE '%$term%'";

$result = pg_query($dbconn, $query) or die("Error in query: $query.
         " . pg_last_error($db));

// Print result on screen
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    foreach ($line as $col_value) {
        echo $col_value."<br />";
    }
}

pg_close($dbconn); 



?>

