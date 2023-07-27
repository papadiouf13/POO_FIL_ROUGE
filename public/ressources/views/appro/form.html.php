<?php
$errors = [];

if (Session::isset("errors")) {
    $errors = Session::get("errors");
    Session::unset("errors");
}
$arraySelection = isset($_SESSION['selection']) ? $_SESSION['selection'] : [];

// unset($_SESSION['selection']);
?>
<form class="container mt-5" method="post" action="<?= WEB_URL ?>">

    <input type="hidden" class="form-control" name="path" value="store-appro">
    
    <div class="row mb-4 container">
        <div class="col-3">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Article</label>
                <div class="col-12">
                    <select class="select form-control" name="article">
                        <option value="0" selected disabled>Choisir un article</option>
                        <?php foreach (ArticleConfection::all() as $article) : ?>
                            <option value="<?= $article->getId() ?>"><?= $article->getLibelle() ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Quantité de Stock</label>
                <input type="text" name="qtestock" class="form-control  <?= isset($errors[""]) ? 'is-invalid' : "" ?> " />
                <div class="invalid-feedback">
                    <?= $errors["qtestock"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Fournisseur</label>
                <div class="col-12">
                    <select class="select form-control" name="fournisseur">
                        <option value="0" selected disabled>Choisir un fournisseur</option>
                        <?php foreach (Appro::all() as $categorie) : ?>
                            <option value="<?= $categorie->id ?>"><?= $categorie->fournisseur ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
            </div>
        </div>
        <div class="col-2" style="margin-top: 30px;">
            <div class="form-outline">
                <label class="form-label"></label>
                <button name="OK" value="OK" class="btn btn-secondary">OK </button>
            </div>
        </div>

    </div>



    <div class="container mt-4">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Del</th>
                    <th scope="col">Article</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php $total = 0;?>
                <?php foreach ($arraySelection as $value) : ?>
                    <?php if (is_array($value)) : ?> <!-- Ajoutez cette vérification ici -->
                        <tr>
                            <th scope="row"><button data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">X</button></th>
                            <td><?= $value['article'] ?? '' ?></td>
                            <td><?= $value['qtestock'] ?? '' ?></td>
                            <td><?= $value['prixAchat'] ?? '' ?></td>
                            <td><?= $value['total'] ?? '' ?></td>
                            <?php $total += $value['total'] ?>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="col-md-12 d-flex justify-content-between">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Total</label>
                <input type="text" class="form-control" name="montantTotal" value="<?= isset($total) ? $total : 0  ?>" />
            </div>
            <div class="form-outline">
                <div class="col-2" style="margin-top: 32px;">
                    <input type="submit" name="ENREGISTRER" class="btn btn-secondary" value="ENREGISTRER"/>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    VOULEZ-VOUS CONFIRMER LE PAIEMENT
                </div>

                <div class="modal-footer">
                    <p type="button" class="btn btn-primary oui">OUI</p>
                    <button type="button" class="btn btn-secondary non" data-bs-dismiss="modal">NON</button>
                </div>
            </div>
        </div>
    </div>
</form>