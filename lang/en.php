<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '1') {
	$targ_description = "Target T is fashion designer XYZ.";
	$targ_title = "About the target";
}else if ($targetid == '321') {

	$targ_description = "Target T is studente";
	$targ_title = "About the target";
}


/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Intro";
$HEAD_TITLE_RIGHT_REPLY = "Reply";
$HEAD_TITLE_RIGHT_END = "End";
$FOOT_COPYRIGHT = "Copyright© 2014 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Welcome to Milgram Reloaded";
$P_BUTTON_ACCEPT = "Next";


$P_BODYPARAONE="With your help we are trying to reach the target &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='".$targ_description."' data-original-title='".$targ_title."'>T</span>&quot;.  In case you
know him personally please forward the message to T, otherwise, please forward the message to someone you know personally who might know T (directly or indirectly). If you agree, then please click the Next Button.";

$P_BODYPARATWO ="<label>By participating you get a chance to win an iPad Air.</label>";

$P_BODY_LOW = "Please feel free to contact us for any question : <strong>connect@cs.unibo.it</strong> ";

/***************  PAGE TWO ******************/

$PP_QONE = "Please tell us how you received the message.";
$PP_QTWO = "Please enter your email or mobile phone number.";
$PP_QTHREE = "We will use this information to contact you for the results of our lucky draw.";
$PP_QFOUR = "Select the network(s) from where you received the message.";
$PP_QSIX = "Which networks are you going to use to move the message towards its destination?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "others(optional)";
$PP_BUTT1= "Back";
$PP_BUTT2= "Next";

/***************  PAGE THREE ******************/

$PPP_FIRST = "You are almost done!";
$PPP_MAIN = "Please copy and paste the following message and send it to your contacts through your preferred network(s). Feel free to edit the message (but do not remove the link!).
";
$PPP_LETTER = "Hi , 
I am participating in an experiment from the university of Bologna. We are trying to reach [T], can you help me ?
http://m.web.cs.unibo.it/?t=$targetid&&my=$uidCoded";
$PPP_LAST = "Thank you for your help! (and good luck)";



// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "We would appreciate if you can try to do it. Otherwise also, thanks anyways !";



/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "Welcome | Milgram Experiment Project | Disi Unibo";
$PAGE2TITLE = "Message | Milgram Experiment Project | Disi Unibo";
$PAGE3TITLE = "Thank you | Milgram Experiment Project | Disi Unibo";
$PAGESTITLE = "We hope ... | Milgram Experiment Project | Disi Unibo";
$PAGEDRAWTITLE = "Lucky Draw | Milgram Experiment Project | Disi Unibo";

/**************** LUCKY DRAW  *******************/

$LUCKDRAWINSTRUCTIONS = "to do";

/***************  JS ******************/

$ERR_SENDER = "sender ID is NOT CORRECT please check it again from the message you received.";
$ERR_FORMAT = "please insert a correct email address or cellphone number";

?>