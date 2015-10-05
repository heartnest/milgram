<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "Mostafa Salehi received his PhD degree in computer engineering from Sharif University of Technology, Iran, in November 2012. On February 2013, he joined the University of Tehran as an assistant professor. From February 2014 to September 2014, he was a postdoctoral researcher at the University of Bologna, Italy. ";
	$targ_title = "Mostafa Salehi";
}else if ($targetid == '311') {
	$targ_description = "Payam Siyari received his BSc degree in computer science from Shahid Beheshti Univeristy, Tehran, Iran, in 2011, and the MSc degree in computer engineering from Sharif University of Technology, Tehran, Iran, in 2013. He is currently working toward the PhD degree in computer science at Georgia Institute of Technology, Atlanta. ";
	$targ_title = "Payam Siyari";
}else if ($targetid == '322') {
	$targ_description = "Alessandro Rioli started his PhD in quantum computing in January 2012 and he is waiting to defend his PhD Thesis. He is a physicist and is currently teaching Mathematics and Physics at High school. He is from Bologna, Italy.";
	$targ_title = "Alessandro Rioli";
}else if ($targetid == '333') {
	$targ_description = "Antony Karatzas was living in Norwich, UK for the 8 yrs. First for study and for the last 2 years work as a research associate at the Center for Competition Policy, University of East Anglia. Since October 2014 he is living in Leamington Spa doing his post-doc at the Warwick manufacturing group, University of Warwick. He is originally from Greece, male, almost 32 years of age. He is a big sports fan, especially football. He is an avid Liverpool FC supporter. Most people in the UK know him by 'Tony'.";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '344') {
	$targ_description = "Amrith has been living in Singapore since August 2008, initially as a PhD student at NTU and then as an entrepreneur setting up an online portal to help companies hire data scientists. He is a 30 year old Indian and is from Kerala, India.";
	$targ_title = "Amrith";
}else if ($targetid == '355') {
	$targ_description = "Deepak Subramanian is a PhD student in CentraleSupelec, Rennes, France. He has lived in Singapore and is originally from Chennai, India.";
	$targ_title = "Deepak Subramanian";
}
else if ($targetid == '366') {
	$targ_description = "Prithee Maga is a senior lecturer in advanced informatics school, University Technology Malaysia , Malaysia. She did her PhD from RMIT University, Melbourne, Australia. She is a Malaysian from Skudai, Johor. She loves hiking, touring and camping. Her hobbies are playing badminton and cycling.";
	$targ_title = "Prithee";
}
else if ($targetid == '377') {
	$targ_description = "Sandeep Ranjan is from Jalandhar, India. He is a Ph.D scholar in Punjab Technical University and completed his bachelors degree from DAV Institute of Engineering and Technology. He worked at Lovely Professional University for 7 years. Presently, he is working as an Assistant Professor in Computer Science Department in Lyallpur Khalsa College of Engineering, Jalandhar from last two years.";
	$targ_title = "Sandeep Ranjan";
}
else if ($targetid == '388') {
	$targ_description = "Jiang Shan is currently the last year student in Chengdu University of Technology, China, where he studies internet of things. He used to be the head of student association for computer science study. He used to be the responsible for computer lab in 2014. He is basically from Qinhuangdao, Hebei China. He is a tall boy, very social and open minded. ";
	$targ_title = "Jiang Shan";
}
else if ($targetid == '399') {
	$targ_description = "Jessica Liebig is a PhD candidate at RMIT University in Melbourne, Australia. She was born in Bremen, Germany, but came to Australia in 2007. Before commencing her Bachelor degree in 2009 she was traveling around Australia. People usually call her Jessi or Jess. In her free time she likes to read, draw and go jogging. ";
	$targ_title = "Jessica Liebig";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Welcome";
$HEAD_TITLE_RIGHT_REPLY = "Fill in the Form";
$HEAD_TITLE_RIGHT_END = "Forward the link";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Welcome";
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
$PP_WARNINGTOP = "One or more fields are empty. Please fill all the fields to go to next page";
$PP_WHICHYEAR = "In which year are you born?";
$PP_WHICHNET = "Which networks are you going to use to forward the message towards its destination?";
$PP_SEX1 = "Gender";
$PP_SEX2 = "Male";
$PP_SEX3 = "Female";
$PP_SEX4 = "Prefer not to disclose";

/***************  PAGE THREE ******************/

$PPP_FIRST = "You are almost done!";

$PPP_MAIN = "Please copy and paste the following message and send it to your contacts through your preferred network(s). Feel free to edit the message (but do not remove the link!).";

$PPP_MAIN1 = "Please convert the following message in the language which your friends can understand.";


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


/***************  JS ******************/

$ERR_SENDER = "sender ID is NOT CORRECT please check it again from the message you received.";
$ERR_FORMAT = "please insert a correct email address or cellphone number";


/******** new added, 10 - 09 - 2015 ***************/
$PPP_CLICKEICON = "Click icons to share on various networks";
$PALL_EXPINFO = "Experiment Information";
$PALL_STATEMENT = "Privacy Statement";

?>