<?php

function getSejour(int $id): array {
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



function getAllSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT 
                sejour.*,
                pays.nom AS pays,
                difficulte.libelle AS difficulte,
                MIN(depart.prix) AS prix
            FROM sejour
            INNER JOIN pays ON sejour.pays_id = pays.id
            INNER JOIN difficulte ON sejour.difficulte_id = difficulte.id
            LEFT JOIN depart ON depart.sejour_id = sejour.id
            WHERE depart.date_debut > NOW() OR depart.date_debut IS NULL
            GROUP BY sejour.id
            LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllSejoursByPays(int $id): array {
    global $connexion;

    $query = "SELECT 
sejour.*,
pays.nom AS pays,
difficulte.libelle AS difficulte
FROM sejour
INNER JOIN pays ON pays.id = sejour.pays_id
INNER JOIN difficulte ON difficulte.id = sejour.difficulte_id
WHERE pays.id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertSejour(string $titre, string $image, string $description_courte, string $description_longue, float $duree, string $itineraire, string $suggestions, int $difficulte_id, int $pays_id): int {
/* @var $connexion PDO*/
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, image, description_courte, description_longue, duree, itineraire, suggestion, difficulte_id, pays_id) VALUES (:titre, :image, :description_courte, :description_longue, :duree, :itineraire, :suggestions, :difficulte_id, :pays_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":itineraire", $itineraire);
    $stmt->bindParam(":suggestions", $suggestions);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    
  return $connexion->lastInsertId();
}

function updateSejour(int $id, string $titre, string $image, string $description_courte, string $description_longue, float $duree, string $itineraire, string $suggestion, int $pays_id, int $difficulte_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour
                SET titre = :titre,
                    image = :image,
                    description_courte = :description_courte,
                    description_longue = :description_longue,
                    duree = :duree,
                    itineraire = :itineraire,
                    suggestion = :suggestion,
                    pays_id = :pays_id,
                    difficulte_id = :difficulte_id
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":description_longue", $description_longue);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":itineraire", $itineraire);
    $stmt->bindParam(":suggestion", $suggestion);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}