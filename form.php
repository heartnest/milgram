<?php
session_start(); 



if ($_GET['lan'] == 'ar') {
  include "lang/ar.php";
}
else if ($_GET['lan'] == 'cn') {
  include "lang/cn.php";
}
else if ($_GET['lan'] == 'es') {
  include "lang/es.php";
}
else if ($_GET['lan'] == 'fr') {
  include "lang/fr.php";
}
else if ($_GET['lan'] == 'gk') {
  include "lang/gk.php";
}
else if ($_GET['lan'] == 'gr') {
  include "lang/gr.php";
}
else if ($_GET['lan'] == 'it') {
  include "lang/it.php";
}
else if ($_GET['lan'] == 'jp') {
  include "lang/jp.php";
}
else if ($_GET['lan'] == 'ml') {
  include "lang/ml.php";
}
else if ($_GET['lan'] == 'pr') {
  include "lang/pr.php";
}
else if ($_GET['lan'] == 'pt') {
  include "lang/pt.php";
}
 else if ($_GET['lan'] == 'rm') {
  include "lang/rm.php";
}
 else if ($_GET['lan'] == 'ru') {
  include "lang/ru.php";
}
else if ($_GET['lan'] == 'tm') {
  include "lang/tm.php";
}
else{
  include "lang/en.php";
}



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
  <title><?php echo $PAGE2TITLE; ?></title>
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
  <style>
  .bs-callout-warning{
    border-color: #eee;
    border-left-color: red;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    padding: 20px;
    /* margin: 20px 0;*/
  }
  .push {
  height: 20px;  
}


  </style>
</head>

<body >
  <div class='container'>
    <div class="head clearfix">

      <h3 class="brand"><a href="http://unibo.it" target='_blank'><img src='img/unibo.png' alt='unibo logo' /></a></h3>
      <ul class="nav">
                        <li><a href='info.php' target='_blank'><?php echo $PALL_EXPINFO; ?></a>
                <li> <a href='PrivacyStatement.pdf'  target='_blank'><?php echo "$PALL_STATEMENT";?></a></li></li>
      </ul>

    </div>
    <div class="content">


      <h3 class="form1-heading text-center"><?php echo $PP_QONE; ?></h3>


    <div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
        <a href="index.php" type="button" class="btn btn-primary btn-circle">1</a><span class="arrow glyphicon glyphicon-chevron-right"></span> 
        <p><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-primary btn-circle">2</a><span class="arrow glyphicon glyphicon-chevron-right"></span>
        <p><?php echo $HEAD_TITLE_RIGHT_REPLY; ?></p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p><?php echo $HEAD_TITLE_RIGHT_END; ?></p>
      </div>
        </div>
  </div>

<div class="push"></div>
      <div>
          <div class='text-center warningtop hidden'><label><?php echo $PP_WARNINGTOP;?></label></div>

        <form id = "form1" role="form" action="end.php" method="POST">
          <div class="form-group wru">
            <label for="whoareyou"><?php echo $PP_QTWO; ?></label>
            <div><small class="smallnotice"><?php echo $PP_QTHREE; ?></small></div>
            <input id="whoareyou" type="text" class="form-control"  placeholder="my@email.com or 00393232222222" name="yourid">
            <div><small class="alert-warning warning1"></small></div>
          </div>
          <div class="form-group">
            <label  class="control-label"><?php echo $PP_QFOUR; ?></label>
            <div><small class="alert-warning warning2 hidden"><?php echo $PP_WARNING2;?></small></div>
            <div class="">
              <div class="table-responsive arrivalNetworks q2s1">
                <table class="table inputnetwork">
                  <tr>
                    <td>                
                      <div class="checkbox " >
                        <label>
                          <input type="checkbox" value="facebook">
                          <img src="img/facebook.png" alt="Facebook" />
                        </label>
                      </div>
                    </td>
                    <td> 
                      <div class="checkbox " >
                        <label>
                          <input type="checkbox" value="twitter">
                          <img src="img/twitter.png" alt="twitter" />
                        </label>
                      </div>

                    </td>

                    <td>
                      <div class="checkbox" >
                        <label>
                          <input type="checkbox" value="tumblr">
                          <img src="img/tumblr.png" alt="tumblr" />
                        </label>
                      </div>



                    </td>
                    <td>

                      <div class="checkbox " >

                        <label>
                          <input type="checkbox" value="linkedin">
                          <img src="img/linkedin.png" alt="linkedin" />
                        </label>

                      </div>
                    </td> 
                  </tr>


                  <tr>
                    <td> 

                      <div class="checkbox " >
                        <label>
                          <input type="checkbox" value="whatsapp">
                          <img src="img/whatsapp.png" alt="whatsapp" />
                        </label>
                      </div>



                    </td>
                    <td>
                      <div class="checkbox " >
                        <label>
                          <input type="checkbox" value="wechat">
                          <img src="img/wechat.png" alt="wechat" />
                        </label>
                      </div>


                    </td>
                    <td>
                      <div class="checkbox " >
                        <label>
                          <input type="checkbox" value="skype">
                          <img src="img/skype.png" alt="skype" />
                        </label>
                      </div>

                    </td>
                    <td>
                     <div class="checkbox " >
                      <label>
                        <input type="checkbox" value="telegram">
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
                <input type="checkbox" value="instagram">
                <img src="img/instagram.png" alt="instagram" />
              </label>
            </div>

          </td>
          <td>

            <div class="checkbox" >
              <label>
                <input type="checkbox" value="foursquare">
                <img src="img/four.png" alt="foursquare" />
              </label>
            </div>

          </td>
          <td>
          <div class="checkbox" >
            <label>
              <input  type="checkbox" value="renren">
              <img src="img/renren.png" alt="renren" />
            </label>
          </div>



        </td>

        <td>
          <div class="checkbox" >
            <label>
              <input type="checkbox" value="weibo">
              <img src="img/weibo.png" alt="weibo" />

            </label>
          </div>

        </td>
      </tr>

      <tr>
        <td>
          <div class="checkbox" >
            <label>
              <input type="checkbox" value="googleplus">
              <img src="img/gplus.png" alt="googleplus" />
            </label>
          </div>
        </td>

        <td>

        </td>

                <td>
                     <div class="checkbox" >
            <label>
              <input type="checkbox" value="email">
              <?php echo $PP_OP1; ?>
            </label>
          </div>

        </td>
        <td>
          <div class="checkbox" >
            <input type='text' class='form-control alt_social'   placeholder=<?php echo $PP_OP3; ?> />
          </div>
        </td>
      </tr>

    </table>
  </div><!-- /.table-responsive -->
