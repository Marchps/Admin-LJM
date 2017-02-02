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
                            <th class="head0">Télécharger</th>
                            <th class="head0">Nom du fichier</th>
                            <th class="head1">type</th>
                            <th class="head0">Date d'ajout</th>
                            <th class="head1">ajouté par</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($downloads as $download): ?>
                        <tr class="gradeX">
                            <td><input type="button" traget="_blank" value="Télécharger" onclick="window.location='http://......./<?= $download->real_name ?>';"></td>
                            <td><?= $download->name ?></td>
                            <td><?= $download->type ?></td>
                            <td><?= $download->date_add ?></td>
                            <td class="center"><?= $download->creator ?></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>


