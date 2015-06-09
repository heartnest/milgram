<?php

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];


if ($targetid == '1') {
	$targ_description = "Target T is fashion designer XYZ.";
	$targ_title = "About the target";
}else if ($targetid == '311') {
	$targ_description = "我原先在Norwich住，开始学习，然后在East Anglia大学的competition policy中心搞了2年科研。之后在Warwick大学Leamington做博士后。我祖籍是希腊人，32岁，我是足球迷，热爱利物浦队。我热爱社交，我现实生活中有很多朋友，facebook上面也是，我linked上面的是一部分朋友，英国的朋友都叫我Tony。";
	$targ_title = "Antony Karatzas";
}else if ($targetid == '322') {
	$targ_description = "Deepak Subramanian是法国的研究员，现在在Rennes住，他原先住在新加坡，但是在印度出生，他不用facebook，也不用whatsap，但是用skype，email，还有推特twitter";
	$targ_title = "Deepak Subramanian";
}else if ($targetid == '333') {
	$targ_description = "我在成都理工学物联网, 当过是电子学生协会的主席，管理计算机室，一般来讲，我用微信，微博还有qq";
	$targ_title = "姜山";
}else if ($targetid == '344') {
	$targ_description = "xxx";
	$targ_title = "Mr abc";
}else if ($targetid == '355') {
	$targ_description = "xxx";
	$targ_title = "Mr abc";
}



/***************  COMMON ******************/

$lan = 'cn';
$HEAD_TITLE_LEFT = "网联测试";
$HEAD_TITLE_RIGHT_INTRO = "介绍";
$HEAD_TITLE_RIGHT_REPLY = "答复";
$HEAD_TITLE_RIGHT_END = "最终";
$FOOT_COPYRIGHT = "2014－2015©博洛尼亚大学计算机工程系版权所有";


/***************  PAGE ONE ******************/

$P_TITLE= "欢迎参加我们的网联测验";
$P_BUTTON_ACCEPT = "下一步";

$P_BODYPARAONE="我们希望通过您的帮助，逐渐得联系上 &quot;<span id='targ'  class='btn btn-default' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;.  如果您认识ta，并且告诉ta我们的实验，否则的话，请把这个消息转发给您身边的可能认识ta的朋友 (直接或间接).";
$P_BODYPARATWO ="<label>参与我们的活动，您会自动参加一个抽奖，并且有机会赢取 iPad Air 2.</label>";
$P_BODY_LOW = "如果有问题就请联系我们 : <strong>connect@cs.unibo.it</strong>";

$P_BODYPARATHREE = "活动的参与完全是自愿的. 您可以拒绝参加. 如果您同意参加这个活动，您的信息将会以匿名的方式被博洛尼亚大学保留，只有法律授权的人才能阅读，并且您的信息不会被发表。
<br/>
同意参加我们的活动，就意味着同意我们将您的信息匿名，并且同意我们将您的数据用在科研上. 
<br/>
请打勾，来表示同意参加我们的活动";

$P_CONSUS = "我了解了，并且同意参加活动";

/***************  PAGE TWO ******************/


$PP_QONE = "请描述下您怎么得到的这个消息";
$PP_QTWO = "请填写您的邮箱或者手机号码";
$PP_QTHREE = "请用您的真实信息，我们会在抽奖环节联系您的";
$PP_QFOUR = "您从哪个网络得到这个消息的呢？";
$PP_QFIVE = "谁联系的您呢？ (请你填写ta的邮箱或手机)";
$PP_QSIX = "转告这个消息，您将采用哪个渠道呢？";
$PP_OP1 = "邮件";
$PP_OP2 = "当面告诉";
$PP_OP3 = "其他(选填)";
$PP_BUTT1= "返回";
$PP_BUTT2= "下一页";

$PP_WARNING2 = "请至少选择一个您转发信息的途径";
$PP_WHICHYEAR = "您出生的年份是？";
$PP_WHICHNET = "您会用哪些途径转发这个信息呢?";
$PP_SEX1 = "性别";
$PP_SEX2 = "男";
$PP_SEX3 = "女";
$PP_SEX4 = "保密";


/***************  PAGE THREE ******************/

$PPP_FIRST = "马上结束来：";
$PPP_MAIN = "请复制下面的信息，转发给您的朋友，您可以任意修改短信，但是请不要删除链接。";

$PPP_LETTER = "朋友 , 
我正在参与博洛尼亚大学的一项实验. 我们正在尝试和 $targ_title 取得联系，你能帮助一下我吗？ 
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";
$PPP_LAST = "感谢您的帮助！（祝您顺利赢得抽奖）";


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