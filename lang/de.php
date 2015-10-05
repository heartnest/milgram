<?php

session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];

if ($targetid == '123') {
	$targ_description = "Target T is fashion designer XYZ.";
	$targ_title = "About the target";
}else if ($targetid == '321') {
	$targ_description = "Target T is studente";
	$targ_title = "About the target";
}


/******** end 29/07/2014 *********/

/***************  COMMON ******************/

$lan = 'en';
$HEAD_TITLE_LEFT = "Milgram Reloaded !";
$HEAD_TITLE_RIGHT_INTRO = "Intro";
$HEAD_TITLE_RIGHT_REPLY = "antworten";
$HEAD_TITLE_RIGHT_END = "Ende";
$FOOT_COPYRIGHT = "Copyright © 2014 Milgram-Test CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Willkommen in der Milgram-Projekt";
$P_BUTTON_REFUSE = "verweigern";
$P_BUTTON_ACCEPT = "akzeptieren";
$P_BODYPARAONE="Das Ziel dieses Experiments ist es, die Auswirkungen der Technologie auf unsere Kommunikationskanäle zu verstehen. 
Mit Ihrer Hilfe werden wir versuchen, das Ziel zu erreichen &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. Bei ihm wissen Sie, leiten Sie die Nachricht an T, 
andernfalls  <strong>please</strong> Weiterleiten der Nachricht an Ihre knowns die T wissen könnte, <strong>direkt oder indirekt</strong>.
			";
$P_BODYPARATWO ="By participating you get a chance to win the <strong><a target='_blank' href='luckydraw.php?lan=de'>LUCKY DRAW</a></strong>. Sie können in diesem Versuch durch die Beantwortung beitragen 
einige Fragen, die 2 Minuten dauert (glauben wir). Ihre Daten werden anonym gespeichert und es werden keine Daten sein 
veröffentlicht in der Zukunft.";
$P_BODY_LOW = "Bitte zögern Sie nicht, uns für alle Anfragen an: <strong>connect@cs.unibo.it</strong> <br />Wir werden mehr als glücklich, zu beantworten, auch wenn es nur ein Hallo kommt von Ihnen.";

/***************  PAGE TWO ******************/

$PP_QONE = "Bitte sagen Sie uns, wie Sie die Nachricht bekam";
$PP_QTWO = "Wer bist du? (Verwenden Sie E-Mail oder Handynummer als ID)";
$PP_QTHREE = "Bitte benutzen Sie Ihr realen Informationen, die Sie für das Ergebnis unserer Verlosung kontaktiert werden.";
$PP_QFOUR = "Wählen Sie eine von den Netzwerken, von wo aus Sie die Nachricht bekam.";
$PP_QFIVE = "Wer hat Sie kontaktiert? (Legen Sie die Absenderkennung, dh E-Mail oder Handy bitte)";
$PP_QSIX = "Welche Netzwerke Sie werden versuchen, diese Informationen für die Auswahl Ihrer Freunde weiterleiten";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "others(optional)";
$PP_BUTT1= "zurück";
$PP_BUTT2= "nächste";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Danke! Einen letzten Gefallen";
$PPP_MAIN = "Um sicher zu gehen, dass Sie zu bekommen für die Verlosung aufgeführt, bitte kopieren Sie den folgenden Nachrichtenvorlage 
         zu Ihren Freunden, die hilfreich bei der Erreichung T. Ziel sein könnte Wir werden das sicher, wenn Sie wissen, 
         Diese Nachricht weitergeleitet oder nicht;) Alles Gute für die Verlosung :)!!";
$PPP_NOTE = "Obwohl die folgende Vorlage vorhanden ist, warum nicht Sie eine persönliche Nachricht an Ihre Freunde senden.";
$PPP_LETTER = "Hallo , 
Es ist ein interessantes Experiment geht in der Universität von Bologna. Die gute Sache ist, gibt es eine Verlosung (2 Preise), wenn Sie teilnehmen und leitet es an deine Freunde. Nach ist der Link zu dem Projekt zu beteiligen. Bitte beteiligen Sie sich und lassen Sie uns die Preise zu gewinnen :)
http://m.web.cs.unibo.it/?t=$targetid
Meine ID ist:";
$PPP_LAST = "Wir leiten die Nachricht an Ihre E-Mail, falls Sie vergessen. ";




// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "to do ...";

/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "to do .. ";
$PAGE2TITLE = "to do .. ";
$PAGE3TITLE = "to do .. ";
$PAGESTITLE = "to do ..  ";
$PAGEDRAWTITLE = "to do .. ";

/**************** LUCKY DRAW  *******************/

$LUCKDRAWINSTRUCTIONS = "to do .. ";

/***************  JS ******************/

$ERR_SENDER = "to do ...";
$ERR_FORMAT = "to do ...";

/******** new added, 10 - 09 - 2015 ***************/

$PPP_CLICKEICON = "Click icons to share on various networks";
$PALL_EXPINFO = "Experiment Information";
$PALL_STATEMENT = "Privacy Statement";


?>