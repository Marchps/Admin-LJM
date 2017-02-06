                <h4 class="widgettitle">Liste des téléchargements</h4>
                <table id="dyntable" class="table table-bordered">
                    <colgroup>
                        <col class="con0" style="align: center; width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="head0">ID</th>
                            <th class="head0">Nom</th>
                            <th class="head1">Enseigne</th>
                            <th class="head0">Ville</th>
                            <th class="head1">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($boutiques_ljm as $btq): ?>
                        <tr class="gradeX">
                            <td><?= $btq->id_boutique ?></td>
                            <td><?= $btq->nom ?></td>
                            <td><?= $btq->enseigne ?></td>
                            <td><?= $btq->ville ?></td>
                            <td>
                                <input type="button" traget="_blank" value="Editer" onclick="<?= BASE_LINK ?>/boutiques/edit/<?= $btq->id_boutique ?>">
                                <input type="button" traget="_blank" value="Supprimer" onclick="<?= BASE_LINK ?>/boutiques/delete/<?= $btq->id_boutique ?>">
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>