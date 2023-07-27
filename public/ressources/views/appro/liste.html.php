<div class="container mt-5">
    <div class="card mt-5">
        <div class="card-header ">
            <div class="row">
                <div class="col-12">
                    <h4 class="card-title text-center">Liste des Approvisionnement</h4>
                </div>
                <div class="col-12 mt-3">
                    <form method="get" action="<?= WEB_URL ?>">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <input type="date" class="form-control" name="date-appro" id="" aria-describedby="helpId" placeholder="Filtrer par date">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <select class="select form-control" name="paiement">
                                        <option value="" selected disabled>Filtrer par payement</option>
                                        <option value="1">Payés</option>
                                        <option value="0">Impayés</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-outline-secondary" name="btn-recherche">OK</button>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="path" value="filtrer">
                    </form>
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
                        <th scope="col">Status</th>
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
                            <td><?= $data->formatPaiement() ?></td>
                            <td>
                                <a name="" id="" class="btn btn-outline-info" href="<?= WEB_URL . "?path=detailappro&id=" . $data->id ?>" role="button">Details</a>
                                <?php if(!$data -> paiement): ?>
                                <a name="" id="payement" class="btn btn-outline-light" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" role="button" data-appro="<?=$data->id?>">Paiement</a>
                                <?php endif;?>
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form method="post" action="<?= WEB_URL ?>">
                    <input type="hidden" id="id_appro" class="form-control" name="id_appro" value="0">
                    <input type="hidden" class="form-control" name="path" value="update-paiement">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?=asset("js/script.js")?>"></script>