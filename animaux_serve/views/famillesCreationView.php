<?php ob_start();?>

<form method="post" action="<?= URL ?>back/familles/validationCreation">
    <div class="form-group">
    <label for="famille_libelle" class="form-label">Libelle</label>
    <input type="text" class="form-control" id="famille_libelle" name="famille_libelle">
    </div>
    <div class="form-group">
        <label for="famille_description" class="form-label">Description</label>
        <textarea class="form-control" id="famille_description" rows="3" name="famille_description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
$titre = "Creation d'une famille";
require "views/commons/template.php";
