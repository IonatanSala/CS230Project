<html>
    <head>
        <title>AdminAccess</title> 

    </head>
    <body>
<?php
$dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
    or die('Could not connect: ' . pg_last_error());

$sql =("INSERT INTO games (title,publisher,price,platform,description,images)
VALUES ('test2', 'test2', 21.99, 'test', 'Great game.','imagepath')");


$ret = pg_query($dbconn, $sql);
if(!$ret){
echo pg_last_error($dbconn);
} else {
echo "Records created successfully\n";
}
pg_close($dbconn);
?>






    </body>
</html>