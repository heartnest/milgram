<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "Mostafa Salehi ha ricevuto il dottorato in ingegneria informatica presso la Sharif University of Technology in Iran, nel novembre del 2012. Nel febbraio 2013, è entrato all'Università di Teheran come ricercatore. Dal febbraio 2014 al settembre 2014, è stato un ricercatore postdottorato presso l'Università di Bologna in Italia. ";
	$targ_title = "Mostafa Salehi";
}else if ($targetid == '311') {
	$targ_description = "Payam Siyari ha conseguito la laurea triennale in informatica nel 2011 presso l'Università Shahid Beheshti di Teheran in Iran, e la laurea magistrale in ingegneria informatica nel 2013 presso la Sharif University of Technology di Teheran in Iran. Attualmente è candidato per il dottorato di ricerca in informatica presso il Georgia Institute of Technology di Atlanta ";
	$targ_title = "Payam Siyari";
}else if ($targetid == '322') {
	$targ_description = "Alessandro Rioli ha iniziato il dottorato in informatica quantistica nel gennaio 2012 ed è in attesa di difendere la sua tesi di dottorato. Lui è un fisico e attualmente insegna Matematica e Fisica al liceo e viene a Bologna, Italia.";
	$targ_title = "Alessandro Rioli";
}else if ($targetid == '333') {
	$targ_description = "Antony Karatzas ha vissuto Norwich, Regno Unito per 8 anni. Prima per studio e poi, gli ultimi 2 anni, per lavoro come ricercatore associato presso il Centro di Politica di Concorrenza, Università di East Anglia. Da ottobre 2014 vive a Leamington Spa con un posto da post-dottorato presso il gruppo manifatturiero Warwick, Università di Warwick. Lui è un ragazzo di quasi 32 anni originario della Grecia. È un grande fan dello sport, soprattutto di calcio. È un appassionato sostenitore del Liverpool FC. La maggior parte delle persone nel Regno Unito lo conosce come 'Tony'.";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '344') {
	$targ_description = " Amrith vive a Singapore dall'agosto del 2008, inizialmente come studente di dottorato presso il NTU e poi come imprenditore dopo aver creato un portale on-line per aiutare le aziende a assumere informatici. È un ragazzo indiano di 30 anni e proviene dal Kerala, in India.";
	$targ_title = "Amrith";
}else if ($targetid == '355') {
	$targ_description = "Deepak Subramanian è uno studente di dottorato al CentraleSupelec di Rennes in Francia. Ha vissuto in Singapore ed è originario del Chennai in India.";
	$targ_title = "Deepak Subramanian";
}
else if ($targetid == '366') {
	$targ_description = "a Prithee Maga è una docente alla Scuola di Informatica Avanzata della University Technology Malaysia in Malesia. Ha conseguito il suo dottorato di ricerca alla RMIT University di Melbourne in Australia. Lei è malese e viene dal Skudai, Johor. Ama l'escursionismo, il turismo e ilcampeggio. I suoi hobby sono il gioco del badminton e la bicicletta";
	$targ_title = "Prithee Maga";
}
else if ($targetid == '377') {
	$targ_description = "Sandeep Ranjan viene da Jalandhar in India. È uno studente di dottorato al Punjab Technical University e ha ottenuto la laurea al DAV Istituto di Ingegneria e la Tecnologia. Ha lavorato presso Lovely Professional University per 7 anni. Attualmente, sta lavorando come ricercatore nel Dipartimento di CSE a Lyallpur Khalsa College of Engineering, Jalandhar da due anni.";
	$targ_title = "Sandeep Ranjan";
}
else if ($targetid == '388') {
	$targ_description = "Jiang Shan è attualmente studente dell'ultimo anno al Chengdu University of Technology, in Cina, dove studia Internet of Things. È stato presidente dell'associazione studentesca in informatica e il responsabile del laboratorio di informatica nel 2014. Proviene da Qinhuangdao, Hebei in Cina. Jiang è un ragazzo alto, socievole e di mentalità aperta.";
	$targ_title = "Jiang Shan";
}
else if ($targetid == '399') {
	$targ_description = "Jessica Liebig è una dottoranda presso il RMIT University di Melbourne, in Australia. È nata a Brema, in Germania, ma si è spostata in Australia nel 2007. Prima di iniziare la sua laurea nel 2009 lei ha viaggiato per l'Australia. La gente di solito la chiama Jessi o Jess. Nel tempo libero le piace leggere, disegnare e fare jogging.";
	$targ_title = "Jessica Liebig";
}

