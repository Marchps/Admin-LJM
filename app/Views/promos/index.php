<div class="pageheader">
            <div class="pageicon"><span class="iconfa-flag"></span></div>
            <div class="pagetitle">
                <h5>Gestion de <?php $txt=($count_btq[0]->cpt==1) ? 'ma boutique' : 'mes boutiques'; echo $txt; ?></h5>
                <h1>Gestion des promotions</h1>
            </div>
        </div><!--pageheader-->
        <div class="maincontent">
            <div class="maincontentinner">

        <div class="tabbable">
                    <ul class="nav nav-tabs buttons-icons">
                        <?php foreach ($boutiques as $boutique): ?>
                            <li class="<?php if($count_btq[0]->cpt==1){echo'active';}?>"><a data-toggle="tab" href="#<?=$boutique->id_boutique?>"><?=$boutique->nom?> - <?=$boutique->ville?></a></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="tab-content">

                    <?php
                    if($count_btq[0]->cpt>1){
                    ?>
                    <div id="0" class="tab-pane active">
                        Veuillez choisir une boutique.
                    </div>
                    <?php
                    }
                    ?>

                        <?php foreach ($boutiques as $boutique): ?>
                        <div id="<?=$boutique->id_boutique;?>" class="tab-pane <?php if($count_btq[0]->cpt==1){echo'active';}?>">
                        <div class="row-fluid">
                            <div class="widgetbox personal-information">



                                    <table class="table table-bordered responsive">
                                        <colgroup>
                                            <col class="con0">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>Pomotions affichée sur le site</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach ($promos as $promo): ?>
                                            <?php if($promo->id_boutique==$boutique->id_boutique){?>
                                                <tr>
                                                    <td><?=$promo->libelle?></td>
                                                    <td><?=$promo->description?></td>

                                                    <td style="width:25%;"><img class="img-responsive" src="<?= URL_IMAGE_BOUTIQUE ?>promos/<?=$promo->image?>"></td>
                                                </tr>
                                            <?php
                                            } 
                                            ?>
                                        <?php endforeach;?>
                                    
                                        </tbody>
                                    </table>

                                    <h4 class="widgettitle">Ajouter une promotion</h4>
                                    <div class="widgetcontent">
                                    <form action="<?= BASE_LINK ?>/promos/add" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="nom" value="<?= $boutique->nom ?>">
                                        <input type="hidden" name="ville" value="<?= $boutique->ville ?>">
                                        <input type="hidden" name="idbtq" value="<?= $boutique->id_boutique ?>">
                                        <p>
                                            <label>Nom de la promotion :</label>
                                            <input type="text" name="libelle" class="input-xlarge" value="" />
                                        </p>
                                        <p>
                                            <label>Texte concernant la promotion :</label>
                                            <textarea name="contenu_promo" class="span8"></textarea>
                                        </p>

                                        <div class="par">
                                            <label>Importer un encart de promotion :</label>
                                            <input type="file" name="encart_promo">
                                        </div>
                                        <br />
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        </div><!--tab-pane-->
                        <?php endforeach; ?>
                    </div><!--tabcontent-->
               </div><!--tabbable-->

