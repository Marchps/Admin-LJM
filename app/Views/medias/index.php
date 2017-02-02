<div class="pageheader">
            <div class="pageicon"><span class="iconfa-picture"></span></div>
            <div class="pagetitle">
                <h5>Gestion de <?php $txt=($count_btq[0]->cpt==1) ? 'ma boutique' : 'mes boutiques'; echo $txt; ?></h5>
                <h1>Gestion des images</h1>
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
                        <div class="span4 profile-left">
                            <div class="widgetbox tags">
                                    <h4 class="widgettitle">Mes galeries</h4>
                                    <div class="widgetcontent">

                                    <table class="table table-bordered responsive">
                                        <colgroup>
                                            <col class="con0">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>Nom de la galerie</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($galeries as $galerie): ?>
                                            <?php if($galerie->id_boutique==$boutique->id_boutique){?>
                                                <tr>
                                                    <td><?=$galerie->libelle?></td>
                                                </tr>
                                            <?php
                                            } 
                                            ?>
                                        <?php endforeach;?>
                                    
                                        </tbody>
                                    </table>

                                    <form action="<?= BASE_LINK ?>/boutiques/update_houres" method="POST">
                                        <input type="hidden" name="id_btq" value="<?= $boutique->id_boutique ?>">
                                        <p>
                                            <label style="width:20%;float:left">Ajouter une galerie</label>
                                            <span class="field"><input style="width:250px;" type="text" name="galerie" class="input-small" placeholder="Ma nouvelle galerie d'image"></span>
                                        </p>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                    </div>
                            </div>
                            
                        </div>
                        <div class="span8">
                            <div class="widgetbox personal-information">
                                    <h4 class="widgettitle">Mes images</h4>
                                    <div class="widgetcontent">
                                    <table class="table table-bordered responsive">
                                        <colgroup>
                                            <col class="con0">
                                            <col class="con1">
                                            <col class="con0">
                                            <col class="con1">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th>Identifiant</th>
                                                <th>Nom de l'image</th>
                                                <th>chemin</th>
                                                <th>Galerie associée</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($medias as $media): ?>
                                            <?php if($media->id_boutique==$boutique->id_boutique){?>
                                                <tr>
                                                    <td><?=$media->id_image?></td>
                                                    <td><?=$media->path_image?></td>
                                                    <td><?=$media->path_image?></td>
                                                    <td><?=$media->libelle?></td>
                                                </tr>
                                            <?php
                                            } 
                                            ?>
                                        <?php endforeach;?>
                                    
                                        </tbody>
                                    </table>


                             <div class="widgetbox tags">
                                    <h4 class="widgettitle">Ajouter une image</h4>
                                    <div class="widgetcontent">

                                    <form action="<?= BASE_LINK ?>/medias/add" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="ville" value="<?= $boutique->ville ?>">
                                        <input type="hidden" name="nom" value="<?= $boutique->nom ?>">
 
                                        <div class="par">
                                            <label>Ajouter une image :</label>
                                            <input type="file" name="file">
                                        </div>

                                        <p>
                                            <label>Galerie :</label>
                                            <select name="galerie">
                                             <?php foreach ($galeries as $galerie): ?>
                                             <?php if($galerie->id_boutique==$boutique->id_boutique){?>
                                              <option value="<?= $galerie->id_galerie ?>"><?= $galerie->libelle ?></option>
                                              <?php } ?>
                                             <?php endforeach; ?>
                                            </select>
                                        </p>

                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </form>
                                    </div>

                            </div>
                            

                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </div><!--tab-pane-->
                        <?php endforeach; ?>
                    </div><!--tabcontent-->
               </div><!--tabbable-->

