<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "Mostafa Salehi hat an der Sharif Universität, Iran, in 2012 seine Doktorarbeit in technischer Informatik abgeschlossen. Im Februar 2013 fing er an der Universität Teheran als Assistenzprofessor an zu arbeiten. Von Februar 2014 bis September 2014, arbeitete er als Postdoc-Forscher an der Universität Bologna in Italien.";
	$targ_title = "Mostafa Salehi";
}else if ($targetid == '311') {
	$targ_description = "Payam Siyari erhielt seinen Bachelor Abschluss in Informatik von der Shahid Beheshti Universität, Teheran, Iran, in 2011. Seinen Masters Abschluss in technischer Informatik erhielt er von der Sharif University of Technology, Teheran, Iran, in 2013. Zur Zeit promoviert er in Informatik am Georgia Institute of Technology, Atlanta.";
	$targ_title = "Payam Siyari";
}else if ($targetid == '322') {
	$targ_description = "Alessandro Rioli began im Januar 2012 in Quanten-Computing zu promovieren und wartet nun darauf seine Doktorarbeit zu verteidigen. Er ist ein Physiker und unterrichtet momentan Mathematik und Physik in der Oberstufe. Er kommt aus Bologna, Italien.";
}else if ($targetid == '333') {
	$targ_description = "Antony Karatzas lebte in Norwich, Vereinigtes Königreich, für acht Jahre. Erst studierte er und dann arbeitete er für die letzten zwei Jahre als wissenschaftlicher Mitarbeiter im Center für Wettbewerbspolitik an der Universität East Anglia. Seit Oktober lebt er in Leamington Spa und arbeitet als Forscher in der Warwick Manufacturing Group an der Universität Warwick. Er wurde in Griechenland geboren und ist 32 Jahre alt. Er mag Sport, insbesondere Fußball und ist ein großer Liverpool FC Fan. Die meisten Leute kennen ihn als Tony";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '344') {
	$targ_description = "Amrith lebt seit August 2008 in Singapur, anfangs promovierte er an der NTU und später eröffnete er als Unternehmer ein online portal, das anderen Unternehmen hilft Daten Wissenschaftler zu engagieren. Er ist 30 Jahre alt, Inder und kommt aus Kerala.";
	$targ_title = "Amrith";
}else if ($targetid == '355') {
	$targ_description = "Deepak Subramanian ist ein Wissenschaftler und lebt zur Zeit in Rennes, Frankreich. Vorher lebte er in Singapur. Er ist geborener Chennai, Inder.";
	$targ_title = "Deepak Subramanian";
}
else if ($targetid == '366') {
	$targ_description = "Prithee Maga ist Dozentin im Bereich der fortgeschrittenen Informatik an der Universität Technology Malaysia, in Malaysia. Sie promovierte an der RMIT Universität in Melbourne, Australien. Sie ist Malaysierin und kommt aus Skudai, Johor. Sie liebt es zu wandern und zelten. Ihre Hobbys sind Badminton und Fahrradfahren.";
	$targ_title = "Prithee";
}
else if ($targetid == '377') {
	$targ_description = "Sandeep Ranjan kommt aus Jalandhar, India. Er is ein promovierter Wissenschaftler an der Punjab Technical University. Er hat seinen Bachelor Abschluss am DAV Institute of Engineering and Technology gemacht. Er arbeitete an der Lovely Professional Universität für sieben Jahre. Momentan arbeitet er als Assistenzprofessor im Computer Science Department am Lyallpur Khalsa College of Engineering in Jalandhar.";
	$targ_title = "Sandeep Ranjan";
}
else if ($targetid == '388') {
	$targ_description = "Jiang Shan studiert zur Zeit Internet der Dinge und ist im letzten Jahr seines Studiums an der Chengdu University of Technology in China. Er war Leiter der Studentenvereinigung für Informatik und verantwortlich für das Computerlabor in 2014. Er kommt aus Qinhuangdao, Hebei China. Er ist groß, sehr geselling und offen.";
	$targ_title = "Jiang Shan";
}
else if ($targetid == '399') {
	$targ_description = "Jessica Liebig promoviert an der  RMIT Universität in Melbourne, Australien. Sie wurde in Bremen, Deutschland geboren und ging 2007 nach Australien. Bevor sie ihren Bachelor in 2009 began, reiste sie durch Australien. Normalerweise nennen sie alle Jessi oder Jess. In ihrer Freizeit ließt sie gerne, zeichnet oder geht joggen. ";
	$targ_title = "Jessica Liebig";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Willkommen";
$HEAD_TITLE_RIGHT_REPLY = "Formular ausfüllen";
$HEAD_TITLE_RIGHT_END = "Link weiterleiten";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Willkommen";
$P_BUTTON_ACCEPT = "Next";


$P_BODYPARAONE="Wir versuchen mit Ihrer Hilfe die Zielperson &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot; zu erreichen. Sollten Sie ihn/sie persönlich kennen, leiten Sie diese Nachricht bitte zu $targ_title weiter. Andernfalls leiten Sie diese Nachricht bitte zu jemandem weiter den Sie persönlich kennen und der $targ_title kennen könnte.";
$P_BODYPARATWO ="<label>Durch Ihre Beteiligung haben Sie die Chance ein iPad Air zu gewinnen..</label>";
$P_BODY_LOW = "Bitte zögern Sie nicht, uns für jede Frage zu kontaktieren: <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "Die Teilnahme an dieser Studie ist Ihnen vollkommen freigestellt. Es ist Ihr Recht die Teilnahme an der Studie abzulehnen. Sollten Sie sich jedoch dafür entscheiden mitzumachen, können Sie jederzeit, ohne einen Grund zu nennen, Ihre Beteiligung an der Studie abbrechen, was keinerlei negative Folgen hat. Sollten Sie sich zur Teilnahme an der Studie entschließen, stimmen Sie zu, dass Ihre Antworten zu den Fragen der folgenden Umfrage auf dem Server der Universität Bologna gespeichert werden. Alle Informationen sind geheim, das heißt, dass nur die Forscher auf die gespeicherten Informationen zugreifen können (Passwort gesichert) und dass diese nicht veröffentlich werden. Dadurch, dass Ihr Name nicht in Verbindung mit den gesammelten Daten von der Studie gebracht wird, ist Ihre Anonymität gewährleistet. Die Teilnehmer werden in Reporten oder Veröffentlichungen nicht identifiziert. 
<br/>
Mit dem Ausfüllen der Umfrage, willigen Sie ein, dass die Daten für Forschungszwecke genutzt werden. 
<br/>
Bitte bestätigen Sie, dass Sie die oben angegebenen Informationen verstehen und dass Sie sich bereit erklären an der Studie teilzunehmen.";

$P_CONSUS = "Ich verstehe und erkläre mich bereit an der Studie teilzunehmen";

/***************  PAGE TWO ******************/

$PP_QONE = "Bitte erzählen Sie uns, wie Sie diese Nachricht bekommen haben.";
$PP_QTWO = "Bitte geben Sie Ihre Email Adresse oder Telefonnummer ein.";
$PP_QTHREE = "Wir benutzen hIre Email Adresse um Sie über das Ergebnis des Gewinnspiels zu benachrichtigen.";
$PP_QFOUR = "Wälen Sie die Netwerke aus, durch die Sie diese Nachricht erhalten haben.";
$PP_QSIX = "Welche Netzwerke werden Sie benutzen um diese Nachricht weiterzuleiten?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "Andere (optional)";
$PP_BUTT1= "zurück";
$PP_BUTT2= "Weiter";

$PP_WARNING2 = "Please select at least one network on which you received the message.";
$PP_WARNINGTOP = "Ein oder mehrere Felder sind leer, bitte füllen Sie diese aus und klicken Sie weiter.";
$PP_WHICHYEAR = "In welchem Jahr wurden Sie geboren?";
$PP_WHICHNET = "Welche Netzwerke werden Sie benutzen um diese Nachricht weiterzuleiten?";
$PP_SEX1 = "Geschlecht";
$PP_SEX2 = "männlich";
$PP_SEX3 = "weiblich";
$PP_SEX4 = "bevorzuge ich nicht anzugeben";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Fast geschafft!";

$PPP_MAIN = "Bitte kopieren Sie die folgende Nachricht und senden Sie sie durch Ihr bevorzugtes Netzwerk weiter. Sie können den Text gerne verändern (aber bitte löschen Sie den Link nicht!).";

$PPP_MAIN1 = "Bitte konvertieren Sie die folgende Meldung in der Sprache, die Sie Ihre Freunde wissen.";

$PPP_LETTER = "Hallo,
Ich nehme an einem Experiment der Universität Bologna teil. Wir versuchen ... mit dieser Nachricht zu erreichen, kannst Du mir helfen?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "Vielen Dank für Ihre Hilfe! Sollten Sie Teil einer erfolgreichen Kette von Nachrichten zu einer Zielperson sein, werden Sie im Gewinnspiel berücksichtigt. Also, bitte geben Sie Ihr Bestes im Weiterleiten des obigen Links zu sovielen Leuten wie möglich.";



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
$PPP_CLICKEICON = "Klicken Sie auf die Symbole um in verschiedenen Netzwerken zu teilen.";
$PALL_EXPINFO = "Experiment Informationen";
$PALL_STATEMENT = "Datenschutzerklärung";

?>