<?php

session_start();
include_once 'php/com.config.php';
include_once 'php/com.utils.php';


$userid = $_SESSION['userid'];
$pos = strpos($userid,"@");
if($pos === false){

}else{
	$content = "Keep in mind your id is $userid, please also forward milgram2014.web.cs.unibo.it /n many thanks \n Disi ";
	$subj =" Milgram test remind you";
	//so this's a mail
	//mail_text($userid , $subj, $content);
}



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
  <title><?php echo $PAGE3TITLE; ?></title>
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
  <div class="container">
    <div class="head clearfix">
      <h3 class="brand"><a href="http://unibo.it" target='_blank'><img src='img/unibo.png' alt='unibo logo' /></a></h3>
               <ul class="nav">
                <li><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></li>
                <li><?php echo $HEAD_TITLE_RIGHT_REPLY; ?></li>
                <li class="active" ><?php echo $HEAD_TITLE_RIGHT_END; ?></li>
              </ul>
      </ul>
    </div>
    <div class="content">
      <div class="contents">
      <div class="inner cover">
       <h1 class="form1-heading text-center"><?php echo $PPP_FIRST; ?></h1>
       <h3>
        <?php echo $PPP_MAIN; ?>

        </h3>

        <textarea class="form-control" rows="6"><?php echo $PPP_LETTER; ?>
</textarea>
        <br />


      <h4><?php echo $PPP_LAST; ?></h4>
    </p>
  </div>
</div>
  <div class="clearfix"></div>
  <div class="page_num pull-right">4/4</div>
</div>

</div>
<div id="footer">
  <div class="container">
      <div class="text-muted pull-left"><a href='#'>Legal</a> | <a href='http://en.wikipedia.org/wiki/Small-world_experiment' target='_blank'>Milgram</a> | <a href='#'>Milgram Reloaded</a></div>
      <div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>
  </div>
</div>

</body>
</html>