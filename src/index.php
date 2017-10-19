<?php 
echo "<html><body>";

echo "<h1> Bonjour Cyrille ! </h1><br><br><br>";

$date = date("d/m/Y");
$heure = date("H:i");
Print("Nous sommes le $date et il est $heure <br><br><br>");


echo "Merci Pierre 2017 &#9400;";
echo "</body></html>";

$host = "localhost";
$user = "root";
$pass = "mypass";
$dbname = "test";
try{
    $con = new PDO('mysql:dbname=test;host=db',$user,$pass);
}catch(Exception $ex){
	die('Erreur : '.$ex->getMessage());
}
//$pMysqli = new mysqli('p:'.$host, $user, $pass, $dbname);
//$con=mysqli_connect($host,$user,$pass,$dbname);
var_dump($con);
