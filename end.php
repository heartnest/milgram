<?php

session_start();
include_once 'php/com.config.php';
include_once 'php/com.utils.php';


$userid = $_SESSION['userid'];
$pos = strpos($userid,"@");
if($pos === false){

}else{
	$content = "Keep in mind your id is $userid, please also forward milgram.cs.unibo.it /n many thanks \n Disi ";
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
  <link href="css/font-awesome.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
</head>

<body >
  <div class="container">
    <div class="head clearfix">
      <h3 class="brand"><a href="http://unibo.it" target='_blank'><img src='img/unibo.png' alt='unibo logo' /></a></h3>
               <ul class="nav">
                <li><a href='info.php' target='_blank'>Milgram Reloaded</a>
                <li><a href='http://en.wikipedia.org/wiki/Small-world_experiment' target='_blank'>Milgram</a></li>
                <li> <a href='PrivacyStatement.pdf'  target='_blank'> Privacy Statement </a></li></li>
              </ul>
      </ul>
    </div>
    <div class="content">

            <div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
        <a href="index.php" type="button" class="btn btn-primary btn-circle">1</a>
        <p><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></p>
      </div>
          <div class="stepwizard-step">
        <a href="form.php" type="button" class="btn btn-primary btn-circle" >2</a>
        <p><?php echo $HEAD_TITLE_RIGHT_REPLY; ?></p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-primary btn-circle" >3</a>
        <p><?php echo $HEAD_TITLE_RIGHT_END; ?></p>
      </div>
        </div>
  </div>


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

    <p><div class="social">
    <ul>
        <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-github"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-flickr"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-vimeo-square"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-stack-overflow"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-dropbox"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-tumblr"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-skype"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-stack-exchange"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-xing"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-rss"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-foursquare"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-youtube-play"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-weibo"></i></a></li>
    </ul>
</div></p>
  </div>
</div>
  <div class="clearfix"></div>
  <div class="page_num pull-right">3/3</div>
</div>

</div>
<div id="footer">
  <div class="container">
      <div class="text-muted pull-left">
      <a href='info.php' target='_blank'>Milgram Reloaded</a>
       | <a href='http://en.wikipedia.org/wiki/Small-world_experiment' target='_blank'>Milgram</a> 
       | <a href='PrivacyStatement.pdf'  target='_blank'> Privacy Statement </a>
      </div>
      <div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>
  </div>
</div>

</body>
</html>