<?php

  $dbconn = pg_connect("host=webcourse.cs.nuim.ie dbname=cs230 user= cs230teamd2 password= ohNgohTo")
  or die('Could not connect: ' . pg_last_error());

?>
