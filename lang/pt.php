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
$HEAD_TITLE_RIGHT_INTRO = "introdução";
$HEAD_TITLE_RIGHT_REPLY = "responder";
$HEAD_TITLE_RIGHT_END = "fim";
$FOOT_COPYRIGHT = "Copyright © 2014 Milgram Teste CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Bem-vindo ao projeto Milgram";
$P_BUTTON_REFUSE = "recusar";
$P_BUTTON_ACCEPT = "aceitar";
$P_BODYPARAONE="The aim of this experiment is to understand the impact of technology on our communication channels. 
With your help we are trying to reach the target &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. In case you know him, please forward the message to T,
otherwise,  <strong>please</strong> forward the message to your knowns who might know T <strong>directly or indirectly</strong>.
			";
$P_BODYPARATWO ="By participating you get a chance to win the <strong><a target='_blank' href='luckydraw.php?lan=pt'>LUCKY DRAW</a></strong>. You can contribute in this experiment by answering 
few questions, which takes 2 minutes (trust us). Your data will be stored anonymously and no data will be 
made public in future.";
$P_BODY_LOW = "Please feel free to contact us for any queries : <strong>connect@cs.unibo.it</strong> <br />We will more than happy to answer, even if it is just a hi comes from you.";

/***************  PAGE TWO ******************/

$PP_QONE = "Por favor, diga-nos como você recebeu a mensagem";
$PP_QTWO = "Quem é você? (Utilize e-mail ou número de celular como seu ID)";
$PP_QTHREE = "Por favor, use a sua informação real, você será contactado para o resultado do nosso sorteio.";
$PP_QFOUR = "Selecione um fora das redes de onde você recebeu a mensagem.";
$PP_QFIVE = "Quem você contactado? (Insira o ID do remetente ou seja, e-mail ou celular, por favor)";
$PP_QSIX = "Que redes que você vai tentar transmitir a presente informaHon para selecHng seus amigos";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "<input type='text' class='form-control' placeholder='outros (opcional)' />";
$PP_BUTT1= "de volta";
$PP_BUTT2= "próximo";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Obrigado! One Last favor";
$PPP_MAIN = "Para se certificar de que você se torna começar listado para o sorteio, copie cole o seguinte modelo de mensagem 
         a seus amigos que possam ser úteis para atingir a meta T. Nós saberemos isso com certeza se você tem 
         encaminhado esta mensagem ou não;) Tudo de bom para o sorteio :)!!";
$PPP_NOTE = "Embora o modelo a seguir está disponível, por que você não enviar uma mensagem pessoal a seus amigos.";
$PPP_LETTER = "oi , 
Há uma experiência interessante acontecendo na Universidade de Bolonha. A coisa boa é que há um sorteio (2 prêmios) se você participar e transmiti-la aos seus amigos. A seguir está o link para participar do projeto. Por favor, participe e deixe-nos ganhar os prêmios :)
http://m.web.cs.unibo.it/?t=$targetid
My ID is :";
$PPP_LAST = "Estamos encaminhando a mensagem para o seu e-mail no caso de você esquecer. ";





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

?>