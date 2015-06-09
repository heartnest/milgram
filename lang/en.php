<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '1') {
	$targ_description = "Target T is fashion designer XYZ.";
	$targ_title = "About the target";
}else if ($targetid == '311') {
	$targ_description = "I was living in Norwich, UK for the 8 yrs. First for study and for the last 2 years work as a research associate at the Centre for Competition Policy, University of East Anglia. Since October i live Leamington Spa doing a post-doc at the Warwick manufacturing group,University of Warwick. I am originally from Greece, male, almost 32 years of age. I am a big sports fan, especially football. I am an avid Liverpool FC supporter. I am very sociable, I go out often and I have a lot of friends both in real life and on Facebook. I do not use any other social network much and all my contacts on Linkdin or twitter are a sub-set of my Facebook contacts. Most people in the UK know me as and call me 'Tony'.";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '322') {
	$targ_description = "Deepak Subramanian is a researcher in France and currently lives in Rennes. He has lived in Singapore and is an Indian by birth. He is not on facebook or WhatsApp but is available on Skype or email or on twitter.";
	$targ_title = "Deepak Subramanian";
}else if ($targetid == '333') {
	$targ_description = "I study in Chengdu University of Technology, I used to be the head of student association for computer science study and at that time I supervised the usage of our computer lab. I’m active in Wechat, QQ and Weibo";
	$targ_title = "jiang shan";
}else if ($targetid == '344') {
	$targ_description = "xxx";
	$targ_title = "Mr abc";
}else if ($targetid == '355') {
	$targ_description = "xxx";
	$targ_title = "Mr abc";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Welcome";
$HEAD_TITLE_RIGHT_REPLY = "Fill the Form";
$HEAD_TITLE_RIGHT_END = "Forward the link";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Welcome to Milgram Reloaded!";
$P_BUTTON_ACCEPT = "Next";


$P_BODYPARAONE="With your help we are trying to reach the target &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;.  In case you
know him personally please forward the message to $targ_title, otherwise, please forward the message to someone you know personally who might know $targ_title (directly or indirectly).";
$P_BODYPARATWO ="<label>By participating you get a chance to win an iPad Air.</label>";
$P_BODY_LOW = "Please feel free to contact us for any question : <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "Taking part in this study is entirely up to you. You have the right to refuse to participate in this study. If you decide to take part, you may choose to pull out of the study at any time without giving a reason and without any negative impact. If you choose to participate in the survey, you understand that your responses to the survey questions will be stored in the severs of the University of Bologna. All information is kept confidential. That means it is accessible only by the investigators (i.e., password-protected) and is not published. Your anonymity will be achieved by not associating your name with data collected during the study. Participants will not be identified in any reports or publications.
<br/>
By completing the survey you are providing your consent to use the data for purposes of research. 
<br/>
Please indicate that you understand the information presented above, and consent to participate in this study.";

$P_CONSUS = "I understand and consent to participate in this study.";

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

$PP_WARNING2 = "Please select at least one network on which you received the message.";
$PP_WHICHYEAR = "In which year are you born?";
$PP_WHICHNET = "Which networks are you going to use to forward the message towards its destination?";
$PP_SEX1 = "Gender";
$PP_SEX2 = "Male";
$PP_SEX3 = "Female";
$PP_SEX4 = "Prefer not to disclose";

/***************  PAGE THREE ******************/

$PPP_FIRST = "You are almost done!";
$PPP_MAIN = "Please copy and paste the following message and send it to your contacts through your preferred network(s). Feel free to edit the message (but do not remove the link!).
";
$PPP_LETTER = "Hi , 
I am participating in an experiment from the university of Bologna. We are trying to reach $targ_title, can you help me ?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "Thank you for your help! If you are part of a successful chain to the target, you will be considered for lucky draw prizes. So please try your best in forwarding the above link to as many people as possible.";



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