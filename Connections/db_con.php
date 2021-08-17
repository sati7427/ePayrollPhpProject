<?php
$host = "localhost";
$port = "5432";
$dbname = "payRollDB";
$user = "postgres";
$password = "Sathish@222";

 $conn = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
 $dbconn = pg_connect($conn) or die("Could not connect");




// Check connection
 // if($dbconn === false){
  // die("error: could not connect. " .pg_last_error($dbconn));
 // }

?>