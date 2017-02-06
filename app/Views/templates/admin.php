<?php
array_filter($boutiques);
if(!empty($boutiques))
{
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title> Gestion Les Jardiniers Modernes </title>
<link rel="stylesheet" href="<?= BASE_URL ?>css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?= BASE_URL ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/modernizr.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/custom.js"></script>
<script type="text/javascript" src="<?= BASE_URL ?>js/mailbox.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.taglist .close').click(function(){
		jQuery(this).parent().remove();
		return false;
	});	

    // dynamic table
    jQuery('#dyntable').dataTable({
        "language": {
            "sProcessing": "Traitement en cours ...",
            "sLengthMenu": "Afficher _MENU_ lignes",
            "sZeroRecords": "Aucun résultat trouvé",
            "sEmptyTable": "Aucune donnée disponible",
            "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
            "sInfoEmpty": "Aucune ligne affichée",
            "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
            "sInfoPostFix": "",
            "sSearch": "Chercher:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Chargement...",
            "oPaginate": {
              "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
            },
            "oAria": {
              "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
            }
          },
        "sPaginationType": "full_numbers",
        "aaSortingFixed": [[0,'asc']],
        "fnDrawCallback": function(oSettings) {
            jQuery.uniform.update();
        }
    });
    
});
</script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',
    plugins: [
    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
  ],

  toolbar1: " bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect | cut copy paste | bullist numlist | blockquote | undo redo ",
  toolbar2: " link unlink anchor image media code | insertdatetime preview | forecolor backcolor | table | charmap emoticons | print fullscreen",
  toolbar3: "",

  menubar: false,
  toolbar_items_size: 'small',

  style_formats: [{
    title: 'Bold text',
    inline: 'b'
  }, {
    title: 'Red text',
    inline: 'span',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Red header',
    block: 'h1',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Example 1',
    inline: 'span',
    classes: 'example1'
  }, {
    title: 'Example 2',
    inline: 'span',
    classes: 'example2'
  }, {
    title: 'Table styles'
  }, {
    title: 'Table row 1',
    selector: 'tr',
    classes: 'tablerow1'
  }],

  templates: [{
    title: 'Test template 1',
    content: 'Test 1'
  }, {
    title: 'Test template 2',
    content: 'Test 2'
  }],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard.html"><span id="title2" style="left: -2000px;color: white;font-size: 20px;text-shadow: 0px 4px 7px rgba(0, 0, 0, 0.83);left: 0px;">Les Jardiniers <span style="color:#A5B90C;">modernes</span></span></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php if(count($messages_non_lu)>0){?><span class="count" style="background-color:red;background-color: red;color: white!important;opacity: 1;width: 12px;text-align: center;">
                            <?= count($messages_non_lu) ?></span><?php }?>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">Messages</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Messages</li>
                        <?php if(count($messages_non_lu)>0){echo "<li style='text-align:center;'><a style='color:red;font-weight:bold;' href=#>".count($messages_non_lu)." NOUVEAUX MESSAGES </a></li>";}else{echo "<a href=#><li style='text-align:center;'>PAS DE NOUVEAUX MESSAGES</a></li>";} ?>
                        <?php foreach ($messages_non_lu as $message) {?>
                            <li><a href="<?= BASE_LINK ?>/messages/index"><span class="icon-envelope"></span> 
                                Nouveau message de <strong><?= $message->prenom ." ". $message->nom ?> </strong> 
                                <small class="muted"> - reçu le <?php $send = new DateTime($message->send);?><?= $send->format('d/m/Y à H:i:s') ?></small></a></li>               
                        <?php } ?>

                        <li class="viewmore"><a href="<?= BASE_LINK ?>/messages/index"><span class="icon-inbox"></span> Boite de réception</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="head-icon head-download"></span>
                        <span class="headmenu-label">Espace de téléchargement</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Derniers fichiers ajoutés</li>
                        <?php foreach ($downloads as $download): ?>
                            <li><a href="#"><span class="icon-download-alt"></span> 
                                <strong><?= $download->name ?> </strong> 
                                <small class="muted"> - déposé le <?php $date = new DateTime($download->date_add);?><?= $date->format('d/m/Y à H:i:s');?> </small></a></li>               
                        <?php endforeach; ?>

                        <li class="viewmore"><a href="<?= BASE_LINK ?>/downloads/index"><span class="icon-list"></span> Voir tous les téléchargements</a></li>
                    </ul>
                </li>
                 <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count"></span>
                    <span class="head-icon head-eye"></span>
                    <span class="headmenu-label">Voir ma page</span>
                    </a>
                    <style>
                    .icon-align-left {
                   background-position: -95px -120px!important;}
                    </style>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Voir : </li>
                        <?php foreach ($boutiques as $boutique): ?>
                        <li><a href="http://www.lesjardiniersmodernes.fr/index.php/boutiques/show/<?= $boutique->id_boutique ?>" target="_blank" ><span class="icon-align-left"></span> <?=$boutique->nom?> <strong><?=$boutique->ville?></strong> <small class="muted"></small></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="<?= URL_IMAGE_BOUTIQUE . $_SESSION['photo']?>" alt="" />
                        <div class="userinfo">
                            <h5><?= $_SESSION['prenom']." ". $_SESSION['nom'] ?> - <?= $user->libelle ?></h5>
                            <h6><small><?= $_SESSION['mail']?></small></h6>
                            <ul>
                                <li><a href="<?= BASE_LINK ?>/users/data">Paramètres du compte</a></li>
                                <li><a href="<?= BASE_LINK ?>/users/disconnect">Se déconnecter</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    
    <div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Gestion de ma page</li>
                <li><a href="<?= BASE_LINK ?>/boutiques/index"><span class=" iconfa-pencil"></span> Ma page </a></li>
                <li><a href="<?= BASE_LINK ?>/promos/index"><span class=" iconfa-flag"></span> Mes Promos </a></li>
                <li><a href="<?= BASE_LINK ?>/medias/index"><span class=" iconfa-picture"></span> Mes Images </a></li>
                <li><a href="<?= BASE_LINK ?>/boutiques/map"><span class=" iconfa-map-marker"></span> Carte </a></li>

                <?php if($user->id_droit<3) { ?>
                <li class="nav-header">Gestion LJM</li>
                <li><a href="<?= BASE_LINK ?>/boutiques/index_ljm"><span class=" iconfa-pencil"></span> Gérer les boutiques </a></li>
                <li><a href="<?= BASE_LINK ?>/users/index_ljm"><span class=" iconfa-flag"></span> Gérer les utilisateurs </a></li>
                <li><a href="<?= BASE_LINK ?>/droits/index_ljm"><span class=" iconfa-map-marker"></span> Gérer les droits </a></li>
                <li><a href="<?= BASE_LINK ?>/medias/index"><span class=" iconfa-picture"></span> Gérer les images </a></li>
                <li><a href="<?= BASE_LINK ?>/facilites/index_ljm"><span class=" iconfa-map-marker"></span> Gérer les facilites </a></li>
                <li><a href="<?= BASE_LINK ?>/boutiques/map"><span class=" iconfa-map-marker"></span> Gérer les infos bulles </a></li>
                <?php } ?>
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="#"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="#">Boutique</a> <span class="separator"></span></li>
            <li>Ma boutique</li>
        </ul>
                <!-- Le contenu de mon site -->
                <?= $content ?>

                    <div class="footer">
                        <div class="footer-left">
                            <span>&copy; 2017. Les Jardiniers Modernes. All Rights Reserved.</span>
                        </div>
                    </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
<?php
}else{
    echo "Vous n'êtes pas connecté ! <br />
    <a href='".LOGIN_LINK."'>cliquez ici pour vous connecter</a>";
}
?>