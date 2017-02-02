<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>
<link rel="stylesheet" href="web/css/style.default.css" type="text/css" />
<script type="text/javascript" src="web/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="web/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="web/js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="web/js/modernizr.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="web/js/jquery.cookie.js"></script>
<script type="text/javascript" src="web/js/custom.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.taglist .close').click(function(){
		jQuery(this).parent().remove();
		return false;
	});
	
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
            <?= print_r($_SESSION);?>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard.html"><span id="title2" style="left: -2000px;color: white;font-size: 20px;text-shadow: 0px 4px 7px rgba(0, 0, 0, 0.83);left: 0px;">Les Jardiniers <span style="color:#A5B90C;">modernes</span></span></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="count">4</span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">Messages</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Messages</li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Jack</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Jane</strong> <small class="muted"> - 3 days ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Tanya</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li><a href=""><span class="icon-envelope"></span> New message from <strong>Lee</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li class="viewmore"><a href="messages.html">View More Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">10</span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">New Users</span>
                    </a>
                    <ul class="dropdown-menu newusers">
                        <li class="nav-header">New Users</li>
                        <li>
                            <a href="">
                                <img src="web/images/photos/thumb1.png" alt="" class="userthumb" />
                                <strong>Draniem Daamul</strong>
                                <small>April 20, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="web/images/photos/thumb2.png" alt="" class="userthumb" />
                                <strong>Shamcey Sindilmaca</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="web/images/photos/thumb3.png" alt="" class="userthumb" />
                                <strong>Nusja Paul Nawancali</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="web/images/photos/thumb4.png" alt="" class="userthumb" />
                                <strong>Rose Cerona</strong>
                                <small>April 18, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="web/images/photos/thumb5.png" alt="" class="userthumb" />
                                <strong>John Doe</strong>
                                <small>April 16, 2013</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">1</span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">Statistics</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Statistics</li>
                        <li><a href=""><span class="icon-align-left"></span> New Reports from <strong>Products</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> New Statistics from <strong>Users</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> New Statistics from <strong>Comments</strong> <small class="muted"> - 3 days ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> Most Popular in <strong>Products</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li><a href=""><span class="icon-align-left"></span> Most Viewed in <strong>Blog</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li class="viewmore"><a href="charts.html">View More Statistics</a></li>
                    </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="web/images/photos/thumb2.png" alt="" />
                        <div class="userinfo">
                            <h5>Angelina Jolo<small>- angelina@hydroetculture.com</small></h5>
                            <ul>
                                <li><a href="editprofile.html">Modifier mon compte</a></li>
                                <li><a href="">Paramètres du compte</a></li>
                                <li><a href="index.html">Se déconnecter</a></li>
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
            	<li class="nav-header">Navigation</li>
                <li><a href="dashboard.html"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li><a href="buttons.html"><span class="iconfa-hand-up"></span> Buttons &amp; Icons</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-pencil"></span> Forms</a>
                	<ul>
                    	<li><a href="forms.html">Form Styles</a></li>
                        <li><a href="wizards.html">Wizard Form</a></li>
                        <li><a href="wysiwyg.html">WYSIWYG</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-briefcase"></span> UI Elements &amp; Widgets</a>
                	<ul>
                    	<li><a href="elements.html">Theme Components</a></li>
                        <li><a href="bootstrap.html">Bootstrap Components</a></li>
                        <li><a href="boxes.html">Headers &amp; Boxes</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span> Tables</a>
                	<ul>
                    	<li><a href="table-static.html">Static Table</a></li>
                        <li><a href="table-dynamic.html">Dynamic Table</a></li>
                    </ul>
                </li>

                <li><a href="media.html"><span class="iconfa-picture"></span> Media Manager</a></li>
                <li><a href="typography.html"><span class="iconfa-font"></span> Typography</a></li>
                <li><a href="charts.html"><span class="iconfa-signal"></span> Graph &amp; Charts</a></li>
                <li><a href="messages.html"><span class="iconfa-envelope"></span> Messages</a></li>
                <li><a href="calendar.html"><span class="iconfa-calendar"></span> Calendar</a></li>
                <li class="dropdown active"><a href=""><span class="iconfa-book"></span> Other Pages</a>
                	<ul style="display:block">
                        <li><a href="404.html">404 Error Page</a></li>
                        <li class="active"><a href="editprofile.html">Ma boutique</a></li>
                        <li><a href="invoice.html">Invoice Page</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="editprofile.html">Boutique</a> <span class="separator"></span></li>
            <li>Ma boutique</li>
        </ul>
        
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5>Hydro et Culture Brest</h5>
                <h1>Ma boutique</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    	<div class="span4 profile-left">
                        
                        <div class="widgetbox profile-photo">
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Change Photo</a></li>
                                      <li><a href="#">Remove Photo</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Photo de présentation</h4>
                            </div>
                            <div class="widgetcontent">
                                <div class="profilethumb">
                                    <img src="http://www.hydroetculture.com/lesjardiniersmodernes/web/images/photos/Hydro%20Et%20Culture-Brest/brest-1.jpg" alt="" class="img-polaroid" />
                                </div><!--profilethumb-->
                            </div>
                        </div>

                        <div class="widgetbox profile-photo">
                            <div class="headtitle">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Change Photo</a></li>
                                      <li><a href="#">Remove Photo</a></li>
                                    </ul>
                                </div>
                                <h4 class="widgettitle">Logo de la boutique</h4>
                            </div>
                            <div class="widgetcontent">
                                <div class="profilethumb">
                                    <img src="http://hydroetculture.com/img/cms/Hydro-Brest.jpg" alt="" class="img-polaroid" />
                                </div><!--profilethumb-->
                           </div>
                        </div>
                            
                            
                        <div class="widgetbox tags">
                                <h4 class="widgettitle">Facilités</h4>
                                <div class="widgetcontent">
                                    <ul class="taglist">
                                        <li><a href="">Parking <span class="close">&times;</span></a></li>
                                        <li><a href="">Accessibilité personnes handicapés <span class="close">&times;</span></a></li>
                                        <li><a href="">Retrait des commandes sur place <span class="close">&times;</span></a></li>
                                        <li><a href="">Livraison Chronopost <span class="close">&times;</span></a></li>
                                        <li><a href="">Paiement en 3x sans frais <span class="close">&times;</span></a></li>
                                        <li><a href="">Personnel habilité phytosanitaire <span class="close">&times;</span></a></li>
                                    </ul>
                                    <a href="" style="display:block;margin-top:10px">+ Ajouter une facilité</a>
                                </div>
                        </div>
                            
                        <div class="widgetbox tags">
                                <h4 class="widgettitle">Promotions</h4>
                                <div class="widgetcontent">
                                    <ul class="taglist">
                                        <li><a href="">Commandez et payez en 3x sans frais avec votre CB<span class="close">&times;</span></a></li>
                                        <li><a href="">Promo -5% sur les Engrais<span class="close">&times;</span></a></li>
                                    </ul>
                                    <a href="" style="display:block;margin-top:10px">+ Ajouter une promotion</a>
                                </div>
                        </div>

                        </div><!--span4-->
                        <div class="span8">
                            <form action="editprofile.html" class="editprofileform" method="post" />

                            <div class="widgetbox personal-information">
                                    <h4 class="widgettitle">Informations boutiques</h4>
                                    <div class="widgetcontent">
                                        <p>
                                            <label>Nom de la boutique :</label>
                                            <input type="text" name="nom_boutique" class="input-xlarge" value="Hydro et Culture" />
                                        </p>
                                        <p>
                                            <label>Slogan :</label>
                                            <textarea name="slogan_boutique" class="span8">HYDROETCULTURE BREST EST UNE RÉFÉRENCE EN CULTURE INDOOR, TOUTE L’ANNÉE RÉUSSISSEZ VOTRE CULTUREINDOOR ! HYDRO&CULTURE BREST EST VOTRE GROWSHOP SPÉCIALISTE INDOOR ET OUTDOOR !</textarea>
                                        </p>
                                        <p>
                                            <label>Adresse :</label>
                                            <input type="text" name="adresse_boutique" class="input-xlarge" value="7 Bis Rue de la Villeneuve" />
                                        </p>
                                        <p>
                                            <label>Code postal :</label>
                                            <input type="text" name="cp_boutique" class="input-xlarge" value="29200" />
                                        </p>
                                        <p>
                                            <label>Ville :</label>
                                            <input type="text" name="ville_boutique" class="input-xlarge" value="Brest" />
                                        </p>
                                        <p>
                                            <label>Téléphone :</label>
                                            <input type="text" name="tel_boutique" class="input-xlarge" value="02 98 41 52 12" />
                                        </p>
                                        <p>
                                            <label>Mail pour les visiteurs :</label>
                                            <input type="text" name="mail_boutique" class="input-xlarge" value="brest@hydroetculture.com" />
                                        </p>
                                        <p>
                                            <label>nom du compte Facebook (page magasin) :</label>
                                            <input type="text" name="facebook_boutique" class="input-xlarge" value="Hydro-et-Culture" />
                                        </p>
                                        <p>
                                            <label>Nom du compte twitter :</label>
                                            <input type="text" name="twitter_boutique" class="input-xlarge" value="hydroetculture" />
                                        </p>
                                        <p>
                                            <label>Description de la boutique :</label>
                                            <textarea name="description" class="span8">Notre boutique c'est...
                                            Grand magasin de 350m2
                                            Serre d'hiver Mamouth 300cm x 600cm
                                            + de 2000 références avec les plus grandes marques comme House&Garden, Secret Jardin, GHE, Plagron, Biobizz, Nutriculture...
                                            Parking & Zone de retrait devant le magasin.
                                            Des conseils et un suivi effectué par un spécialiste dans la culture des plantes
                                            Livraison gratuite en 48H pour tous achats supérieurs à 100€
                                            Carte de fidélité avec des chèques cadeaux de 500€
                                            </textarea>
                                        </p>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                                
                                <div class="widgetbox login-information">
                                    <h4 class="widgettitle">Informations utilisateur</h4>
                                    <div class="widgetcontent">
                                        <p>
                                            <label>Nom d'utilisateur / Login :</label>
                                            <input type="text" name="username" class="input-xlarge" value="angejolo" />
                                        </p>
                                        <p>
                                            <label>Email :</label>
                                            <input type="text" name="email" class="input-xlarge" value="angelina@hydroetculture.com" />
                                        </p>
                                        <p>
                                            <label style="padding:0">Mot de passe :</label>
                                            <a href="">Changer de mot de passe ?</a>
                                        </p>
                                        <p>
                                            <label>Prénom :</label>
                                            <input type="text" name="firstname" class="input-xlarge" value="Angelina" />
                                        </p>
                                        <p>
                                            <label>Nom :</label>
                                            <input type="text" name="lastname" class="input-xlarge" value="Jolo" />
                                        </p>
                                        <p>
                                            <label>Poste occupé dans la société :</label>
                                            <input type="text" name="job" class="input-xlarge" value="Vendeuse" />
                                        </p>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                                
                                <div class="widgetbox profile-notifications">
                                    <h4 class="widgettitle">Notifications</h4>
                                    <div class="widgetcontent">
                                        <p>
                                            <input type="checkbox" /> Recevoir les mails d'actualité des Jardiniers Modernes.<br />
                                            <input type="checkbox" /> Recevoir par mail les demandes de rappels téléphones visiteurs.<br />
                                        </p>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                                
                                <p>
                                	<button type="submit" class="btn btn-primary">Enregistrer</button> &nbsp; <a href="">Faire une demande de suppression de profile</a>
                                </p>
                                
                            </form>
                        </div><!--span8-->
                    </div><!--row-fluid-->
                    
                    <div class="footer">
                        <div class="footer-left">
                            <span>&copy; 2016. Les Jardiniers Modernes. All Rights Reserved.</span>
                        </div>
                    </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
