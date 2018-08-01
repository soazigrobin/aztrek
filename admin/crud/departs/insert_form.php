<?php
require_once '../../../model/database.php';

$list_sejours = getAllEntities("sejour");

require_once '../../layout/header.php';
?>

<h1>Ajouter un départ</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    
     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Séjours</label>
        <div class="col-sm-10">
            <select name="sejour_id" class="form-control">
                <?php foreach ($list_sejours as $sejour): ?>
                    <option value="<?php echo $sejour["id"]; ?>">
                        <?php echo $sejour["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de départ</label>
        <div class="col-sm-10">
            <input type="date" name="date_debut" class="form-control" placeholder="départ">
        </div>
      </div>
    
       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" class="form-control" placeholder="prix">
        </div>
      </div>
    
         <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de places</label>
        <div class="col-sm-10">
            <input type="number" name="nb_places" class="form-control">
        </div>
      </div>
    
  
    </div>
    
      <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
      </button>
        
</form>
    

<?php require_once '../../layout/footer.php'; ?>
