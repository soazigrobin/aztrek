<?php 
require_once '../../../model/database.php';

$list_sejours = getAllSejours();

require_once '../../layout/header.php'; ?>

<h1>Gestion des Séjours</h1>

<a href="insert_form.php" class="btn btn-primary">Ajouter</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Image</th>
            <th>Durée</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_sejours as $sejour) : ?>
        <tr>
            <td><?php echo $sejour["titre"]; ?></td>
            <td>
                <img src="<?php echo SITE_URL . "/uploads/" . $sejour["image"]; ?>" class="img-thumbnail" alt="">
            </td>
            <td><?php echo $sejour["duree"]; ?></td>
            
            <td class="col-actions">
                <form action="delete_query.php" method="post" class="form-delete">
                    <input type="hidden" name="id" value="<?php echo $projet["id"]; ?>">
                    <button type="submit" class="btn btn-danger" title="Supprimer">
                        <i class="fa fa-trash"></i>
                    </button>
                     <a href="update_form.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-warning">
                    <i class="fa fa-edit"></i>
                </a>
                </form>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>