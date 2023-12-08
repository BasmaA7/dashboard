<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peaplepertatask";

$conx = mysqli_connect($servername, $username, $password,$dbname);
if (!$conx) die("Connection failed: " . mysqli_connect_error());
// else echo 'connexion succes';

?>