</div>
<div>
  <form id = "form1" role="form" action="end.php" method="POST">
    <div class="form-group wru">
      <label for="howoldareyou"><?php echo "$PP_WHICHYEAR";?></label>
      <input id="howoldareyou" type="text" class="form-control"  placeholder="example: 1978" name="yourid">

      <br />
      <form>
        <div class="table-responsive">
          <label for="whatgender"><?php echo "$PP_SEX1";?></label>
          <table id= 'whatgender' class="table">
            <tr>
              <td>   
                <input id='gen1' type="radio" name="optionsRadios" class="genderradio" value="male">
                <label for='gen1' class='pointable'><?php echo "$PP_SEX2";?></label>             
              </td>
              <td>   
                <input id='gen2' type="radio" name="optionsRadios" class="genderradio" value="female">
                <label for='gen2' class='pointable'><?php echo "$PP_SEX3";?></label>   
              </td>
              <td>
               <input id='gen3' type="radio" name="optionsRadios" class="genderradio" value="dis">
               <label for='gen3' class='pointable'><?php echo "$PP_SEX4";?></label>
             </td>
           </tr>
         </table>
       </div>
     </form>


   </div>
   <div class="form-group">
    <label  class="control-label"><?php echo "$PP_WHICHNET";?>
    </label>
    <div class="">
      <div class="table-responsive q2s2 outwardNetworks">
        <table class="table">

          <tr>


            <td>                

              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="facebook">
                  <img src="img/facebook.png" alt="Facebook" />
                </label>
              </div>
            </td>

            <td> 

              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="twitter">
                  <img src="img/twitter.png" alt="twitter" />
                </label>
              </div>

            </td>

            <td>
              <div class="checkbox" >
                <label>
                  <input type="checkbox" value="tumblr">
                  <img src="img/tumblr.png" alt="tumblr" />
                </label>
              </div>



            </td>
            <td>

              <div class="checkbox " >

                <label>
                  <input type="checkbox" value="linkedin">
                  <img src="img/linkedin.png" alt="linkedin" />
                </label>

              </div>
            </td> 
          </tr>


          <tr>
            <td> 

              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="whatsapp">
                  <img src="img/whatsapp.png" alt="whatsapp" />
                </label>
              </div>



            </td>
            <td>
              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="wechat">
                  <img src="img/wechat.png" alt="wechat" />
                </label>
              </div>


            </td>
            <td>
              <div class="checkbox " >
                <label>
                  <input type="checkbox" value="skype">
                  <img src="img/skype.png" alt="skype" />
                </label>
              </div>

            </td>
            <td>
             <div class="checkbox " >
              <label>
                <input type="checkbox" value="telegram">
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
                <input type="checkbox" value="instagram">
                <img src="img/instagram.png" alt="instagram" />
              </label>
            </div>

          </td>
          <td>

            <div class="checkbox" >
              <label>
                <input type="checkbox" value="foursquare">
                <img src="img/four.png" alt="foursquare" />
              </label>
            </div>

          </td>
          <td>


           <div class="checkbox" >
            <label>
              <input type="checkbox" value="email">
              <?php echo $PP_OP1; ?>
            </label>
          </div>

        </td>
        <td>



        </td>
      </tr>

      <tr>
        <td>
          <div class="checkbox" >
            <label>
              <input type="checkbox" value="googleplus">
              <img src="img/gplus.png" alt="googleplus" />
            </label>
          </div>
        </td>
        <td>
          <div class="checkbox" >
            <label>
              <input type="checkbox" value="weibo">
              <img src="img/weibo.png" alt="weibo" />

            </label>
          </div>
        </td>
        <td>
          <div class="checkbox" >
            <label>
              <input  type="checkbox" value="renren">
              <img src="img/renren.png" alt="renren" />
            </label>
          </div>
        </td>
        <td>
          <div class="checkbox" >
            <input type='text' class='form-control alt_social'   placeholder=<?php echo $PP_OP3; ?> />
          </div>
        </td>
      </tr>

    </table>
  </div><!-- /.table-responsive -->
</div>
</div>


</form>
</div>
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
    <div class="text-muted pull-left">
      <a href='info.php' target='_blank'><?php echo $PALL_EXPINFO; ?></a>
      | <a href='PrivacyStatement.pdf'  target='_blank'><?php echo "$PALL_STATEMENT";?></a>
    </div>
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