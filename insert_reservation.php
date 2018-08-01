
<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();


$nb_personnnes = $_POST["nb_personnnes"];
$utilisateur_id = $utilisateur["id"];
$depart_id = $_POST["depart_id"];

insertReservation($nb_personnnes, $depart_id, $utilisateur_id);

header("Location: project.php?id=" . $sejour_id);