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
***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Bienvenu";
$HEAD_TITLE_RIGHT_REPLY = "Remplissez le formulaire";
$HEAD_TITLE_RIGHT_END = "Suivez le lien";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";


/***************  PAGE ONE ******************/


$P_TITLE= "Bienvenu";
$P_BUTTON_ACCEPT = "Suivant";


$P_BODYPARAONE="Avec votre aide nous essayons de rejoindre l'objectif &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;.  Si vous le connaissez personnellement envoyez le message à $targ_title, directement, s'il vous  plaît, autrement, envoyez le message à quelqu'un que vous connaissez personnellement et qui pourrait connaître $targ_title (directement ou pas).";
$P_BODYPARATWO ="<label>En participant vous avez la possibilité de gagner un iPad Air.</label>";
$P_BODY_LOW = " N'hésitez pas nous contacter pour tout renseignement: <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "C'est à vous de choisir si participer ou pas à cet étude. Vous avez le droit de ne pas le faire et si vous choisirez de participer vous pourrez abandonner à tout moment en fournissant une raison, sans aucun impact négatif. Si vous choisissez de participer au sondage, vos réponses aux questions du sondage seront stockées dans les serveurs de l'université de Bologne. Toute information reste confidentielle (protégée par un mot de passe),  pas publiée et seulement les investigateurs pourront y accéder.  L’anonymat est préservé car les données collectées ne seront pas associées à votre nom. Les participants ne seront pas identifiés dans aucune publication ni rapport.
<br/>
En participant au sondage vous acceptez que les données que vous fournirez seront utilisées pour un but de recherche.
<br/>
S'il vous plaît, cochez la case pour indiquer que vous avez compris cette information et que vous souhaitez participer à cet étude.";

$P_CONSUS = "Je comprends et j'accepte de participer à cet étude.";

/***************  PAGE TWO ******************/

$PP_QONE = " S'il vous plaît, dites nous comment vous avez reçu le message";
$PP_QTWO = "S'il vous plaît, rentrez votre émail ou votre mobile:";
$PP_QTHREE = "Nous utiliseront cette information pour vous contacter pour le résultat du tirage au sort";
$PP_QFOUR = "Sélectionnez le(s) réseau(x) social(aux) par lequel(s) vous avez reçu le message: ";
$PP_QSIX = "Quel(s) réseau(x) vous allez utiliser pour envoyer le message à destination?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "others(optional)";
$PP_BUTT1= "arrière";
$PP_BUTT2= "suivant";

$PP_WARNING2 = "S'il vous plaît sélectionner au moins un réseau sur lequel vous avez reçu le message.";
$PP_WARNINGTOP = "Un ou plusieurs champs sont vides. S'il vous plaît remplir tous les champs pour aller à la page suivante.";
$PP_WHICHYEAR = "En quelle année vous êtes né(e)?";
$PP_WHICHNET = "Quel(s) réseau(x) vous allez utiliser pour envoyer le message à destination?";
$PP_SEX1 = "Sexe:";
$PP_SEX2 = "Homme";
$PP_SEX3 = "Femme";
$PP_SEX4 = "Je préfère ne pas répondre";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Merci! Une dernière faveur";

$PPP_MAIN = "Pour vous assurer que vous devenez obtenir la liste pour le tirage au sort, s'il vous plaît copiez collez le modèle de message suivant à vos amis qui pourraient être utiles dans la réalisation de cibler T. Nous saurons ce pour vous si vous avez transmis ce message ou pas;) Tout le meilleur pour le tirage au sort :)!!";

$PPP_MAIN1 = "S'il vous plaît convertir le message suivant dans la langue que vos amis peuvent comprendre.";

$PPP_LETTER = "Salut, Je participe à une expérience de l'université de Bologne. Nous essayons d'atteindre $targ_title, pouvez-vous me aider?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";


$PPP_LAST = "Merci pour votre aide Si vous faites partie d'une chaîne de succès à la cible, vous serez considéré pour des prix de tirage au sort Donc, s'il vous plaît essayez de votre mieux dans la transmission le lien ci-dessus pour autant de personnes que possible!..";


// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "Nous apprécierions si vous pouvez essayer de le faire. Sinon aussi, grâce toute façon!";

/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "Welcome | Milgram Experiment Project | Disi Unibo";
$PAGE2TITLE = "Message | Milgram Experiment Project | Disi Unibo";
$PAGE3TITLE = "Thank you | Milgram Experiment Project | Disi Unibo";
$PAGESTITLE = "We hope ... | Milgram Experiment Project | Disi Unibo";
$PAGEDRAWTITLE = "Lucky Draw | Milgram Experiment Project | Disi Unibo";


/***************  JS ******************/

$ERR_SENDER = "ID expéditeur est pas correcte s'il vous plaît vérifier à nouveau à partir du message que vous avez reçu.";
$ERR_FORMAT = "s'il vous plaît insérer une adresse email correcte ou numéro de téléphone cellulaire.";


/******** new added, 10 - 09 - 2015 ***************/

$PPP_CLICKEICON = "Cliquez sur les icônes pour partager sur différents réseaux";
$PALL_EXPINFO = "Informations Experiment";
$PALL_STATEMENT = "Déclaration de confidentialité";


?>