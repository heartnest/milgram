<?php
session_start(); 

if ($_GET['lan'] == 'cn') {
  include "lang/cn.php";

  // $ERR_SENDER = 3; 
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



if ($_GET['action'] == 'rf') {
  header("Location: sorry.php");
} else if  ($_GET['action'] == 'ac'){

} else {
    //invalid action!
}


?>

<!DOCTYPE html>
<html>

<head>
  <title>Message | Milgram Experiment Project | Disi Unibo</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
  <meta name='Description' content='a web app for the test of milgram experiment' />
  <meta name="author" content="liu tong">
  <link rel="shortcut icon" href="favicon.ico">

  
  <script type='text/javascript' src='js/lib/jquery-1.7.2.min.js'></script>
  <script type='text/javascript' src='js/lib/bootstrap.min.js'></script>
  <script type='text/javascript' src='js/lib/jquery.cookie.js'></script>
  <script type='text/javascript' src='js/load.js'></script>
  <link type='text/css' href='css/bootstrap.css' rel='stylesheet' />
  <link href="css/style.css" rel="stylesheet">
</head>

<body >
  <div class='container'>
    <div class="head clearfix">

              <h3 class="brand"><?php echo $HEAD_TITLE_LEFT; ?></h3>
              <ul class="nav">
                <li><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></li>
                <li class="active"><?php echo $HEAD_TITLE_RIGHT_REPLY; ?></li>
                <li><?php echo $HEAD_TITLE_RIGHT_END; ?></li>
              </ul>
            
      </div>
  <div class="content">
          <h3 class="form1-heading"><?php echo $PP_QONE; ?></h3>
          <div>
            <form id = "form1" role="form" action="end.php" method="POST">
              <div class="form-group wru">
                <label for="whoareyou"><?php echo $PP_QTWO; ?></label>
                <div><small class="smallnotice"><?php echo $PP_QTHREE; ?></small></div>
                <input id="whoareyou" type="text" class="form-control"  placeholder="my@email.com or 00393232222222" name="yourid">
                <div><small class="alert-warning warning1"></small></div>
              </div>
              <div class="form-group">
                <label  class="control-label"><?php echo $PP_QFOUR; ?></label>
                <div class="">
                  <select id="whichnetwork" name="network" class="form-control">
                    <option value="1">Facebook</option>
                    <option value="2">Twitter</option>
                    <option value="3">Email</option>
                    <option value="4">Whatsapp</option>
                    <option value="5">Message</option>
                    <option value="6">Phone call</option>
                    <option value="7">Wechat</option>
                    <option value="8">Weibo</option>
                    <option value="9">Telegram</option>
                    <option value="10">Messanger</option>
                  </select>
                </div>
              </div>
              <div class="form-group wst">
                <label for="whosthat"><?php echo $PP_QFIVE;?></label>
                
                <input id="whosthat" type="email" class="form-control" name="senderid" placeholder="Enter her/his email/ cellphone">
                <div><small class="alert-warning warning2"></small></div>
              </div>


              <div class="form-group">
              <label><?php echo $PP_QSIX; ?></label>
         <div class="table-responsive q2s2">
        <table class="table">

          <tr>


            <td>                

              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/facebook.png" alt="Facebook" />
                </label>
              </div>
            </td>

            <td> 

              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/twitter.png" alt="twitter" />
                </label>
              </div>

            </td>

            <td>
              <div class="checkbox" >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/tumblr.png" alt="tumblr" />
                </label>
              </div>



            </td>
            <td>

              <div class="checkbox " >

                <label>
                  <input type="checkbox" value="">
                  <img src="img/linkedin.png" alt="linkedin" />
                </label>

              </div>
            </td> 
          </tr>


          <tr>
            <td> 

              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/whatsapp.png" alt="whatsapp" />
                </label>
              </div>



            </td>
            <td>
              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/wechat.png" alt="wechat" />
                </label>
              </div>


            </td>
            <td>
              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/skype.png" alt="foursquare" />
                </label>
              </div>

            </td>
            <td>
               <div class="checkbox " >
                <label>
                  <input type="checkbox" value="">
                 <img src="img/telegram.png" alt="telegram" />
                </label>
                </div>
              <!--
              <div class="checkbox" >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/qq.png" alt="foursquare" />
                </label>
              </div>
            -->
            </td>
          </tr>

          <tr>
            <td>
              <div class="checkbox" >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/instagram.png" alt="instagram" />
                </label>
              </div>

            </td>
            <td>

              <div class="checkbox" >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/four.png" alt="foursquare" />
                </label>
              </div>

            </td>
            <td>


             <div class="checkbox" >
              <label>
                <input type="checkbox" value="">
                <?php echo $PP_OP1; ?>
              </label>
            </div>

          </td>
          <td>

            <div class="checkbox" >
              <label>
                <input type="checkbox" value="">
                <?php echo $PP_OP2; ?>
                
              </label>
            </div>


          </td>
        </tr>

        <tr>
          <td>
          <div class="checkbox" >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/gplus.png" alt="gplus" />
                </label>
              </div>
            </td>
            <td>
          <div class="checkbox" >
                <label>
                  <input type="checkbox" value="">
                   <img src="img/weibo.png" alt="weibo" />
                  
                </label>
              </div>
            </td>
            <td>
          <div class="checkbox" >
                <label>
                  <input type="checkbox" value="">
                  <img src="img/renren.png" alt="renren" />
                </label>
              </div>
            </td>
          <td>
          <div class="checkbox" >
            <?php echo $PP_OP3; ?>
              </div>
            </td>
        </tr>
        
      </table>
    </div><!-- /.table-responsive -->

    </div>

    <div class="form-group">
              <a href ="index.php"><button type="button" class="btn btn-success"><?php echo $PP_BUTT1; ?></button></a>
              <button id="go1" type="submit" class="pull-right btn btn-primary" name="button" value='next' ><?php echo $PP_BUTT2; ?></button>
            </form>
      </div>
  </div>



  </div>
  <div class="clearfix"></div>
  <div class="page_num pull-right">2/3</div>
  </div>

  <div id="footer">
    <div class="container">
      <div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>

    </div>
  </div>

  <script>

  msgSENDER = <?php echo json_encode($ERR_SENDER); ?>;
  msgFORMAT = <?php echo json_encode($ERR_FORMAT); ?>;
  //alert(msgSENDER+"  "+msgFORMAT)
  </script>
</body>
</html>