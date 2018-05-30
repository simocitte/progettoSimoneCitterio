<?php

require ("../database/db.php");
$jsonObject = json_decode($_POST['esercente']);

$email = $jsonObject->{'email'};
$password = $jsonObject->{'password'};
$nome = $jsonObject->{'nome'};
$percorsoLogo = $jsonObject->{'percorso_logo'};

$q = "INSERT INTO `amministratore` (email, password, nome, percorso_logo) values ('$email', '$password', '$nome', '$percorsoLogo')";
$r = @mysqli_query($db, $q);
?>
