<?php
$sql =("INSERT INTO games (title,publisher,price,platform,description,images)
VALUES ('Fifa', 'EA', 21.99, 'Xbox One', 'Great game.'");


$ret = pg_query($db, $sql);
if(!$ret){
echo pg_last_error($db);
} else {
echo "Records created successfully\n";
}
pg_close($db);
?>