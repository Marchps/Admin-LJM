<?php
    session_start();
    include('../Models/connexionBDD.php');
?>
<!-- DOWNLOADED FROM WWW.SCRIPTGATES.COM -->
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>
<link rel="stylesheet" href="../web/css/style.default.css" type="text/css" />

<script type="text/javascript" src="../web/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../web/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../web/js/jquery-ui-1.9.2.min.js"></script>
<link rel="stylesheet" href="../web/css/responsive-tables.css" />
<script type="text/javascript" src="../web/js/modernizr.min.js"></script>
<script type="text/javascript" src="../web/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../web/js/jquery.cookie.js"></script>
<script type="text/javascript" src="../web/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../web/js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="../web/js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="../web/js/responsive-tables.js"></script>
<script type="text/javascript" src="../web/js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../web/js/excanvas.min.js"></script><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

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
                                <img src="../web/images/photos/thumb1.png" alt="" class="userthumb" />
                                <strong>Draniem Daamul</strong>
                                <small>April 20, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../web/images/photos/thumb2.png" alt="" class="userthumb" />
                                <strong>Shamcey Sindilmaca</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../web/images/photos/thumb3.png" alt="" class="userthumb" />
                                <strong>Nusja Paul Nawancali</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../web/images/photos/thumb4.png" alt="" class="userthumb" />
                                <strong>Rose Cerona</strong>
                                <small>April 18, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../web/images/photos/thumb5.png" alt="" class="userthumb" />
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
                        <img src="../web/images/photos/thumb2.png" alt="" />
                        <div class="userinfo">
                            <h5>Angelina Jolo <small>- angelina.jolo@themepixels.com</small></h5>
                            <ul>
                                <li><a href="editprofile.html">Modifier mon compte</a></li>
                                <li><a href="">Mon compte</a></li>
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

                <li class="active"><a href="dashboard.html"><span class="iconfa-laptop"></span> Dashboard</a></li>

                <?php
                // On rempli le menu de navigation à partir de l'id_droit du User
                try {
                        $dbh = new PDO('mysql:host='.$server.';dbname='.$base.'', ''.$user.'', ''.$pwd.'');
                        foreach($dbh->query('SELECT * from jm_menu_admin WHERE id_droit="'.$_SESSION['id_droit'].'"') as $row) {
                            echo '<li><a href="?page='.$row['lien'].'"><span class="'.$row['class-icon'].'"></span>'. $row['nom'] .'</a></li>';
                        }
                    } 
                    catch (PDOException $e) 
                        {
                            print "Erreur !: " . $e->getMessage() . "<br/>";
                            header('index.php');
                            die();
                        }                
                ?>

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
                        <li><a href="table-dynamic.php">Dynamic Table</a></li>
                    </ul>
                </li>

                <li><a href="media.html"><span class="iconfa-picture"></span> Media Manager</a></li>
                <li><a href="typography.html"><span class="iconfa-font"></span> Typography</a></li>
                <li><a href="charts.html"><span class="iconfa-signal"></span> Graph &amp; Charts</a></li>
                <li><a href="messages.html"><span class="iconfa-envelope"></span> Messages</a></li>
                <li><a href="calendar.html"><span class="iconfa-calendar"></span> Calendar</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> Other Pages</a>
                	<ul>
                    	<li><a href="404.html">404 Error Page</a></li>
                        <li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="invoice.html">Invoice Page</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
	    <div id="contenu">
				<?php
				if(isset($_GET['page']) && !empty($_GET['page'])) {
					$p = htmlentities($_GET['page']);
					 
					switch($p) {
						case 'index_boutiques': $contenu = include('../Views/boutique/listing.php');
						break;
                        case 'edit_boutique': $contenu = include('../Views/boutique/edit.php');
                        break;
                        case 'index_users': $contenu = include('../Views/user/listing.php');
                        break;
                        case 'edit_user': $contenu = include('../Views/user/edit.php');
                        break;
                        case 'index_droits': $contenu = include('../Views/droit/listing.php');
                        break;
                        case 'edit_droit': $contenu = include('../Views/droit/edit.php');
                        break;
						default: $contenu = 'Page inconnue';
						break;
					}
					 
					echo $contenu;
				}
				?>
</div>
	</div><!--rightpanel-->




<div id="menu">
    <ul id="nav">
        <li><a href="?page=index">Index</a></li>
        <li><a href="?page=cours">Cours</a></li>
        <li><a href="?page=membres">Membres</a></li>
        <li><a href="?page=contact">Contact</a></li>
    </ul>
</div>
 
<script type="text/javascript">
$(document).ready(function() {

    $('li').click(function(){
        $(this).addClass('active');
    })


    var $contenu_div = $('#contenu div');
    var page = $('#nav li a:first').text(); // par défaut c'est Index

    // au clic sur un lien du menu
    $('#nav li a').on('click', function() {
        
        var url = $(this).attr('href'); // on récupère le href
         
        // on récupère le nom de la page demandée
        var pageDemandee = $(this).text();
 
        // si on appelle une page qui n est pas celle affichée
        if(pageDemandee != page) { 
         
            // on met en mémoire la page
            page = pageDemandee;
             
            // chargement dans la div
            $.ajax({
                url: url,
                cache: false,
                success: function(html) {
                    $contenu_div.hide().html(html).fadeIn();
                    alert("ok ajax");
                }
            });
        }
        return false;
    });
});
</script>