<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdo_db';


$con_bas = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);

if(!$con_bas)
{
    die("Niste spojeni na bazu podataka " . mysqli_error($con_bas));

}



?>