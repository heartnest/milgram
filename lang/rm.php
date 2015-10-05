<?php
session_start();

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "Mostafa Salehi  a obtinut doctoratul in automatizari si calculatoare la Universitatea Tehnica Sharif, Iran, in Noiembrie 2012. Din Februarie 2013 este lector la Universitatea din Teheran. Din Februarie pana in Septembrie 2014 a ocupat pozitia de cercetator la Universitatea din Bologna, Italia.";
	$targ_title = "Mostafa Salehi";
}else if ($targetid == '311') {
	$targ_description = "Payam Siyari a obtinut licenta in informatica la Universitatea Shahid Beheshti, Tehran, Iran, in 2011, si masterul in automatizari si calculatoare la  Universitatea Tehnica Sharif, in Tehran, Iran, in 2013. Actualmente este doctorand in informatica la Institutul Tehnic din Giorgia, Atlanta. ";
	$targ_title = "Payam Siyari";
}else if ($targetid == '322') {
	$targ_description = "Alessandro Rioli a inceput activitatea de doctorand in calcul cuantic in Ianuarie 2012. Este un fizician di Bologna, Italia, si actualmente preda matematica si fizica la nivel liceal. ";
	$targ_title = "Alessandro Rioli";
}else if ($targetid == '333') {
	$targ_description = "Antony Karatzas a locuti in  Norwich, Regtaul Unit, timp de 8 ani, intai pentru studii si mai tarziu pentru activitatea de cercetator in cadrul Center for Competition Policy, Universitatea East Anglia. Incepand cu Octombrie 2014 este cercetator in Leamington Spa, in cadrul grupului 'Warwick manufacturing' din Universitatea din Warwick. Este originar di Grecia, are aproape 32 ani si este un mare fan sportiv, in mod special fotbal (fan Liverpool FC). Este cunoscut sub numele de  'Tony'.";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '344') {
	$targ_description = "Amrith locuieste in Singapore din August 2008, initial ca doctorand la NTU si mai tarziu ca entrepreneur, construind un portal online dedicat companiilor care doresc sa angajeze pe pozitii de data scientist. Are 30 de ani si e din Kerala, India.";
	$targ_title = "Amrith";
}else if ($targetid == '355') {
	$targ_description = "Deepak Subramanian  este doctorand  la CentraleSupelec, Rennes, France. A locuit in Singapore si e originar din Chennai, India.";
	$targ_title = "Deepak Subramanian";
}
else if ($targetid == '366') {
	$targ_description = "Prithee Maga este conferentiar la Facultatea de Informatica Avansata a Universitatii Tehnologice din Malaezia. A obtinut  doctoratul la Universitatea RMIT din Melbourne, Australia.  Este malaeziana din Skudai, Johor. Ii plac activitatile de  hiking, touring si camping. E pasionata de badminton si ciclism.";
	$targ_title = "Prithee";
}
else if ($targetid == '377') {
	$targ_description = "Sandeep Ranjan  este din Jalandhar, India. Este doctorand la Universitatea Tehnica Punjab cu diploma de licenta obtinuta la Institutul de Inginerie si Tehnica DAV. A lucrat timp de 7 ani la Lovely Professional University. Actualmente este lector in Departamentul de Informatica in Lyallpur Khalsa College of Engineering, Jalandhar.";
	$targ_title = "Sandeep Ranjan";
}
else if ($targetid == '388') {
	$targ_description = "Jiang Shan e student in ultimul an la Universitatea Tehnica din Chengdu, China, unde studiaza 'internet of things'. A fost liderul asociatiei studentilor de Informatica, si responsabil pentru laboratorul de informatica in 2014. Este originar din Qinhuangdao, Hebei, China, o persoana foarte sociabila si deschisa. ";
	$targ_title = "Jiang Shan";
}
else if ($targetid == '399') {
	$targ_description = "Jessica Liebig e doctorand la Universitatea RMIT in Melbourne, Australia. S-a nascut in Bremen, Germania, dar locuieste in Australia din 2007. Inainte de a incepe studiile de licenta in 2009, a calatorit explorand Australia. Este cunoscuta sub numele de Jessi sau Jess. In timpul liber ii place sa citeasca, sa deseneze si sa faca jogging. ";
	$targ_title = "Jessica Liebig";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Bine ai venit";
$HEAD_TITLE_RIGHT_REPLY = "Completeaza formularul";
$HEAD_TITLE_RIGHT_END = "Trimite link-ul prietenilor";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Bine ai venit";
$P_BUTTON_ACCEPT = "Pasul urmator";


$P_BODYPARAONE="Cu ajutorul tau incercam sa contactam pe &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;.  In cazul in care cunosti personal aceasta persoana, te rugam sa trimiti acest mesaj catre $targ_title.  In caz contrar, te rugam trimite acest mesaj unei peroane cunoscute de tine care ar putea cunoaste pe $targ_title (direct sau indirect).";
$P_BODYPARATWO ="<label>Participarea iti ofera sansa sa castigi un iPad Air.</label>";
$P_BODY_LOW = "Pentru orice nelamurire te rugam sa ne contactezi la:  <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "Participarea la acest studiu este alegerea ta. Ai dreptul sa refuzi sa participi. In cazul in care accepti sa participi, ai dreptul sa te retragi in orice moment fara a oferi o motivatie si fara impact negativ. Daca alegi sa participi inseamna ca accepti ca raspunsurile tale la intrebarile din chestionar sa fie salvate pe serverele Univarsitatii din Bologna. Toate informatiile oferite de tine vor fi confidentiale, insemnand ca vor fi accesibile doar cercetarorile care efectueaza studiul (protejate de parola) si nu vor fi publicate. Anonimatul va fi protejat prin lipsa de asociere a numelui tau cu datele colectate pe parcursul studiului. Nici un participant nu va fi identificat in rapoarte sau publicatii.
<br/>
Completand chestionarul iti exprimi acordul ca datele sa fie utilizate in scopul cercetarii.
<br/>
Te rugam sa confirmi ca ai luat cunostinta de informatiile prezentate anterior si ca accepti sa participi la acest studiu.";

$P_CONSUS = "Am luat cunostinta si accept sa particip la acest studiu.";

/***************  PAGE TWO ******************/

$PP_QONE = "Te rugam sa ne informezi de mijloacele prin care ai primit acest mesaj.";
$PP_QTWO = "Te rugam introdu o adresa de email sau un numar de telefon mobil.";
$PP_QTHREE = "Vom folosi aceste informatii sa iti comunicam rezultatul tragerii la sorti. ";
$PP_QFOUR = "Selecteaza reteaua (retelele) de pe care ai primit acest mesaj.";
$PP_QSIX = "Ce retea vei folosi pentru a facilita atingerea destinatiei de catre mesajul nostru?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "altele(optional)";
$PP_BUTT1= "Inapoi";
$PP_BUTT2= "Pasul urmator";

$PP_WARNING2 = "Te rugam sa selectezi cel putin o retea in care ai primit mesajul.";
$PP_WARNINGTOP = "Unul sau mai multe campuri nu sunt completate. Te rugam completeaza toate campurile pentru a accesa pagina urmatoare.";
$PP_WHICHYEAR = "Care este anul nasterii tale?";
$PP_WHICHNET = "Ce retele vei folosi pentru a facilita atingerea destinatiei de catre mesajul nostru?";
$PP_SEX1 = "Sex";
$PP_SEX2 = "Masculin";
$PP_SEX3 = "Feminin";
$PP_SEX4 = "Prefer sa nu mentionez";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Te apropii de sfarsitul chestionarului!";

$PPP_MAIN = " Te rugam copiaza mesajul urmator si trimite-l cunostintelor/prietenilor tai utilizand retelele preferate. Textul mesajului poate fi schimbat daca este necesar (dar link-ul nu trebuie sters!).";

$PPP_MAIN1 = "Te rugam tradu mesajul urmator in limba pe care prietenii tai o inteleg.";


$PPP_LETTER = "Salut ,
Particip la un experiment al Universitatii di Bologna. Incercam sa contactam $targ_title, m-ai putea ajuta ?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "Multumim pentru ajutorul acordat! Daca vei fi parte dintr-un lant de persoane care va duce la gasirea persoanei cautate, vei intra in tragerea la sorti. Deci incearca sa trimiti mesajul la cat mai multe persoane!";



// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "Apreciem foarte mult orice ajutor acordat. Multumim oricum, chiar daca ai decis sa nu participi!";



/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "Welcome | Milgram Experiment Project | Disi Unibo";
$PAGE2TITLE = "Message | Milgram Experiment Project | Disi Unibo";
$PAGE3TITLE = "Thank you | Milgram Experiment Project | Disi Unibo";
$PAGESTITLE = "We hope ... | Milgram Experiment Project | Disi Unibo";
$PAGEDRAWTITLE = "Lucky Draw | Milgram Experiment Project | Disi Unibo";


/***************  JS ******************/

$ERR_SENDER = "ID-ul expeditorului NU E CORECT. Te rugam verifica ID-ul inclus in mesajul primit initial.";
$ERR_FORMAT = "te rugam sa introduci o adresa de email sau un numar de telefon corect. ";


/******** new added, 10 - 09 - 2015 ***************/
$PPP_CLICKEICON = "Click pentru a distribui in diverse retele.";
$PALL_EXPINFO = "Informatii despre studiu";
$PALL_STATEMENT = "Privacy Statement";

?>