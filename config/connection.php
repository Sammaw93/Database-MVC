<?php
// connect to MySQL
$db = mysql_connect("localhost", "u1362360", "03dec93") or 
    die ('cannot connect');

//make sure you're using the correct database
mysql_select_db("u1362360", $db) or die(mysql_error($db));
?>