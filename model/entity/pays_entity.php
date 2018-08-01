<?php
function insertPays(string $nom, string $image): int{
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO pays (nom, photo) VALUES (:nom, :photo)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    
    return $connexion->lastInsertId();   
}
function updatePays(int $id, string $nom, string $image) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE pays SET nom = :nom, image = :photo WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}