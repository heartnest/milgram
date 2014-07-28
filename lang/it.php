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
$HEAD_TITLE_RIGHT_INTRO = "introduzione";
$HEAD_TITLE_RIGHT_REPLY = "rispondere";
$HEAD_TITLE_RIGHT_END = "fine";
$FOOT_COPYRIGHT = "Copyright © 2014 Milgram prova CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Benvenuti al progetto Milgram";
$P_BUTTON_REFUSE = "rifiutare";
$P_BUTTON_ACCEPT = "accettare";
$P_BODYPARAONE="The aim of this experiment is to understand the impact of technology on our communication channels. 
With your help we are trying to reach the target &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. In case you know him, please forward the message to T,
otherwise,  <strong>please</strong> forward the message to your knowns who might know T <strong>directly or indirectly</strong>.
			";
$P_BODYPARATWO ="By participating you get a chance to win the <strong><a target='_blank' href='luckydraw.php?lan=it'>LUCKY DRAW</a></strong>. You can contribute in this experiment by answering 
few questions, which takes 2 minutes (trust us). Your data will be stored anonymously and no data will be 
made public in future.";
$P_BODY_LOW = "Please feel free to contact us for any queries : <strong>connect@cs.unibo.it</strong> <br />We will more than happy to answer, even if it is just a hi comes from you.";

/***************  PAGE TWO ******************/

$PP_QONE = "Si prega di dirci come hai ottenuto il messaggio";
$PP_QTWO = "Tu chi sei? (Utilizzare la posta elettronica o il numero di cellulare come ID)";
$PP_QTHREE = "Si prega di utilizzare il tuo vero informazioni, sarete contattati per il risultato del nostro sorteggio.";
$PP_QFOUR = "Selezionare uno fuori delle reti da dove hai preso il messaggio.";
$PP_QFIVE = "Chi ti ha contattato? (Inserire il ossia email ID mittente o il cellulare per favore)";
$PP_QSIX = "Che le reti si cercherà di trasmettere queste informazioni per selezionare i tuoi amici";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "<input type='text' class='form-control' placeholder='altri (opzionale)' />";
$PP_BUTT1= "di ritorno";
$PP_BUTT2= "prossimo";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Grazie! One Last favore";
$PPP_MAIN = "Per assicurarsi che si diventa ottenere elencati per il sorteggio fortunato, ti preghiamo di copiare incollare il seguente modello di messaggio 
         ai tuoi amici che potrebbero essere utili a raggiungere a T. indirizzare lo sapremo per certo se avete 
         trasmesso questo messaggio o no;) Tutto il meglio per il sorteggio fortunato :) !!";
$PPP_NOTE = "Anche se il modello è disponibile il seguente, Perché non si invia un messaggio personale ai tuoi amici.";
$PPP_LETTER = "Ciao , 
C'è un interessante esperimento in corso presso l'Università di Bologna. La cosa buona è che c'è un sorteggio fortunato (2 premi) se si partecipa e inoltrare ai tuoi amici. Di seguito è riportato il link per partecipare al progetto. Si prega di partecipare e di farci vincere i premi :)
http://m.web.cs.unibo.it/?t=$targetid
Il mio ID è:";
$PPP_LAST = "Stiamo inoltrare il messaggio al tuo indirizzo email nel caso si dimentichi. ";




// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "Apprezziamo tantissmo se potessi contribuirci. Grazie e arrivederci";



/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "to do .. ";
$PAGE2TITLE = "to do .. ";
$PAGE3TITLE = "to do .. ";
$PAGESTITLE = "to do ..  ";
$PAGEDRAWTITLE = "to do .. ";

/**************** LUCKY DRAW  *******************/

$LUCKDRAWINSTRUCTIONS = "to do .. ";

/***************  JS ******************/

$ERR_SENDER = "ID mittente inserito non è corretto, le preghiamo di controllare con attenzione";
$ERR_FORMAT = "formato dell&apos;input non è corretto.";



?>