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
                            <th class="head0">Nom</th>
                            <th class="head0">Enseigne</th>
                            <th class="head1">Ville</th>
                            <th class="head0">Etat</th>
                            <th class="head1">ajouté par</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($boutiques_ljm as $btq): ?>
                        <tr class="gradeX">
                            <td><input type="button" traget="_blank" value="Télécharger" onclick="window.location='http://......./"></td>
                            <td><?= $btq->nom ?></td>
                            <td><?= $btq->enseigne ?></td>
                            <td><?= $btq->ville ?></td>
                            <td class="center"><?= $btq->active ?></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>