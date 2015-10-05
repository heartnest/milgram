<?php

session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "Mostafa Salehi a reçu son diplôme de doctorat en génie informatique de l'Université Technologie Sharif en Iran, en Novembre 2012. En Février 2013, il a travaillé l'Université de Téhéran en tant que professeur assistant. De Février 2014 à Septembre 2014,
	il a été chercheur postdoctoral à l'Université de Bologne, Italie. ";
	$targ_title = "Mostafa Salehi";
}else if ($targetid == '311') {
	$targ_description = "Payam Siyari a reçu son baccalauréat èn sciences informatique de l'université de Shahid Beheshti Univeristy àTéhéran, en 2011, et de la maîtrise en génie informatique de l'Université de Technologie Sharif, à Téhéran, en 2013. Il travaille actuellement pour conquerir le doctorat en informatique au Georgia Institute of Technology, à Atlanta.";
	$targ_title = "Payam Siyari";
}else if ($targetid == '322') {
	$targ_description = "Alessandro Rioli a commencé son doctorat en calcul quantique en Janvier 2012 et il est en attente à défendre sa thèse de doctorat. Il est un physicien et est actuellement professeur de mathématiques et de physique à l'école secondaire. Il est originaire de Bologne, Italie.";
	$targ_title = "Alessandro Rioli";
}else if ($targetid == '333') {
	$targ_description = "Antony Karatzas a veçu à Norwich, Royaume-Uni pour 8 ans. D'abord pour étudier, et pour les dernièrs 2 ans il a travaillé comme un associé de recherche au Centre pour la politique de la concurrence chez l'Université d'East Anglia. Depuis Octobre il vit dans Leamington Spa en faisant son post­doc sur le groupe de fabrication Warwick, Université de Warwick. Il est originaire de la Grèce, de sexe masculin, près de 32 ans d'âge. Il est un grand fan de sport, surtout le football. Il est un fervent défenseur du Liverpool FC. La plupart des gens au Royaume­Uni le connaissent par 'Tony'.";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '344') {
	$targ_description = "Amrith a vécu à Singapour depuis Août 2008, d'abord comme un étudiant au doctorat à NTU et puis comme la mise en place d'un portail en ligne pour aider les entreprises à louer les données  scientifiques. Il a 30 ans et il est Indien et est originaire du Kerala, en Inde.";
	$targ_title = "Amrith";
}else if ($targetid == '355') {
	$targ_description = "Deepak Subramanian est un étudiant au doctorat en Centrale Supelec, Rennes, France. Il a vécu à Singapour et il est originaire de Chennai, en Inde.";
	$targ_title = "Deepak Subramanian";
}
else if ($targetid == '366') {
	$targ_description = "Prithee Maga est maître de conférences à l'école de l'informatique avancée pour la technologie, à l'Université de Malaisie, Malaisie. Elle a fait son doctorat de l'Université RMIT, Melbourne, Australie. Elle est  Malaisienne de Skudai, Johor. Elle aime la randonnée, et le camping. Ses hobbies sont le badminton et le cyclisme.";
	$targ_title = "Prithee Maga";
}
else if ($targetid == '377') {
	$targ_description = "Sandeep Ranjan vient de Jalandhar, Inde. Il a reçu son doctorat en Punjab Technical University et a obtenu son diplôme de baccalauréat de DAV Institut d'Ingénierie et de Technologie. Il a travaillé à l'Université de professionnel Belle pendant 7 ans. Actuellement, il travaille comme professeur adjoint au Département Computer Science dans Lyallpur Khalsa College of Engineering à Jalandhar, depuis deux années.";
	$targ_title = "Sandeep Ranjan";
}
else if ($targetid == '388') {
	$targ_description = "Jiang Shan frequente actuellement la dernière année d'études à l'Université de technologie de Chengdu, en Chine, où il étudie l'Internet des objets. Il a été à la tête de l'association des étudiants pour l'étude de la science informatique. Il a été aussi  le responsable de la salle informatique en 2014. Il est de Qinhuangdao, Hebei en Chine. Il est haut, très social et ouvert d'esprit.";
	$targ_title = "Jiang Shan";
}
else if ($targetid == '399') {
	$targ_description = "Jessica Liebig est un candidat au doctorat à l'Université RMIT de Melbourne, en Australie. Elle est née à Brême, en Allemagne, mais elle est venue en Australie en 2007. Avant de commencer son baccalauréat en 2009, elle était en voyage autour de l'Australie. Les gens l'appellent habituellement Jessi ou Jess. Dans son temps libre, elle aime lire, dessiner et faire du jogging. ";
	$targ_title = "Jessica Liebig";
}

