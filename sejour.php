<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);
$list_departs = getAllDepartsBySejour($id);


get_header($sejour["titre"]);
?>

<section class="container">
    <h1><?php echo $sejour["titre"]; ?></h1>


    <img src="<?php echo get_avatar($sejour["image"]); ?>" alt="">
    <em><?php echo $sejour["duree"]; ?>jours</em>
    <em><?php echo $sejour["description_courte"]; ?></em>
    <p><?php echo $sejour["itineraire"]; ?></p>

    <?php foreach ($list_departs as $depart) : ?>
        <article>
            <p>Dates de départ : <?php echo $depart["date_debut"]; ?></p>
            <p>Prix : <?php echo $depart["prix"]; ?>€</p>
            
        </article>
    <?php endforeach; ?>
    
    <aside class="list-users">
        <?php if (!empty($utilisateur)) : ?>       
        <form action="insert_reservation.php" method="post">
            Réserver
            <input type="number" name="nb_voyageurs"> personnes
            <input type="hidden" name="sejour_id" value="<?php echo $id ?>">
            <input type="submit" value="<?php echo $id ?>">
        </form>
         <?php endif ; ?>
        <?php foreach ($list_participations as $participation) : ?>
            <article>
                <img src="<?php echo get_avatar($participation["photo"]); ?>" alt="">
                <div>
                    <a href="user.php?id=<?php echo $participation["utilisateur_id"]; ?>"><?php echo $participation["nom"] . " " . $participation["prenom"]; ?></a>
                    <em><?php echo $participation["montant"]; ?> €</em>
                </div>
            </article>
        <?php endforeach; ?>
    </aside>


</section>

<?php get_footer(); ?>
