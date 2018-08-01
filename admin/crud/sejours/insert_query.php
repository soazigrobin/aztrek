<?php
require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$titre = $_POST["titre"];
$description_courte = $_POST["description_courte"];
$description_longue = $_POST["description_longue"];
$duree = $_POST["duree"];
$itineraire = $_POST["itineraire"];
$suggestion = $_POST["suggestions"];
$difficulte_id = $_POST["difficulte_id"];
$pays_id = $_POST["pays_id"];



// Upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $image);

// Enregistrement en base de données
insertSejour($titre, $image, $description_courte, $description_longue, $duree, $itineraire, $suggestion, $difficulte_id, $pays_id);

// Redirection vers la liste
header("Location: index.php");