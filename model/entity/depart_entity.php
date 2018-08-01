<?php

function getDepart(int $id): array {
    global $connexion;

    $query = "SELECT 
sejour.*,
pays.nom AS pays,
difficulte.libelle AS difficulte
FROM sejour
INNER JOIN pays ON sejour.pays_id = pays.id
INNER JOIN difficulte ON sejour.difficulte_id = difficulte.id
                WHERE sejour.id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}



function getAllDeparts(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                depart.*,
                DATE_FORMAT(depart.date_debut, '%d/%m/%Y') AS date_debut_format
            FROM depart
            ORDER BY depart.date_debut DESC
            ;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllDepartsBySejour(int $id): array {
    global $connexion;

    $query = "SELECT *

FROM depart
WHERE depart.sejour_id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertDepart(string $date_debut, float $prix, string $nb_places, int $sejour_id): int {
/* @var $connexion PDO*/
    global $connexion;
    
    $query = "INSERT INTO depart (date_debut, prix, nb_places, sejour_id) VALUES (:date_debut, :prix, :nb_places, :sejour_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    $stmt->bindParam(":sejour_id", $sejour_id);
    
    $stmt->execute();
    
    
  return $connexion->lastInsertId();
}

function updateDepart(string $id, string $date_debut, string $prix, string $nb_places): int{
    /* @var $connexion PDO */
    global $connexion;
    
 $query = "UPDATE depart
                SET 
                    date_debut = :date_debut,
                    prix = :prix,
                    nb_places = :nb_places
                    
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nb_places", $nb_places);
    
   
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
    
}


