<?php
session_start(); 



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
  <script type='text/javascript' src='js/form2.js'></script>
  <link type='text/css' href='css/bootstrap.css' rel='stylesheet' />
  <link href="css/style.css" rel="stylesheet">
</head>

<body >
  <div class='container'>
    <div class="head clearfix">

      <h3 class="brand"><a href="http://unibo.it" target='_blank'><img src='img/unibo.png' alt='unibo logo' /></a></h3>
      <ul class="nav">
        <li><?php echo $HEAD_TITLE_RIGHT_INTRO; ?></li>
        <li class="active"><?php echo $HEAD_TITLE_RIGHT_REPLY; ?>2/2</li>
        <li><?php echo $HEAD_TITLE_RIGHT_END; ?></li>
      </ul>

    </div>
    <div class="content">
      <h3 class="form1-heading text-center">If you want to increase your chance of winning an iPad please also answer the next few questions.<br/> It will only take 2 minutes, your data will be stored
        anonymously (and no data will be released in future). Otherwise,
        please continue.
      </h3>
      <div>
        <form id = "form1" role="form" action="end.php" method="POST">
          <div class="form-group wru">
            <label for="howoldareyou">In which year are you born?</label>
            <input id="howoldareyou" type="text" class="form-control"  placeholder="1978" name="yourid">

            <br />
            <form>
              <div class="table-responsive q2s2">
                <label for="whoareyou">Gender</label>
                <table class="table">
                  <tr>
                    <td>   
                      <input id='gen1' type="radio" name="optionsRadios" class="genderradio" value="male">
                      <label for='gen1' class='pointable'>Male</label>             
                    </td>
                    <td>   
                      <input id='gen2' type="radio" name="optionsRadios" class="genderradio" value="female">
                      <label for='gen2' class='pointable'>Female</label>   
                    </td>
                    <td>
                     <input id='gen3' type="radio" name="optionsRadios" class="genderradio" value="dis">
                     <label for='gen3' class='pointable'>Prefer not to disclose</label>
                   </td>
                 </tr>
               </table>
             </div>
           </form>

           <form>
            <div class="table-responsive q2s2">
              <label for="whoareyou">Ethnic</label>
              <table class="table">
                <tr>
                  <td>   
                    <input id='eth1' type="radio" name="optionsRadios" class="ethnicradio" value="caucasian">
                    <label for='eth1' class='pointable'>Caucasian </label>           
                  </td>
                  <td>   
                    <input id='eth2' type="radio" name="optionsRadios" class="ethnicradio"  value="latino/hispanic">
                    <label for='eth2' class='pointable'>Latino/Hispanic</label>
                  </td>
                  <td>
                   <input id='eth3' type="radio" name="optionsRadios" class="ethnicradio"  value="middle eastern">
                  <label for='eth3' class='pointable'> Middle Eastern</label>
                 </td>
                 <td>
                  <input id='eth4' type="radio" name="optionsRadios" class="ethnicradio"  value="african">
                  <label for='eth4' class='pointable'>African</label>
                </td>

              </tr>
              <tr>
                <td>
                  <input id='eth5' type="radio" name="optionsRadios" class="ethnicradio"  value="east asian">
                  <label for='eth5'class='pointable' >East Asian</label>
                </td>
                <td>

                  <input id='eth6' type="radio" name="optionsRadios" class="ethnicradio"  value="south asian">
                  <label for='eth6' class='pointable'>South Asian</label>
                </td>
                <td>
                  <input id='eth7' type="radio" name="optionsRadios" class="ethnicradio"  value="caribbean">
                 <label for='eth7'class='pointable' > Caribbean</label>
                </td>
                <td>
                  <input id='eth8' type="radio" name="optionsRadios" class="ethnicradio" value="mixed">
                  <label for='eth8' class='pointable'>Mixed</label>

                </td>
              </tr>
              <tr>
                <td>
                  <input id='eth9' type="radio" name="optionsRadios" class="ethnicradio"  value="other">
                 <label for='eth9' class='pointable'> Other</label>
                </td>
              </tr>
            </table>
          </div>
        </form>
      </div>
      <div class="form-group">
        <label  class="control-label">￼Which networks are you going to use to move the message towards its destination?
        </label>
        <div class="">
          <div class="table-responsive q2s2">
            <table class="table">

              <tr>


                <td>                

                  <div class="checkbox " >
                    <label>
                      <input type="checkbox" value="1">
                      <img src="img/facebook.png" alt="Facebook" />
                    </label>
                  </div>
                </td>

                <td> 

                  <div class="checkbox " >
                    <label>
                      <input type="checkbox" value="2">
                      <img src="img/twitter.png" alt="twitter" />
                    </label>
                  </div>

                </td>

                <td>
                  <div class="checkbox" >
                    <label>
                      <input type="checkbox" value="3">
                      <img src="img/tumblr.png" alt="tumblr" />
                    </label>
                  </div>



                </td>
                <td>

                  <div class="checkbox " >

                    <label>
                      <input type="checkbox" value="4">
                      <img src="img/linkedin.png" alt="linkedin" />
                    </label>

                  </div>
                </td> 
              </tr>


              <tr>
                <td> 

                  <div class="checkbox " >
                    <label>
                      <input type="checkbox" value="5">
                      <img src="img/whatsapp.png" alt="whatsapp" />
                    </label>
                  </div>



                </td>
                <td>
                  <div class="checkbox " >
                    <label>
                      <input type="checkbox" value="6">
                      <img src="img/wechat.png" alt="wechat" />
                    </label>
                  </div>


                </td>
                <td>
                  <div class="checkbox " >
                    <label>
                      <input type="checkbox" value="7">
                      <img src="img/skype.png" alt="skype" />
                    </label>
                  </div>

                </td>
                <td>
                 <div class="checkbox " >
                  <label>
                    <input type="checkbox" value="8">
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
                <input type="checkbox" value="9">
                <img src="img/instagram.png" alt="instagram" />
              </label>
            </div>

          </td>
          <td>

            <div class="checkbox" >
              <label>
                <input type="checkbox" value="10">
                <img src="img/four.png" alt="foursquare" />
              </label>
            </div>

          </td>
          <td>


           <div class="checkbox" >
            <label>
              <input type="checkbox" value="11">
              <?php echo $PP_OP1; ?>
            </label>
          </div>

        </td>
        <td>

          <div class="checkbox" >
            <label>
              <input type="checkbox" value="12">
              <?php echo $PP_OP2; ?>

            </label>
          </div>


        </td>
      </tr>

      <tr>
        <td>
          <div class="checkbox" >
            <label>
              <input type="checkbox" value="13">
              <img src="img/gplus.png" alt="gplus" />
            </label>
          </div>
        </td>
        <td>
          <div class="checkbox" >
            <label>
              <input type="checkbox" value="14">
              <img src="img/weibo.png" alt="weibo" />

            </label>
          </div>
        </td>
        <td>
          <div class="checkbox" >
            <label>
              <input  type="checkbox" value="15">
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


<div class="form-group">
  <a href ="form.php"><button type="button" class="btn btn-success"><?php echo $PP_BUTT1; ?></button></a>
  <button id="go2" type="submit" class="pull-right btn btn-primary" name="button" value='next' ><?php echo $PP_BUTT2; ?></button>
</form>
</div>
</div>



</div>
<div class="clearfix"></div>
<div class="page_num pull-right">3/4</div>
</div>

<div id="footer">
  <div class="container">
      <div class="text-muted pull-left"><a href='#'>Legal</a> | <a href='http://en.wikipedia.org/wiki/Small-world_experiment' target='_blank'>Milgram</a> | <a href='#'>Milgram Reloaded</a></div>
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