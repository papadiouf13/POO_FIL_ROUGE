<?php
$errors = [];
if (Session::isset("errors")) {
    $errors = Session::get("errors");
    Session::unset("errors");
}
?>
<form class="container mt-5" method="post" action="<?= WEB_URL ?>">
    <div class="row mb-4 container">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Libelle</label>
                <input type="text" name="libelle" class="form-control  <?= isset($errors["libelle"]) ? 'is-invalid' : "" ?> " />
                <div class="invalid-feedback">
                    <?= $errors["libelle"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Prix Achat</label>
                <input type="text" name="prixAchat" class="form-control  <?= isset($errors["prixAchat"]) ? 'is-invalid' : "" ?> " />
                <div class="invalid-feedback">
                    <?= $errors["prixAchat"] ?? "" ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4 container">
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Quantite Stock</label>
                <input type="text" name="qteStock" class="form-control  <?= isset($errors["qteStock"]) ? 'is-invalid' : "" ?> " />
                <div class="invalid-feedback">
                    <?= $errors["qteStock"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Categorie</label>
                <div class="col-12">
                    <select class="select form-control" name="categorieId">
                        <option value="0" selected disabled>Choisir une categorie</option>
                        <?php foreach (Categorie::all() as $categorie) : ?>
                            <option value="<?= $categorie->getId() ?>"><?= $categorie->getLibelle() ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center">
            <button type="submit" class="btn btn-secondary btn-block mt-4">ENREGISTRER </button>
        </div>
    </div>
    <input type="hidden" class="form-control" name="path" value="store-article">
</form>