<?php
session_start(); 

$_SESSION['referer'] = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER'] : "Not Detected";

if (!isset($_SESSION['target_id'])) {
	$_SESSION['target_id'] = $_GET['t'];
	$targetid = $_GET['t'];
}



if ($_GET['lan'] == 'cn') {
	include "lang/cn.php";
	//$cacheEx = "$.cookie('setting_lang','cn');";
	//$langt = "?lan=cn&&t=$targetid";
	$lango = "form.php?lan=cn";
	$langs = "sorry.php?lan=cn";
}
else if ($_GET['lan'] == 'it') {
	include "lang/it.php";
	//$cacheEx = "$.cookie('setting_lang','it');";
	//$langt = "?lan=it&&t=$targetid";
	$lango = "form.php?lan=it";
	$langs = "sorry.php?lan=it";
}
else if ($_GET['lan'] == 'fr') {
	include "lang/fr.php";
	//$cacheEx = "$.cookie('setting_lang','fr');";
	//$langt = "?lan=fr&&t=$targetid";
	$lango = "form.php?lan=fr";
	$langs = "sorry.php?lan=fr";
}
else if ($_GET['lan'] == 'pt') {
	include "lang/pt.php";
	//$cacheEx = "$.cookie('setting_lang','pt');";
	//$langt = "?lan=pt&&t=$targetid";
	$lango = "form.php?lan=pt";
	$langs = "sorry.php?lan=pt";
}
else if ($_GET['lan'] == 'es') {
	include "lang/es.php";
	//$cacheEx = "$.cookie('setting_lang','es');";
	//$langt = "?lan=es&&t=$targetid";
	$lango = "form.php?lan=es";
	$langs = "sorry.php?lan=es";
}
else if ($_GET['lan'] == 'de') {
	include "lang/de.php";
	//$cacheEx = "$.cookie('setting_lang','de');";
	//$langt = "?lan=de&&t=$targetid";
	$lango = "form.php?lan=de";
	$langs = "sorry.php?lan=de";
}
 else if ($_GET['lan'] == 'ru') {
	include "lang/ru.php";
	//$cacheEx = "$.cookie('setting_lang','ru');";
	//$langt = "?lan=ru&&t=$targetid";
	$lango = "form.php?lan=ru";
	$langs = "sorry.php?lan=ru";
}
else if ($_GET['lan'] == 'pr') {
	include "lang/pr.php";
	//$cacheEx = "$.cookie('setting_lang','pr');";
	//$langt = "?lan=pr&&t=$targetid";
	$lango = "form.php?lan=pr";
	$langs = "sorry.php?lan=pr";
}
else if ($_GET['lan'] == 'pt') {
	include "lang/pt.php";
	//$cacheEx = "$.cookie('setting_lang','pt');";
	//$langt = "?lan=pt&&t=$targetid";
	$lango = "form.php?lan=pt";
	$langs = "sorry.php?lan=pt";
}
else if ($_GET['lan'] == 'ar') {
	include "lang/ar.php";
	//$cacheEx = "$.cookie('setting_lang','ar');";
	//$langt = "?lan=ar&&t=$targetid";
	$lango = "form.php?lan=ar";
	$langs = "sorry.php?lan=ar";
}
else{
	include "lang/en.php";
	//$cacheEx = "$.cookie('setting_lang','en');";
	//$langt = "?lan=en&&t=$targetid";
	$lango = "form.php?lan=en";
	$langs = "sorry.php?lan=en";
}
?>

<!DOCTYPE html>
<html>

<head>
	<title><?php echo $PAGE1TITLE; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='Description' content='a web app for the test of milgram experiment' />
	<meta name="author" content="liu tong">
	<link rel="shortcut icon" href="favicon.ico">
	<script type='text/javascript' src='js/lib/jquery-1.7.2.min.js'></script>
	<script type='text/javascript' src='js/lib/jquery.cookie.js'></script>
	<link type='text/css' href='css/bootstrap.css' rel='stylesheet' />
	<link href="css/style.css" rel="stylesheet">
	<style>
		.flagimg{
			width: 40px;
		}
	</style>
</head>

<body >		
	<div class='container'>
		<div class="head clearfix">

              <h3 class="brand"><?php echo $HEAD_TITLE_LEFT; ?></h3>

              <ul class="nav">
                <li class="active"><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></li>
                <li><?php echo $HEAD_TITLE_RIGHT_REPLY; ?></li>
                <li><?php echo $HEAD_TITLE_RIGHT_END; ?></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src='img/lang.png' alt='lang'><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="?lan=en" class=""><img class='flagimg' src='img/flags/en.png'>  English</a></li>
                      <li><a href="?lan=it" class=""><img class='flagimg' src='img/flags/it.png'>  Italiano</a></li>
                      <li><a href="?lan=de" class=""><img class='flagimg' src='img/flags/de.png'>  Deutsch</a></li>
                      <li><a href="?lan=fr" class=""><img class='flagimg' src='img/flags/fr.png'>  Français</a></li>
                      <li><a href="?lan=es" class=""><img class='flagimg' src='img/flags/es.png'>  Español</a></li>
                      <li><a href="?lan=pt" class=""><img class='flagimg' src='img/flags/pt.png'>  Português</a></li>
                      <li><a href="?lan=ru" class=""><img class='flagimg' src='img/flags/ru.png'>  Русский</a></li>
                      <li><a href="?lan=pr" class=""><img class='flagimg' src='img/flags/pr.png'>  فارسی</a></li>
                      <li><a href="?lan=ar" class=""><img class='flagimg' src='img/flags/ar.png'>  العربية</a></li>
                      <li><a href="?lan=cn" class=""><img class='flagimg' src='img/flags/cn.png'>  汉语</a></li>
                    </ul>
                  </li>
              </ul>
            
          	</div>
		<div class="content ">

          	
          	<div class="intro">
			<h1><?php echo $P_TITLE; ?></h1>
			<p class="lead">
				<?php echo $P_BODYPARAONE; ?>
			</p>
			<p class="lead">
				<?php echo $P_BODYPARATWO;?>
			</p>
			<p class="pull-right"><?php echo $P_BODY_LOW; ?></p>
			</div>
		
		 <div class="clearfix"></div>


	<div class='form-decision'>
      <a href=<?php echo $langs; ?> ><button  class="btn btn-danger pull-left" name="action" value="rf"><?php echo $P_BUTTON_REFUSE; ?></button></a>
      <a href=<?php echo $lango; ?> ><button  class="btn btn-primary pull-right" name="action" value="ac"><?php echo $P_BUTTON_ACCEPT; ?></button></a>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="page_num pull-right">1/3</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>
		</div>
	</div>

	<script type='text/javascript' src='js/lib/bootstrap.min.js'></script>
	<script src="js/lib/bootstrap-tooltip.js"></script>  
	<script src="js/lib/bootstrap-popover.js"></script> 
	<script src="js/load.js"></script> 


<script>


var lan = <?php echo  json_encode($lan);?>;
$.cookie('setting_lang',lan);

</script>
 
</body>
</html>