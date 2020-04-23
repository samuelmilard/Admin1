<?php

require ('class_database.php');
require ('User.php');
$connexion = new database('db5000303646.hosting-data.io','dbs296633', 'dbu526590', '*w6kVB?2');
$bdd = $connexion->PDOConnexion();



$email = !empty($_POST['email']) ? $_POST['email'] : NULL;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;

$user1 = new User($email, $pass);
$user1->connexion($bdd);

?>