/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Benvenuto";
$HEAD_TITLE_RIGHT_REPLY = "compila il questionario";
$HEAD_TITLE_RIGHT_END = "invia il link";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Benvenuto";
$P_BUTTON_ACCEPT = "Avanti";


$P_BODYPARAONE="Con il tuo aiuto stiamo cercando di raggiungere la persona obiettivo &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;.  Nel caso tu lo conosca personalmente inoltra il messaggio a $targ_title, “nome”, altrimenti invia il messaggio a qualcuno che conosci personalmente che potrebbe conoscere (direttamente o indirettamente) $targ_title (directly or indirectly).";
$P_BODYPARATWO ="<label>Partecipando avrai la possibilità di vincere un iPad Air.</label>";
$P_BODY_LOW = "Sentiti libero di contattarci per qualsiasi domanda: <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "La partecipazione a questo studio è assolutamente volontaria. Hai pieno diritto di rifiutarti di partecipare a questo studio. Qualora tu decida di partecipare, potrai scegliere di ritirarti senza dover fornire ragioni e senza alcuna conseguenza. Qualora tu decida di partecipare, le tue risposte alle domande del questionario verranno registrate nei servers dell’Università di Bologna. Ogni informazione verrà trattata con la massima riservatezza. Ciò significa che le informazioni saranno accessibili esclusivamente ai ricercatori (ovverosia protette da password) e non verranno pubblicare. L’anonimità sarà garantita in quanto il tuo nome non verrà associato con i dati raccolti durante lo studio. 

Inoltre i partecipanti non saranno identificabili in alcun report o pubblicazione..
<br/>
Completando il questionario fornisci il tuo consenso all’utilizzo dei dati agli scopi della ricerca. 
<br/>
Per dichiarare il consenso a partecipare a questo studio, indica che hai compreso quanto sopra spiegato.";

$P_CONSUS = "I understand and consent to participate in this study.";

/***************  PAGE TWO ******************/

$PP_QONE = "Si prega di dirci come si è ricevuto il messaggio.";
$PP_QTWO = "inserisci qui la tua mail o il tuo numero di cellulare";
$PP_QTHREE = "useremo questa informazione per comunicarti i risultati dell’estrazione del premio.";
$PP_QFOUR = "scegli i network(s) da cui hai ricevuto il messaggio";
$PP_QSIX = "quale network stai per usare per inoltrare il messaggio verso la sua destinazione?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "others(optional)";
$PP_BUTT1= "Indietro";
$PP_BUTT2= "avanti";

$PP_WARNING2 = "scegli i network(s) da cui hai ricevuto il messaggio";
$PP_WARNINGTOP = "uno o più spazi sono vuoti. Per passare alla prossima pagina, riempi tutti gli spazi.";
$PP_WHICHYEAR = "in che anno sei nato?";
$PP_WHICHNET = "quale network stai per usare per inoltrare il messaggio verso la sua destinazione?";
$PP_SEX1 = "Genere:";
$PP_SEX2 = "maschio";
$PP_SEX3 = "femmina";
$PP_SEX4 = "preferisco non rivelarlo";

/***************  PAGE THREE ******************/

$PPP_FIRST = "ci sei quasi !";
$PPP_MAIN = "Copia e incolla il seguente messaggio con il link e invialo ai tuoi contatti attraverso i network(s) che preferisci. Puoi modificare liberamente il messaggio, ma non rimuovere il link!).
";
$PPP_LETTER = "Ciao, 
sto partecipando a un esperimento promosso dall’Università di Bologna. Stiamo cercando di raggiungere $targ_title, puoi aiutarci per favore?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "Grazie per la collaborazione. Se fai parte di una catena che è riuscita a raggiungere l’obiettivo, sarai in lizza per l’estrazione del premio. Quindi cerca di fare il massimo nell’inoltrare il link fornito sopra a quante più persone possibili.";



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
$PPP_CLICKEICON = "Clicca sull’icona per condividere il link sui vari networks.";
$PALL_EXPINFO = "Informazioni esperimento";
$PALL_STATEMENT = "Informativa sulla privacy";

?>