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
$HEAD_TITLE_LEFT = "میلگرام عزیز!";
$HEAD_TITLE_RIGHT_INTRO = "معرفی";
$HEAD_TITLE_RIGHT_REPLY = "پاسخ";
$HEAD_TITLE_RIGHT_END = "پایان";
$FOOT_COPYRIGHT = "کپی رایت © 2014 میلگرام تست CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "به پروژه میلگرام خوش آمدید";
$P_BUTTON_REFUSE = "رد کردن";
$P_BUTTON_ACCEPT = "پذیرفتن";
$P_BODYPARAONE="The aim of this experiment is to understand the impact of technology on our communication channels. 
With your help we are trying to reach the target &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. In case you know him, please forward the message to T,
otherwise,  <strong>please</strong> forward the message to your knowns who might know T <strong>directly or indirectly</strong>.
			";
$P_BODYPARATWO ="By participating you get a chance to win the <strong><a target='_blank' href='luckydraw.php?lan=pr'>LUCKY DRAW</a></strong>. You can contribute in this experiment by answering 
few questions, which takes 2 minutes (trust us). Your data will be stored anonymously and no data will be 
made public in future.";
$P_BODY_LOW = "Please feel free to contact us for any queries : <strong>connect@cs.unibo.it</strong> <br />We will more than happy to answer, even if it is just a hi comes from you.";

/***************  PAGE TWO ******************/

$PP_QONE = "لطفا به ما بگویید که چگونه این پیام را به شما کردم";
$PP_QTWO = "شما که هستید؟ (استفاده از پست الکترونیک و یا شماره تلفن همراه به عنوان ID خود را)";
$PP_QTHREE = "لطفا اطلاعات واقعی خود استفاده نکنید، شما برای نتیجه قرعه کشی ما تماس گرفت.";
$PP_QFOUR = "یکی از شبکه های از این پیام که شما رو انتخاب کنید.";
$PP_QFIVE = "چه کسی با شما تماس؟ (قرار دادن فرستنده ID یعنی ایمیل و یا تلفن همراه لطفا)";
$PP_QSIX = "کدام شبکه شما سعی خواهد کرد به جلو این اطلاعات برای انتخاب دوستان خود";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "<input type='text' class='form-control' placeholder='دیگران (اختیاری)' />";
$PP_BUTT1= "به عقب";
$PP_BUTT2= "بعد";

/***************  PAGE THREE ******************/

$PPP_FIRST = "تشکر از شما! یکی از آخرین نفع";
$PPP_MAIN = "مطمئن شوید که شما را تبدیل کنید برای قرعه کشی ذکر شده استفاده نمایید میتوانید از قالب پیام زیر را کپی کنید 
         به دوستان خود که ممکن است مفید باشد را در رسیدن به هدف قرار دادن T. ما این برای اطمینان حاصل کنید اگر شما می دانید 
         فرستاده این ارسال یا نه؛) همه بهترین برای قرعه کشی خوش شانس :)!!
";
$PPP_NOTE = "اگر چه این الگو در دسترس است، به همین دلیل اصلا شما یک پیام شخصی برای دوستانتان ارسال کنید.";
$PPP_LETTER = "Hi , 
یک آزمایش جالب که در دانشگاه بولونیا وجود دارد. نکته خوب این است که یک قرعه کشی (2 جایزه) وجود دارد اگر شما شرکت می کنند و آن را به دوستان خود. پس از لینک به مشارکت در این پروژه است. لطفا شرکت کنید و به ما اجازه دهید برنده جایزه :)
http://m.web.cs.unibo.it/?t=$targetid
ID من:";
$PPP_LAST = "ما در حال حمل و نقل این پیام به پست الکترونیکی شما را در مورد شما را فراموش کرده ام. ";




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