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
        <li><a href='info.php' target='_blank'><?php echo $PALL_EXPINFO; ?></a>
          <li> <a href='PrivacyStatement.pdf'  target='_blank'> <?php echo  $PALL_STATEMENT; ?></a></li></li>
        </ul>
      </ul>
    </div>
    <div class="content">




      <div class="contents">
        <div class="inner cover">
         <h1 class="form1-heading text-center"><?php echo $PPP_FIRST; ?></h1>

         <div class="stepwizard col-md-offset-3">
          <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
              <a href="index.php" type="button" class="btn btn-primary btn-circle">1</a><span class="arrow glyphicon glyphicon-chevron-right"></span>
              <p><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></p>
            </div>
            <div class="stepwizard-step">
              <a href="form.php" type="button" class="btn btn-primary btn-circle" >2</a><span class="arrow glyphicon glyphicon-chevron-right"></span>
              <p><?php echo $HEAD_TITLE_RIGHT_REPLY; ?></p>
            </div>
            <div class="stepwizard-step">
              <a href="#step-3" type="button" class="btn btn-primary btn-circle" >3</a>
              <p><?php echo $HEAD_TITLE_RIGHT_END; ?></p>
            </div>
          </div>
        </div>


        <h3>
          <?php echo $PPP_MAIN; ?>

        </h3>
        <h4><?php echo $PPP_MAIN1; ?></h4>
        <textarea class="form-control" rows="6"><?php echo $PPP_LETTER; ?>
        </textarea>
        <br />


        <h4><?php echo $PPP_LAST; ?></h4>
      </p>

      <p class='lead text-center'><?php echo $PPP_CLICKEICON; ?></p>

      <p><div class="social">
        <ul>
          <li><a href="https://www.facebook.com/" title='facebook' target='_blank'><i class="fa fa-lg fa-facebook" ></i></a></li>
          <li><a href="https://twitter.com/" title='twitter' target='_blank'><i class="fa fa-lg fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com" title='googleplus' target='_blank'><i class="fa fa-lg fa-google-plus"></i></a></li>
          <li><a href="https://www.pinterest.com/" title='pinterest' target='_blank'><i class="fa fa-lg fa-pinterest"></i></a></li>
          <li><a href="https://www.linkedin.com" title='linkedin' target='_blank'><i class="fa fa-lg fa-linkedin"></i></a></li>
          <li><a href="https://www.flickr.com/" title='flickr' target='_blank'><i class="fa fa-lg fa-flickr"></i></a></li>
          <li><a href="http://instagram.com/" title='instagram' target='_blank'><i class="fa fa-lg fa-instagram"></i></a></li>
          <li><a href="https://vimeo.com" title='vimeo' target='_blank'><i class="fa fa-lg fa-vimeo-square"></i></a></li>
          <li><a href="https://www.dropbox.com/" title='dropbox' target='_blank'><i class="fa fa-lg fa-dropbox"></i></a></li>
          <li><a href="https://www.tumblr.com/" title='tumblr' target='_blank'><i class="fa fa-lg fa-tumblr"></i></a></li>
          <li><a href="https://dribbble.com/" title='dribbble' target='_blank'><i class="fa fa-lg fa-dribbble"></i></a></li>
          <li><a href="https://login.skype.com" title='skype' target='_blank'><i class="fa fa-lg fa-skype"></i></a></li>
          <li><a href="https://www.youtube.com/" title='youtube' target='_blank'><i class="fa fa-lg fa-youtube"></i></a></li>
          <li><a href="https://www.xing.com/" title='xing' target='_blank'><i class="fa fa-lg fa-xing"></i></a></li>
          <li><a href="https://foursquare.com" title='foursquare' target='_blank'><i class="fa fa-lg fa-foursquare"></i></a></li>
          <li><a href="http://www.yelp.com/" title='yelp' target='_blank'><i class="fa fa-lg fa-yelp"></i></a></li>
          <li><a href="http://www.weibo.com" title='weibo' target='_blank'><i class="fa fa-lg fa-weibo"></i></a></li>
          <li><a href="http://www.imqq.com" title='qq' target='_blank'><i class="fa fa-lg fa-qq"></i></a></li>
          <li><a href="http://www.renren.com" title='renren' target='_blank'><i class="fa fa-lg fa-renren"></i></a></li>
          <li><a href="http://t.qq.com" title='tencent weibo' target='_blank'><i class="fa fa-lg  fa-tencent-weibo"></i></a></li>
          <li><a href="https://wx.qq.com" title='wechat' target='_blank'><i class="fa fa-lg  fa-weixin"></i></a></li>
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
      <a href='info.php' target='_blank'><?php echo $PALL_EXPINFO; ?></a>
      | <a href='PrivacyStatement.pdf'  target='_blank'><?php echo  $PALL_STATEMENT; ?></a>
    </div>
    <div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>
  </div>
</div>

</body>
<script>
$(function(){
  var fa_a = $(".fa").parent();
  $(fa_a).click(function(){
    var social = $(this).attr("title");
    //alert(social)
    $.ajax({
        type: 'POST',
        url:  'php/update-social.php',
        data: {
            newsocial:social
        },
        contentType: 'application/x-www-form-urlencoded',
        success: function(x) {
           // alert(x)
        }
      })
    })
    //alert(333)
    
})

</script>
</html>