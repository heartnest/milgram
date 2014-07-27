<?php


if ($_GET['lan'] == 'cn') {
  include "lang/cn.php";
}
else if ($_GET['lan'] == 'de') {
  include "lang/de.php";
}
else if ($_GET['lan'] == 'pt') {
  include "lang/pt.php";
}
else if ($_GET['lan'] == 'pr') {
  include "lang/pr.php";
}
else if ($_GET['lan'] == 'es') {
  include "lang/es.php";
}
else if ($_GET['lan'] == 'ru') {
  include "lang/ru.php";
}
else if ($_GET['lan'] == 'ar') {
  include "lang/ar.php";
}
else if ($_GET['lan'] == 'it') {
  include "lang/it.php";
}
else if ($_GET['lan'] == 'fr') {
  include "lang/fr.php";
}
else
  include "lang/en.php";


?>

<!DOCTYPE html>
<html>

<head>
	<title><?php echo $PAGESTITLE; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='Description' content='a web app for the test of milgram experiment' />
  <meta name="author" content="liu tong">
  <link rel="shortcut icon" href="favicon.ico">
  	
  <script type='text/javascript' src='js/lib/jquery-1.7.2.min.js'></script>
	<link type='text/css' href='css/bootstrap.css' rel='stylesheet' />
	<script type='text/javascript' src='js/lib/bootstrap.min.js'></script>

	 <link href="css/style.css" rel="stylesheet">
</head>

<body >
	<div class='container'>

		<div class="content">
			<h2><?php echo $PPPP_SORRYCONTENT;?></h2>
		</div>

	</div>

	  <div id="footer">
    <div class="container">
      <div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>

    </div>
  </div>
</body>
</html>