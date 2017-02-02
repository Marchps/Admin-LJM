<?php
ini_set('display_errors', 1);


define('WEBROOT',dirname(__FILE__));
define('ROOT',dirname(WEBROOT));
define('DS','/');
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT'] . '/Administration MVC graphikart/web/images/');
define('BASE_URL','http://' . $_SERVER['HTTP_HOST'] . '/administration%20mvc%20graphikart/web/');
define('URL_IMAGE_BOUTIQUE','http://' . $_SERVER['HTTP_HOST'] . '/administration%20mvc%20graphikart/web/images/');
define('BASE_LINK','http://' . $_SERVER['HTTP_HOST'] . '/administration%20mvc%20graphikart/web/index.php');
define('BASE_LINK_MEDIA','http://' . $_SERVER['HTTP_HOST'] . '/administration%20mvc%20graphikart/web/index.php/medias/index');
define('BASE_LINK_MESSAGES','http://' . $_SERVER['HTTP_HOST'] . '/administration%20mvc%20graphikart/web/index.php/messages/index');
define('BASE_LINK_PROMO','http://' . $_SERVER['HTTP_HOST'] . '/administration%20mvc%20graphikart/web/index.php/promos/index');
define('LOGIN_LINK','http://' . $_SERVER['HTTP_HOST'] . '/administration%20mvc%20graphikart/');
define('NAME',"Les Jardiniers Modernes");
//define('PREFIX',"cockpit");
mb_internal_encoding('UTF-8');
require ROOT . '/app/App.php';
App::load();
new Core\Dispatcher();