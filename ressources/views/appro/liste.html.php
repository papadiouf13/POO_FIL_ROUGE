<div class="container mt-5">
    <div class="card mt-5">
        <div class="card-header">
            <div class="row">
                <div class="col-12">
                    <h4 class="card-title text-center">Liste des Approvisionnement</h4>
                </div>
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                               
                                <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Filtrer par date">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                               
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Filtrer par statut">
                            </div>
                        </div>
                        <div class="col-4">
                                <button type="button" class="btn btn-outline-secondary">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body bg-white">


            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Fournisseur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datas as  $data) : ?>
                        <tr>
                            <th scope="row"><?= $data->id; ?></th>
                            <td><?= DateEnFrancais($data->dateAppro) ?></td>
                            <td><?= $data->montant ?></td>
                            <td><?= $data->fournisseur ?></td>
                            <td>
                                <a name="" id="" class="btn btn-outline-info" href="<?= WEB_URL . "?path=detailappro&id=" . $data->id ?>" role="button">Details</a>
                                <a name="" id="" class="btn btn-outline-light" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button">Paiement</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
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
                <button type="button" class="btn btn-primary">OUI</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NON</button>
            </div>
        </div>
    </div>
</div>