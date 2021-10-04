<?php ob_start();?>

<form method="post" action="<?= URL ?>back/animaux/validationModification" encrtype="multipart/form-data">
    <input type="hidden" name="animal_id" value="<?  $animal['animal_id']?>"/>
    <div class="form-group">
        <label for="animal_nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="animal_nom" name="animal_nom" value="<?= $animal['animal_nom'] ?>">
    </div>
    <div class="form-group">
        <label for="animal_description" class="form-label">Description</label>
        <textarea class="form-control" id="animal_description" rows="3" name="animal_description">
            <?= $animal['animal_nom'] ?>
        </textarea>
    </div>
    <div class="form-group">
        <img src="<?= URL?>public/images/<?= $animal['animal_image']?>" style="width:50px"/>
        <label for="image" class="form-label">Image</label>
        <input class="form-control-file" type="file" id="image" name="image">
    </div>
    <div class="form-group">
    <label for="image" class="form-label">Famille</label>
        <select class="form-control" name="famille_id">
            <?php foreach ($familles as $famille) : ?>
                <option value="<?= $famille['famille_id']?>" <?php if($famille['famille_id'] === $animal['famille_id']) echo "selected"; ?> >
                    <?= $famille['famille_id']?> - <?= $famille['famille_libelle']?>
                </option>
            <?php endforeach;?>
        </select>
    </div>

    <div class="row no-gutters">
        <div class="col-1"></div>
        <?php foreach($continents as $continent) : ?>
            <div class="form-group form-check col-2">
                <input class="form-check-input" type="checkbox" value="" name="continent-<?= $continent['continent_id']?>">
                    <?php if(in_array($continent['continent_id'],$tabContinent)) echo "checked";?>
                <label class="form-check-label" for="flexCheckDefault"><?= $continent['continent_libelle'] ?></label>
            </div>
            <?php endforeach;?>
            <div class="col-1"></div> 
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </div>
</form>

<?php
$content = ob_get_clean();
$titre = "Modification de l'animal : ".$lignesAnimal[0]['animal_nom'];
require "views/commons/template.php";
?>
