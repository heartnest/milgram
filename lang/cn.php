<?php

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];

if ($targetid == '123') {
	$targ_description = "Target T is fashion designer XYZ.";
	$targ_title = "About the target";
}else if ($targetid == '321') {
	$targ_description = "Target T is studente";
	$targ_title = "About the target";
}



/***************  COMMON ******************/

$lan = 'cn';
$HEAD_TITLE_LEFT = "网联测试";
$HEAD_TITLE_RIGHT_INTRO = "介绍";
$HEAD_TITLE_RIGHT_REPLY = "答复";
$HEAD_TITLE_RIGHT_END = "最终";
$FOOT_COPYRIGHT = "2014©博洛尼亚大学计算机工程系版权所有";


/***************  PAGE ONE ******************/

$P_TITLE= "欢迎参加我们的测验";
$P_BUTTON_REFUSE = "拒绝";
$P_BUTTON_ACCEPT = "接受";
$P_BODYPARAONE="我们实验的目的是测量科技对我们沟通渠道的影响。 
我们想请您帮助我们寻找一个人 &quot;<span id='targ' class='btn btn-default' data-placement='top' data-content='$targ_description' data-original-title='$targ_title'>T</span>&quot;. 如果你认识他，那就请把这个消息发给他,
否则,  <strong>请</strong> 请把消息发给身边您觉得可能认识他的朋友.
			";
$P_BODYPARATWO ="参加我们的测试您就可以获得一个<strong><a target='_blank' href='luckydraw.php?lan=cn'>抽奖</a></strong>的机会. 在测验中您只需回答几个小问题 (非常简单). 您的个人信息会被安全保护，绝不外露。";
$P_BODY_LOW = "如果有问题就请联系我们 : <strong>connect@cs.unibo.it</strong> <br />我们会非常乐意的回答";


/***************  PAGE TWO ******************/


$PP_QONE = "请描述下您怎么得到的这个消息";
$PP_QTWO = "您是谁? (您的邮箱或者手机将作为账号)";
$PP_QTHREE = "请用您的真实信息，我们会在抽奖环节联系您的";
$PP_QFOUR = "您从哪个网络得到这个消息的呢？";
$PP_QFIVE = "谁联系的您呢？ (请你填写ta的邮箱或手机)";
$PP_QSIX = "转告这个消息，您将采用哪个渠道呢？";
$PP_OP1 = "邮件";
$PP_OP2 = "当面告诉";
$PP_OP3 = "<input type='text' class='form-control' placeholder='others(optional)' />";
$PP_BUTT1= "返回";
$PP_BUTT2= "下一页";



/***************  PAGE THREE ******************/

$PPP_FIRST = "谢谢！最后一件事儿：";
$PPP_MAIN = "为了提高您的中奖概率，请您转发类似信息给朋友，帮助我们一起寻找目标.";
$PPP_NOTE = "希望您修改下面的样本";
$PPP_LETTER = "姓名 , 
博洛尼亚大学正在做一项有趣的实验. 他们设置了2个抽奖，只要你帮助我们寻找目标就可以参加. 下面就是实验的连接. 快来看看吧，祝我们好运哦！ 
http://m.web.cs.unibo.it/?t=$targetid
我的账户ID是 :";
$PPP_LAST = "我们同时也会给您发一封备忘邮件";


// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "填表其实非常简单，如果您能帮助我们的话，我们会非常感谢的。";



/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "网联项目简介 | Disi Unibo";
$PAGE2TITLE = "接收问答 | Disi Unibo";
$PAGE3TITLE = "最后一步 | Disi Unibo";
$PAGESTITLE = "好遗憾 | Disi Unibo";
$PAGEDRAWTITLE = "抽奖说明 | Disi Unibo";

/**************** LUCKY DRAW  *******************/

$LUCKDRAWINSTRUCTIONS = " to do ...";

/***************  JS ******************/

$ERR_SENDER = "请仔细查询，并且输入正确的联系您的人的邮箱或手机号码";
$ERR_FORMAT = "请正确输入邮箱或手机号码";

?>