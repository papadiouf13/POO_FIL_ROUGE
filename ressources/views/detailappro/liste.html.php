<div class="container mt-5">
    <div class="card mt-5">
        <div class="card-body bg-white">
            <h4 class="card-title">Liste des Approvisionnement</h4>
            <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Quantite Appro</th>
                <th scope="col">Article App</th>
                <th scope="col">ApproID</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($datas as  $data): ?>
            <tr>
                <th scope="row"><?= $data->id;?></th>
                <td><?= $data->qteAppro?></td>
                <td><?= $data->articleConfId?></td>
                <td><?= $data->approId?></td>
               
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
        </div>
    </div>
</div>