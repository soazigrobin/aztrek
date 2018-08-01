<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$date_debut = $_POST["date_debut"];
$prix = $_POST["prix"];
$nb_places = $_POST["nb_places"];

UpdateDepart($id, $date_debut, $prix, $nb_places);

header("location: index.php");
