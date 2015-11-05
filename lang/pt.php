<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "Mostafa Salehi recebeu o doutoramento em engenharia informática na Sharif University of Technology (Iran) em novembro de 2012. Em fevereiro de 2013 tornou-se pesquisador na Universidade de Teheran. Desde fevereiro de 2014 até setembro de 2014 ficou na Universidade de Bologna como pesquisador pós-doutoramento.";
}else if ($targetid == '311') {
	$targ_description = "Payam Siyari conseguiu a licenciatura em informática em 2011 na Universidade Shahid Beheshti de Teheran no Iran, e o mestrado em engenharia informática em 2013 na mesma universidade. Atualmente está a concorrer para o doutoramento em informática no Georgia Institute of Technology de Atlanta.";
	$targ_title = "Payam Siyari";
}else if ($targetid == '322') {
	$targ_description = "Alessandro Rioli começou o doutoramento em informática quântica em janeiro de 2012 e está à espera de defender a sua tese de doutoramento. Sendo físico, atualmente ensina Matematica e Física no liceu e vive em Bologna, Italia.";
}else if ($targetid == '333') {
	$targ_description = "Antony Karatzas viveu em Norwich, Reino Unido, durante 8 anos, inicialmente por causa do estudo e depois, nos últimos 2 anos, para trabalhar como pesquisador no Center of Competition Policy da University of East Anglia. Desde outubro de 2014 mora em Leamington Spa com un pós-doutoramento no Warwick Manifacturing Group, da Warwick University. Tem quase 32 anos e é de origem grega. Ele gosta muito do esporte, sobretudo do futebol e é adepto do Liverpool FC. No Reino Unido a maioria das pessoas o conhecem como “Tony”.";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '344') {
	$targ_description = "Amrith vive em Singapore desde agosto de 2008, inicialmente como estudante de doutoramento no NTU e logo como empresário, tendo criado um portal online para ajudar as empresas na admissão de informáticos. É un rapaz indiano de 30 anos e provém do Kerala, Índia.";
	$targ_title = "Amrith";
}else if ($targetid == '355') {
	$targ_description = "Deepack Subramanian é um estudante de doutoramento no Centrale Supélec de Rennes, na Francia. Viveu em Singapore e é natural do Chennai, Índia.";
	$targ_title = "Deepak Subramanian";
}
else if ($targetid == '366') {
	$targ_description = "Prithee ensina na Escola de Informática Avançada da University Technology Malaysia na Malásia. Conseguiu o seu doutoramento na RMIT University of Melbourne na Austrália. Ela é malaia e provém do Skudai, Johor. Gosta do excursionismo, dos viagens e do campismo. Seus lazeres são o badminton e a bicicleta.";
	$targ_title = "Prithee";
}
else if ($targetid == '377') {
	$targ_description = "Sandeep Ranjan vem de Jalandhar, na Índia. É um estudante de doutoramento na Punjab Technical University e conseguiu a licenciatura no DAV – Insitituto de Engenharia e Tecnologia. Trabalhou na Lovely Professional University durante 7 anos. Atualmente são dois anos que trabalha como pesquisador no Departamento de CSE do Lyallpur Khalsa College of Engineering, Jalandhar.";
	$targ_title = "Sandeep Ranjan";
}
else if ($targetid == '388') {
	$targ_description = "Jiang Shan é atualmente estudante do último ano na Chengdu University of Technology, na China, onde estuda Internet of Things. Em 2014 foi presidente da associação estudantil de informática e o responsável do laboratório de informática. Provém de Qinhuangdao, Hebel, China. Jiang é um rapaz alto, sociável e de mente aberta.";
	$targ_title = "Jiang Shan";
}
else if ($targetid == '399') {
	$targ_description = "Jessica Liebig é uma doutoranda na RMIT University of Melbourne, na Austrália. Nasceu em Brema, Alemanha, mas mudou para Austrália em 2007. Antes de começar a sua licenciatura em 2009 viajou pela Austrália. Normalmente a gente chama-a Jessi ou Jess. No seu tempo livre gosta de ler, desenhar e fazer jogging.";
	$targ_title = "Jessica Liebig";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "Bem-vindo";
$HEAD_TITLE_RIGHT_REPLY = "Preenche o formulário";
$HEAD_TITLE_RIGHT_END = "Envia o link";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "Bem-vindo";
$P_BUTTON_ACCEPT = "Next";


$P_BODYPARAONE="Precisamos da sua ajuda para contatar a pessoa &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;. Caso você conheça esse individuo pessoalmente, por favor encaminhe essa mensagem diretamente para ele/ela. De outro modo, solicitamos que você envie essa mensagem a alguém que conheça essa pessoa (direta ou indiretamente).";

/*$P_BODYPARAONE="Com a tua ajuda vamos tentar chegar à pessoa objetivo . No caso de que tu a/o conheça pessoalmente encaminhe a mensagem a $targ_title,de outra maneira envia a mensagem a alguém que conheçes pessoalmente e que talvez conheça (diretamente ou não) $targ_title .";*/


$P_BODYPARATWO ="<label>vSua participação nessa pesquisa lhe dará direito à participação no sorteio de um iPad Air.</label>";

$P_BODY_LOW = "Tem a liberdade de nos contactar para qualquer dúvida:  <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "Sua participação nessa pesquisa é absolutamente voluntária, podendo você recusar-se a participar, ou mesmo desistir a qualquer momento sem fornecer qualquer razão e sem quaisquer consequências para sua pessoa. Caso decida participar, suas respostas às questões do formulário serão registadas nos servidores da Universidade de Bologna. Todas as informações são confidenciais, o que significa que as informações serão accessíveis exclusivamente pelos pesquisadores e protegidas por senha. Nenhuma informação sobre os participantes será publicada. O anonimato dos participantes é preservado em todas as etapas da coleta de dados, uma vez que seu nome não será associado aos dados recolhidos durante a pesquisa nem será identificado em qualquer momento dessa pesquisa.

<br/>
O preenchimento do formulário implica que você concorda com a utilização dos dados para finalidades de pesquisa.
<br/>
Por favor assinale a opção abaixo para indicar seu consentimento com a participação nessa pesquisa e compreensão sobre o que foi exposto acima.";

$P_CONSUS = " compreendi e aceito participar da pesquisa.";

/***************  PAGE TWO ******************/

$PP_QONE = "Faz Favor explicar como recebeste a mensagem.";
$PP_QTWO = "Faz favor introduzir aqui o teu email ou o teu número de telemóvel.";
$PP_QTHREE = "Vamos utilizar esta informação para transmitir os resultados do sorteio do prémio.";
$PP_QFOUR = "Escolhe os networks de onde recebeste a mensagem.";
$PP_QSIX = "Which networks are you going to use to move the message towards its destination?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "others(optional)";
$PP_BUTT1= "Atrás";
$PP_BUTT2= "Adiante";

$PP_WARNING2 = "Please select at least one network on which you received the message.";
$PP_WARNINGTOP = "One or more fields are empty. Please fill all the fields to go to next page";
$PP_WHICHYEAR = "Qual é o ano do teu nascimento? ";
$PP_WHICHNET = "Que network vais utilizar para encaminhar a mensagem para o seu destino?";
$PP_SEX1 = "Sexo";
$PP_SEX2 = "Masculino";
$PP_SEX3 = "Feminino";
$PP_SEX4 = "prefiro naõ dizer";

/***************  PAGE THREE ******************/

$PPP_FIRST = "Estás quase lá!";

$PPP_MAIN = "Copia e cola a mensagem seguinte com o link e envia-la aos teus contactos pelos networks que prefires. Podes modificar livremente a mensagem, mas não apague o link!";

$PPP_MAIN1 = "Podes traduzir a mensagem na lingua que os teus amigos compreendem.";


$PPP_LETTER = "Olá, 
vou participar numa experiência promovida pela Universidade de Bologna. Vamos tentar alcançar $targ_title, queres ajudar-nos?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "Obrigado/a pela colaboração. Se estarás numa cadeia que conseguiu chegar ao objetivo, poderás concorrer à extração do prémio. Então tente fazer o máximo em encaminhar o link em cima a mais pessoas possiveis.";



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
$PPP_CLICKEICON = "Clique na ícone para compartilhar o link nos vários networks.";
$PALL_EXPINFO = "Informações sobre a experiência";
$PALL_STATEMENT = "Disposições acerca da proteção dos dados";

?>