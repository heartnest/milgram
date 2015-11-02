<?php
session_start(); 

$_SESSION['referer'] = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER'] : "Not Detected";

if (isset($_GET['t'])) {
	$_SESSION['target_id'] = $_GET['t'];
	$targetid = $_GET['t'];
}

if (isset($_GET['my'])) {
	$_SESSION['sender_id'] = $_GET['my'];
	//$senderid = $_GET['my'];
}


if ($_GET['lan'] == 'ar') {
	include "lang/ar.php";
	$lango = "form.php?lan=ar";
	$langs = "sorry.php?lan=ar";
}
else if ($_GET['lan'] == 'cn') {
	include "lang/cn.php";
	$lango = "form.php?lan=cn";
	$langs = "sorry.php?lan=cn";
}
else if ($_GET['lan'] == 'es') {
	include "lang/es.php";
	$lango = "form.php?lan=es";
	$langs = "sorry.php?lan=es";
}
else if ($_GET['lan'] == 'fr') {
	include "lang/fr.php";
	$lango = "form.php?lan=fr";
	$langs = "sorry.php?lan=fr";
}
else if ($_GET['lan'] == 'gk') {
	include "lang/gk.php";
	$lango = "form.php?lan=gk";
	$langs = "sorry.php?lan=gk";
}
else if ($_GET['lan'] == 'gr') {
	include "lang/gr.php";
	$lango = "form.php?lan=gr";
	$langs = "sorry.php?lan=gr";
}
else if ($_GET['lan'] == 'it') {
	include "lang/it.php";
	$lango = "form.php?lan=it";
	$langs = "sorry.php?lan=it";
}
else if ($_GET['lan'] == 'jp') {
	include "lang/jp.php";
	$lango = "form.php?lan=jp";
	$langs = "sorry.php?lan=jp";
}
else if ($_GET['lan'] == 'ml') {
	include "lang/ml.php";
	$lango = "form.php?lan=ml";
	$langs = "sorry.php?lan=ml";
}
else if ($_GET['lan'] == 'pr') {
	include "lang/pr.php";
	$lango = "form.php?lan=pr";
	$langs = "sorry.php?lan=pr";
}

else if ($_GET['lan'] == 'pt') {
	include "lang/pt.php";
	$lango = "form.php?lan=pt";
	$langs = "sorry.php?lan=pt";
}
 else if ($_GET['lan'] == 'rm') {
	include "lang/rm.php";
	$lango = "form.php?lan=rm";
	$langs = "sorry.php?lan=rm";
}
 else if ($_GET['lan'] == 'ru') {
	include "lang/ru.php";
	$lango = "form.php?lan=ru";
	$langs = "sorry.php?lan=ru";
}
else if ($_GET['lan'] == 'tm') {
	include "lang/tm.php";
	$lango = "form.php?lan=tm";
	$langs = "sorry.php?lan=tm";
}
else{
	include "lang/en.php";
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
	<script type='text/javascript' src='js/lib/bootstrap.min.js'></script>
	<link type='text/css' href='css/bootstrap.css' rel='stylesheet' />
	<link href="css/style.css" rel="stylesheet">
	<style>
		.flagimg{
			width: 40px;
		}
		.agreeCheckBox{
			font-size:200%;
		}


	</style>
</head>

<body >		
	<!-- Large modal -->

	<div class='container'>
		<div class="head clearfix">

              <h3 class="brand"><a href="http://unibo.it" target='_blank'><img src='img/unibo.png' /></a></h3>

              <ul class="nav">
                <li><a href='info.php' target='_blank'><?php echo "$PALL_EXPINFO";?></a>
                <li> <a href='PrivacyStatement.pdf'  target='_blank'><?php echo "$PALL_STATEMENT";?></a></li></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src='img/lang.png' alt='lang'><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="?lan=en" class="">English</a></li>
                      <li><a href="?lan=it" class="">Italiano</a></li>
                      <li><a href="?lan=gr" class="">Deutsch</a></li>
                      <li><a href="?lan=fr" class="">Français</a></li>
                      <li><a href="?lan=es" class="">Español</a></li>
                      <li><a href="?lan=rm" class="">Română</a></li>
                      <li><a href="?lan=pt" class="">Português</a></li>
                      <li><a href="?lan=gk" class="">Ελληνικά</a></li>
                      <li><a href="?lan=ru" class="">Русский</a></li>
                      <li><a href="?lan=pr" class="">فارسی</a></li>
                      <li><a href="?lan=ar" class="">العربية</a></li>
                      <li><a href="?lan=ml" class="">മലയാളം</a></li>
                      <li><a href="?lan=tm" class="">தமிழ்</a></li>
                      <li><a href="?lan=cn" class="">汉语</a></li>
                      <li><a href="?lan=jp" class="">日本語</a></li>
                    </ul>
                  </li>
              </ul>
            
          	</div>
		<div class="content ">

          	
          	<div class="intro">



			<h1><?php echo $P_TITLE; ?></h1>

      <div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a> <span class="arrow arrow1 glyphicon glyphicon-chevron-right"></span>
        <p><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a><span class="arrow arrow2 glyphicon glyphicon-chevron-right"></span>
        <p><?php echo $HEAD_TITLE_RIGHT_REPLY; ?></p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p><?php echo $HEAD_TITLE_RIGHT_END; ?></p>
      </div>
        </div>
  </div>


			<p class="lead">
				<?php echo $P_BODYPARAONE; ?>
			</p>
			<p class="lead">
				<?php echo $P_BODYPARATWO;?>
			</p>
			


			</div>

					<div class="text-justify">
						<?php echo "$P_BODYPARATHREE";?>
				</div>

		 <div class="clearfix"></div>



	<div class='form-decision'>
		<label>

      <input class="agreeCheckBox" type="checkbox"> 
      <?php echo $P_CONSUS ;?>
    </label>
      <a href=<?php echo $lango; ?> ><button  class="nextbutton btn btn-primary pull-right disabled" name="action" value="ac"><?php echo $P_BUTTON_ACCEPT; ?></button></a>
    </div>

    <div class="clearfix"></div>

<p class="text-center"><?php echo $P_BODY_LOW; ?></p>

    </div>
    <div class="clearfix"></div>
    <div class="page_num pull-right">1/3</div>
	</div>

	<div id="footer">
		<div class="container">
			 <div class="text-muted pull-left">
			<a href='info.php' target='_blank'> <?php echo "$PALL_EXPINFO";?> </a>
			 | <a href='PrivacyStatement.pdf'  target='_blank'> <?php echo "$PALL_STATEMENT";?> </a>
			</div>
			<div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>
		</div>
	</div>

	<div id="dialog" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo $targ_title;?></h4>
        </div>
        <div class="modal-body">
				<?php echo $targ_description; ?>
        </div>

      </div>
    </div>
  </div>

	
	<script src="js/load.js"></script> 


<script>


var lan = <?php echo  json_encode($lan);?>;
$.cookie('setting_lang',lan);
$(".agreeCheckBox").click(function(){
	if ($(".nextbutton").hasClass("disabled")) {
		$(".nextbutton").removeClass("disabled");
	}else{
		$(".nextbutton").addClass("disabled");
	}

	
})


</script>
 
</body>
</html>