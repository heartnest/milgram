<?php
session_start();

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "Mostafa Salehi consiguió un doctorado en ingeniería informática por la Sharif University of Technology, Irán, en noviembre de 2012. En febrero de 2013, entró en la Universidad de Tehran como profesor asociado. Desde febrero de 2014 hasta septiembre de 2014, fue investigador postdoctoral en la Universidad de Bolonia, Italia. ";
	$targ_title = "Mostafa Salehi";
}else if ($targetid == '311') {
	$targ_description = "Payam Siyari se licenció en informática por la Shahid Beheshti University, Tehran, Irán, en 2011, y consiguió un Máster en ingeniería informática por la Sharif University of Technology, Tehran, Irán, en 2013. En este momento está llevando a cabo un doctorado en informática en el Georgia Institute of Technology, Atlanta. ";
	$targ_title = "Payam Siyari";
}else if ($targetid == '322') {
	$targ_description = "Alessandro Rioli empezó su doctorado en informática cuántica en enero de 2012 y defenderá su tesis doctoral. Es un físico y en la actualidad enseña Matemática y Física en la escuela secundaria. Es de Bolonia, Italia.";
	$targ_title = "Alessandro Rioli";
}else if ($targetid == '333') {
	$targ_description = "Antony Karatzas vivió en Norwich, Reino Unido, durante ocho años, antes como estudiante y luego, en los últimos 2 años, trabajando como investigador asociado en el Center for Competition Policy, de la University of East Anglia. Desde el octubre de 2014 vive en Leamington Spa donde está  trabajando en su post-doc en el Warwick manufacturing group, University of Warwick. Es originario de Grecia y tiene casi 32 años. Le gusta mucho el deporte, especialmente el fútbol. Es un gran aficionado del Liverpool FC. En el Reino Unido la mayoría de la gente lo conoce como 'Tony'.";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '344') {
	$targ_description = "Amrith ha vivido en Singapore desde agosto de 2008, antes como estudiante de doctorado en NTU y luego como empresario que fundó un portal online para ayudar las empresas a emplear data scientists. Tiene 30 años y es originario de Kerala, India.";
	$targ_title = "Amrith";
}else if ($targetid == '355') {
	$targ_description = "Deepak Subramanian es un estudiante de doctorado en CentraleSupelec, Rennes, Francia. Vivió en Singapore. Es originario de Chennai, India.";
	$targ_title = "Deepak Subramanian";
}
else if ($targetid == '366') {
	$targ_description = "Prithee Maga es profesora de la escuela de informática avanzada de la University Technology Malaysia, Malesia. Consiguió su doctorado por la RMIT University, Melbourne, Australia. Es originaria de Malesia, de Skudai, Johor. Le gusta el escursionismo, viajar e ir de camping. Sus aficiones son el badmington y el ciclismo.";
	$targ_title = "Prithee";
}
else if ($targetid == '377') {
	$targ_description = "Sandeep Ranjan es de Jalandhar, India. Es un estudiante de doctorado en la Punjab Technical University y se ha licenciado por el DAV Institute of Engineering and Technology. Trabajó en la Lovely Professional University durante 7 años. En este momento, está trabajando como profesor asociado en el Computer Science Department en el Lyallpur Khalsa College of Engineering, Jalandhar, desde hace dos años.";
	$targ_title = "Sandeep Ranjan";
}
else if ($targetid == '388') {
	$targ_description = "Jiang Shan es estudiante en el ultimo año en la Chengdu University of Technology, China, donde estudia el internet de las cosas. Lideraba una asociación de estudiantes para el estudio de la informática. Fue responsable del laboratorio informático en 2014. Es originario de Qinhuangdao, Hebei China. Es alto, muy sociable y de mentalidad abierta. ";
	$targ_title = "Jiang Shan";
}
else if ($targetid == '399') {
	$targ_description = "Jessica Liebig es una estudiante de doctorado en la RMIT University en Melbourne, Australia. Nació en Bremen, Alemania, y llegó a Australia en 2007. Antes de empezar la carrera de licenciatura en 2009 viajó a lo largo de Australia. La gente suele llamarla Jessi o Jess. En su tiempo libre le gusta leer, dibujar y hacer jogging. ";
	$targ_title = "Jessica Liebig";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Bienvenido";
$HEAD_TITLE_RIGHT_REPLY = "Rellena el formulario";
$HEAD_TITLE_RIGHT_END = "Reenvia el enlace";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Bienvenido";
$P_BUTTON_ACCEPT = "Siguiente";


$P_BODYPARAONE="Con tu ayuda intentamos alcanzar &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;.  Si lo conoces personalmente por favor reenvía el mensaje a $targ_title, si no, por favor reenvía el mensaje a alguien al que conoces personalmente que podría conocer $targ_title (directamente o indirectamente).";
$P_BODYPARATWO ="<label>Participando tienes una posibilidad de ganar un iPad Air.</label>";
$P_BODY_LOW = "Por favor contáctanos para cualquier pregunta : <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "Participar en el estudio depende totalmente de ti. Tienes el derecho de negarte a participar en este estudio. Si decides participar, puedes elegir retirarte en cualquier momento sin ofrecer ninguna explicación y sin ninguna consecuencia negativa. Si eliges participar en el estudio, aceptas que tus respuestas a las preguntas de la encuesta se guardarán en los servidores de la Universidad de Bolonia. Toda la información se guardará de manera confidencial. Esto significa que será accessible sólo a los investigadores (es decir, protegida con clave) y no será publicada. Se garantizará tu anonimato porque tu nombre no será asociado con los datos recogidos durante el estudio. Los participantes no serán identificados en ningún informe o publicación.
<br/>
Al contestar la encuenta estás aceptando que los datos sean utilizados para los fines de la investigación.
<br/>
Por favor indica que entiendes la información presentada arriba, y aceptas participar en este estudio.";

$P_CONSUS = "Entiendo y acepto participar en este estudio.";

/***************  PAGE TWO ******************/

$PP_QONE = "Por favor dinos cómo has recibido el mensaje.";
$PP_QTWO = "Por favor escribe tu correo electrónico o número de móvil.";
$PP_QTHREE = "Usaremos esta información para contactarte con respecto a los resultados del sorteo.";
$PP_QFOUR = "Selecciona la(s) red(es) de la(s) que has recibido el mensaje.";
$PP_QSIX = "¿Qué redes usarás para impulsar el mensaje hacia su destino?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "otras(opcional)";
$PP_BUTT1= "Atrás";
$PP_BUTT2= "Siguiente";

$PP_WARNING2 = "Por favor selecciona por lo menos una red en la que has recibido el mensaje.";
$PP_WARNINGTOP = "Uno o más campos son vacíos. Por favor rellena todos los campos para pasar a la página siguiente.";
$PP_WHICHYEAR = "¿En qué año naciste?";
$PP_WHICHNET = "¿Qué redes usarás para reenviar el mensaje hacia su destino?";
$PP_SEX1 = "Sexo";
$PP_SEX2 = "Masculino";
$PP_SEX3 = "Femenino";
$PP_SEX4 = "Prefiero no declararlo";

/***************  PAGE THREE ******************/

$PPP_FIRST = "¡Casi has terminado!";

$PPP_MAIN = "Por favor copia y pega el siguiente mensaje y envíalo a tus contactos a través de tu(s) red(es) favorita(s). Puedes modificar el mensaje (¡sin quitar el enlace!).";

$PPP_MAIN1 = "Por favor traduce el siguiente mensaje a la lengua que tus amigos puedan entender.";


$PPP_LETTER = "Hola ,
Estoy participando en un experimento de la Universidad de Bolonia. Estamo intentando llegar a $targ_title, ¿puedes ayudarme ?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "¡Gracias por tu ayuda! Si perteneces a una cadena que consigue llegar a la meta, participarás en el sorteo de los premios. Así que por favor haz todo lo que puedas para reenviar el enlace que aparece arriba a todas las personas posibles.";



// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "Te agradecemos si puedes intentar hacerlo. Si no, ¡gracias de todas maneras !";



/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "Welcome | Milgram Experiment Project | Disi Unibo";
$PAGE2TITLE = "Message | Milgram Experiment Project | Disi Unibo";
$PAGE3TITLE = "Thank you | Milgram Experiment Project | Disi Unibo";
$PAGESTITLE = "We hope ... | Milgram Experiment Project | Disi Unibo";
$PAGEDRAWTITLE = "Lucky Draw | Milgram Experiment Project | Disi Unibo";


/***************  JS ******************/

$ERR_SENDER = " El ID del remitente NO ES CORRECTO por favor vuelve a averiguar en el mensaje que has recibido.";
$ERR_FORMAT = "por favor escribe una dirección de correo electrónico o un número de móvil correcto";


/******** new added, 10 - 09 - 2015 ***************/
$PPP_CLICKEICON = "Haz clic sobre los iconos para compartir en las diferentes redes";
$PALL_EXPINFO = "Información del experimento";
$PALL_STATEMENT = "Declaración de privacidad";

?>
