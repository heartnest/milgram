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
else
  include "lang/en.php";



?>

<!DOCTYPE html>
<html>

<head>
  <title>Thank you | Milgram Experiment Project | Disi Unibo</title>
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
      <h3 class="brand"><?php echo $HEAD_TITLE_LEFT; ?></h3>
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

       <h1 class="form1-heading"><?php echo $PPP_FIRST; ?></h1>
       <P class="lead">
        <?php echo $PPP_MAIN; ?>
        </P>
        <p>
      <?php echo $PPP_NOTE; ?></P>
        <textarea class="form-control" rows="6"><?php echo $PPP_LETTER; ?> &quot;<?php echo $userid ?>&quot;
</textarea>
        <br />


      <h4><?php echo $PPP_LAST; ?></h4>
    </p>
  </div>
</div>
  <div class="clearfix"></div>
  <div class="page_num pull-right">3/3</div>
</div>

</div>
<div id="footer">
  <div class="container">
    <div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>
  </div>
</div>

</body>
</html>