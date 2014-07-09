<?php
session_start(); 

$_SESSION['referer'] = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER'] : "Not Detected";


if ($_GET['lan'] == 'cn') {
	include "lang/cn.php";
	$cacheEx = "$.cookie('setting_lang','cn');";
	$lango = "<a href='form.php?lan=cn'>";
}
else{
	include "lang/en.php";
	$cacheEx = "$.cookie('setting_lang','en');";
	$lango = "<a href='form.php?lan=en'>";
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Welcome | Milgram Experiment Project | Disi Unibo</title>
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
                      <li><a href="?lan=en" class=""><img class='flagimg' src='img/en.png'>  English</a></li>
                      <li><a href="?lan=cn" class=""><img class='flagimg' src='img/cn.png'>  汉语</a></li>
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
      <a href="sorry.php"><button  class="btn btn-danger pull-left" name="action" value="rf"><?php echo $P_BUTTON_REFUSE; ?></button></a>
      <?php echo $lango; ?><button  class="btn btn-primary pull-right" name="action" value="ac"><?php echo $P_BUTTON_ACCEPT; ?></button></a>
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