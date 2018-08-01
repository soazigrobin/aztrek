<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];

insertPays($nom);

header("location: index.php");

