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

$lan = 'es';
$HEAD_TITLE_LEFT = "Milgram Reloaded !";
$HEAD_TITLE_RIGHT_INTRO = "Introducción";
$HEAD_TITLE_RIGHT_REPLY = "responder";
$HEAD_TITLE_RIGHT_END = "fin";
$FOOT_COPYRIGHT = "Copyright © 2014 Milgram Prueba CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Bienvenido al proyecto Milgram";
$P_BUTTON_REFUSE = "rechazar";
$P_BUTTON_ACCEPT = "aceptar";
$P_BODYPARAONE="The aim of this experiment is to understand the impact of technology on our communication channels. 
With your help we are trying to reach the target &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. In case you know him, please forward the message to T,
otherwise,  <strong>please</strong> forward the message to your knowns who might know T <strong>directly or indirectly</strong>.
			";
$P_BODYPARATWO ="By participating you get a chance to win the <strong><a target='_blank' href='luckydraw.php?lan=es'>LUCKY DRAW</a></strong>. You can contribute in this experiment by answering 
few questions, which takes 2 minutes (trust us). Your data will be stored anonymously and no data will be 
made public in future.";
$P_BODY_LOW = "Please feel free to contact us for any queries : <strong>connect@cs.unibo.it</strong> <br />We will more than happy to answer, even if it is just a hi comes from you.";

/***************  PAGE TWO ******************/

$PP_QONE = "Por favor díganos cómo llegó el mensaje";
$PP_QTWO = "Quién es usted? (Utilice el correo electrónico o número de teléfono móvil como su ID)";
$PP_QTHREE = "Por favor, utilice su información real, usted será contactado por el resultado de nuestro sorteo.";
$PP_QFOUR = "Seleccione una de las redes desde donde se recibió el mensaje.";
$PP_QFIVE = "¿Quién lo contactó? (Inserte el ID del remitente es decir, correo electrónico o teléfono móvil, por favor)";
$PP_QSIX = "¿Qué redes que tratará de enviar este informaHon para selecHng tus amigos";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "<input type='text' class='form-control' placeholder='others(optional)' />";
$PP_BUTT1= "espalda";
$PP_BUTT2= "próximo";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Gracias! Un último favor";
$PPP_MAIN = "Para asegurarse de que usted se convierte en estar en la lista para el sorteo, por favor Copiar Colocar la plantilla siguiente mensaje a sus amigos que podrían ser útiles para llegar al objetivo T. sabremos a ciencia cierta si se ha enviado el mensaje o no;) Todos lo mejor para el sorteo :)!!";
$PPP_NOTE = "Aunque la siguiente plantilla está disponible, ¿por qué no lo hace usted envía un mensaje personal a tus amigos.";
$PPP_LETTER = "Hola , 
No es un experimento interesante en marcha en la Universidad de Bolonia. Lo bueno es que hay un sorteo (2 premios) si participas y enviarlo a tus amigos. A continuación se presenta el enlace para participar en el proyecto. Por favor, participamos y vamos a ganar los premios :)
http://m.web.cs.unibo.it/?t=$targetid
My ID is :";
$PPP_LAST = "Estamos de reenviar el mensaje a tu correo electrónico por si la olvida. ";


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