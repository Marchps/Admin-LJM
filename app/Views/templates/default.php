<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/web/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        #parent, #child {
            position: absolute;
            top: 50px; left: 100px;
        }
        #parent {
            width: 200px; height: 200px;
            background-color: blue;
        }
        #child {
            width: 50px; height: 50px;
            background-color: red;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        function loadImg(){
            para=document.getElementById("logo");
            //alert(para.childNodes.length);
            alert(getComputedStyle(para.lastChild).width); 
            para.firstChild.nodeValue="Des vêtements vraiment";
            para.lastChild.style.width="100px";
            para.lastChild.style.height="100px";
            para.childNodes[1].style.color="green";  
            }

        function calculPos()
        {
            var parent = document.getElementById('parent');
            var child = document.getElementById('child');
            alert("Sans la fonction de calcul, la position de l'élément enfant est: \n\n"+
                'offsetTop :' + child.offsetTop + 'px\n'+'offsetLeft'+child.offsetLeft+'px');
        }

        function getOffset(element)
        { //Notre fonction qui calcule le positionnement complet
            var top = 0, left = 0;
            do{
                top += element.offsetTop;
                left += element.offsetLeft;
            } while (element = element.offsetParent); //Tant que <<element>> recoit un <<offsetParent>> valide alors on aditionne les valeurs des offsets
            return{ // On retourne un objet, cela nous permet de retourner les 2 valeurs calculées
                top: top,
                left: left
            }        
            alert("Avec la fonction de calcul, la position de l'élément enfant est: \n\n"+
            'offsetTop :'+getOffset(child).top+'px\n'+
            'offsetLeft'+getOffset(child).left+'px');
        }
    </script>
    
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header" onclick="loadImg()">
                <a class="navbar-brand" href="<?= BASE_URL.DS.'posts'.DS.'index ';?>">Rubis</a>
            </div>
            <p id="logo" onclick="loadImg()">Des vêtements, <b>adapté</b>, <i>à tous</i> les budgets
            <img alt="Rubis" src="<?= IMAGE.DS.'logo.jpg'; ?>" heigth="50" width="50"></p>

        </div>
    </nav>

    <div class="container">

        <div class="starter-template" style="padding-top: 100px;">
            <?= $content; ?>
        </div>
    </div><!-- /.container -->


</body>
<script>
    //Compatibilité navigateur IE , pas nécessaire avec JQuery
    function new_xhr_object()
    {
        if(window.XMLHttpRequest)
            xhr_object = new XMLHttpRequest();
        else if(window.ActiveXObject)
            xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
        else {
            alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest");
            return;
            }
    }
</script>
    
</html>
