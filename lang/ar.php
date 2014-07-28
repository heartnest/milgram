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
$HEAD_TITLE_LEFT = "ميلغرام معاد تحميل !";
$HEAD_TITLE_RIGHT_INTRO = "مقدمة";
$HEAD_TITLE_RIGHT_REPLY = "رد";
$HEAD_TITLE_RIGHT_END = "نهاية";
$FOOT_COPYRIGHT = "حقوق التأليف والنشر © 2014 ميلغرام اختبار CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "مرحبا بكم في المشروع ميلغرام";
$P_BUTTON_REFUSE = "رفض";
$P_BUTTON_ACCEPT = "تقبل";
$P_BODYPARAONE="The aim of this experiment is to understand the impact of technology on our communication channels. 
With your help we are trying to reach the target &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. In case you know him, please forward the message to T,
otherwise,  <strong>please</strong> forward the message to your knowns who might know T <strong>directly or indirectly</strong>.
			";
$P_BODYPARATWO ="By participating you get a chance to win the <strong><a target='_blank' href='luckydraw.php?lan=ar'>LUCKY DRAW</a></strong>. You can contribute in this experiment by answering 
few questions, which takes 2 minutes (trust us). Your data will be stored anonymously and no data will be 
made public in future.";
$P_BODY_LOW = "Please feel free to contact us for any queries : <strong>connect@cs.unibo.it</strong> <br />We will more than happy to answer, even if it is just a hi comes from you.";

/***************  PAGE TWO ******************/

$PP_QONE = "من فضلك قل لنا كيف وصلت الرسالة";
$PP_QTWO = "من أنت؟ (استخدام البريد الإلكتروني أو رقم الهاتف المحمول كما ID الخاص بك)";
$PP_QTHREE = "الرجاء استخدام المعلومات الخاصة بك الحقيقي، وسيتم الاتصال بك لنتيجة السحب لدينا.";
$PP_QFOUR = "اختر واحدا من شبكات من اين حصلت على الرسالة.";
$PP_QFIVE = "الذين اتصلت لك؟ (أدخل أي البريد الإلكتروني هوية المرسل أو الهاتف المحمول من فضلك)";
$PP_QSIX = "الشبكات التي سوف محاولة إعادة توجيه هذه المعلومات لاختيار أصدقائك";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "<input type='text' class='form-control' placeholder='الآخرين (اختياري)' />";
$PP_BUTT1= "ظهر";
$PP_BUTT2= "التالي";

/***************  PAGE THREE ******************/

$PPP_FIRST = "شكرا لك! واحد صالح الأخيرة";
$PPP_MAIN = "للتأكد من أن تصبح حصول على قائمة للالسحب، يرجى نسخ لصق قالب الرسالة التالية 
  لأصدقائك الذين قد تكون مفيدة في التوصل لاستهداف T. سنعرف هذا بالتأكيد إذا كان لديك 
  إعادة توجيه هذه الرسالة أم لا؛) كل التوفيق للالسحب :)
 !!";
$PPP_NOTE = "على الرغم من أن القالب التالي هو متاح، لماذا لا تقوم بإرسال رسالة شخصية إلى أصدقائك.";
$PPP_LETTER = "مرحبا , 
هناك تجربة مثيرة للاهتمام يحدث في جامعة بولونيا. الشيء الجيد هو ان هناك السحب (2 الجوائز) إذا كنت تشارك
وإرسالها إلى أصدقائك. التالي هو الرابط للمشاركة في المشروع. يرجى المشاركة ودعونا الفوز بجوائز :)
http://m.web.cs.unibo.it/?t=$targetid
هويتي هي:";
$PPP_LAST = "إعادة توجيه الرسالة إلى البريد الإلكتروني الخاص بك في حال كنت قد نسيت. ";





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