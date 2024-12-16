<?php
$connection = pg_connect("host=localhost dbname=concertbookingsystem user=postgres password=afidanish");
if (!$connection) {
    echo "An error occured.<br>";
    exit;
}

$result = pg_query($connection, "SELECT * FROM customer");
if (!$result) {
    echo "An error occured.<br>";
    exit;
}
?>
