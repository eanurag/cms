<?php
include 'config.php';

function dbconnect($server, $user, $password, $db) {
$conn = @mysql_pconnect($server, $user, $password); // "@" is necessary.
if(!$conn) 
{
header("Location: install/");
//echo "kunal";
exit;
}
else{}
if(!mysql_select_db($db, $conn)) 
{
header("Location: install/");
exit;
}
}
?>