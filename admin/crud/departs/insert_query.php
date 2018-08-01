<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$date_debut = $_POST["date_debut"];
$prix = $_POST["prix"];
$nb_places = $_POST["nb_places"];
$sejour_id = $_POST["sejour_id"];

insertDepart($date_debut, $prix, $nb_places, $sejour_id);

header("location: index.php");