/******** end 29/07/2014 *********/


/***************  COMMON ******************/

$lan = 'en';
$HEAD_TITLE_LEFT = "Milgram Reloaded !";
$HEAD_TITLE_RIGHT_INTRO = "Intro";
$HEAD_TITLE_RIGHT_REPLY = "répondre";
$HEAD_TITLE_RIGHT_END = "fin";
$FOOT_COPYRIGHT = "Copyright © 2014 Milgram test CST Unibo";

/***************  PAGE ONE ******************/

$P_TITLE= "Bienvenue sur le projet de Milgram";
$P_BUTTON_REFUSE = "refuser";
$P_BUTTON_ACCEPT = "accepter";
$P_BODYPARAONE="The aim of this experiment is to understand the impact of technology on our communication channels. 
With your help we are trying to reach the target &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. In case you know him, please forward the message to T,
otherwise,  <strong>please</strong> forward the message to your knowns who might know T <strong>directly or indirectly</strong>.
			";
$P_BODYPARATWO ="By participating you get a chance to win the <strong><a target='_blank' href='luckydraw.php?lan=fr'>LUCKY DRAW</a></strong>. You can contribute in this experiment by answering 
few questions, which takes 2 minutes (trust us). Your data will be stored anonymously and no data will be 
made public in future.";
$P_BODY_LOW = "Please feel free to contact us for any queries : <strong>connect@cs.unibo.it</strong> <br />We will more than happy to answer, even if it is just a hi comes from you.";

/***************  PAGE TWO ******************/

$PP_QONE = "S'il vous plaît nous dire comment vous avez obtenu le message";
$PP_QTWO = "Qui êtes-vous? (Utiliser le courrier électronique ou le numéro de téléphone portable que votre ID)";
$PP_QTHREE = "S'il vous plaît utilisez votre vraie information, vous serez contacté pour la suite de notre tirage au sort.";
$PP_QFOUR = "Sélectionnez l'une sur les réseaux de l'endroit où vous avez obtenu le message.";
$PP_QFIVE = "Qui vous a contacté? (Insérez l'expéditeur ID dire email ou téléphone portable s'il vous plaît)";
$PP_QSIX = "Quels sont les réseaux que vous allez essayer de transmettre cette information pour sélectionner vos amis";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "<input type='text' class='form-control' placeholder='autres (facultatif)' />";
$PP_BUTT1= "arrière";
$PP_BUTT2= "suivant";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Merci! Une dernière faveur";
$PPP_MAIN = "Pour vous assurer que vous devenez obtenir la liste pour le tirage au sort, s'il vous plaît copiez collez le modèle de message suivant 
         à vos amis qui pourraient être utiles dans la réalisation de cibler T. Nous saurons ce pour vous si vous avez 
         transmis ce message ou pas;) Tout le meilleur pour le tirage au sort :)!!";
$PPP_NOTE = "Bien que le modèle suivant est disponible, pourquoi ne pas vous envoyer un message personnel à vos amis.";
$PPP_LETTER = "Salut , 
Il s'agit d'une expérience intéressante en cours à l'Université de Bologne. La bonne chose est qu'il ya un tirage au sort (2 prix) si vous participez et le transmettre à vos amis. Voici le lien pour participer au projet. S'il vous plaît participons et nous gagnons les prix :)
http://m.web.cs.unibo.it/?t=$targetid
Mon ID est:";
$PPP_LAST = "Nous allons de suite le message à votre e-mail en cas d'oubli. ";




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