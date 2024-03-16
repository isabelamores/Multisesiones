<?php
session_start();

echo '<h2>'.$_SESSION["user"].'</h2>';

$_SESSION["id"]=null;
$_SESSION["user"]=null;
session_unset();
session_destroy();
header("location: index.php");

exit();