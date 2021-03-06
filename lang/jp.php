<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "モスタファ・サレヒは2012年11月にイランのシャリフ工科大学でコンピュータ工学の分野において大学院博士課程を修了しました。2013年の2月にはテヘラン大学に助教授（assistant professor）として在籍し、2014年の2月から同年9月までは博士研究員としてイタリアのボローニャ大学に在籍していた。";
	$targ_title = "モスタファ・サレヒ";
}else if ($targetid == '311') {
	$targ_description = "パヤム・シアリは2011年にイランのテヘランにある Shahid Beheshti 大学でコンピュータ科学の理学士号を取得し、2013年に同じくイランのテヘランにあるシャリフ工科大学でコンピュータ工学の修士号を取得しました。現在はコンピュータ科学の博士号取得に向けアトランタのジョージア工科大学で働いています。";
	$targ_title = "パヤム・シアリ";
}else if ($targetid == '322') {
	$targ_description = "アレッサンドロ・リオーリは量子コンピュータの分野で2012年1月に博士号の勉強を始め、現在は学位論文の試問を待っているところです。彼は物理学者で現在は高校で数学と物理を教えています。彼はイタリアのボローニャ出身です。";
	$targ_title = "アレッサンドロ・リオーリ";
}else if ($targetid == '333') {
	$targ_description = "アントニ・カラットジャスは8年間イギリスのNorwichに住んでいました。そのうち最初の6年は勉強し、最後の2年間はイースト・アングリア大学の競争政策センターで助手として働きました。2014年の10月からはウォーリック大学のウォーリック製造業グループで博士号の研究をしながらLeamington Spaに住んでいます。彼はギリシャ出身の男性で既に32歳を迎えています。スポーツが大好きで、特にフットボールが好きです。リバプールFCの熱心なサポーターでもあります。イギリスにいる多くの人は彼をTonyとして認識しています。";
	$targ_title = "アントニ・カラットジャス";
}else if ($targetid == '344') {
	$targ_description = "アムリットは2008年8月からシンガポールに住んでいて、初めは南洋理工大学の博士号課程に在籍し、それからは企業家として企業がデータサイエンティストを雇う手助けをするためのオンラインポータルサイトを設立しました。彼は30歳のインド人でインドのケーララ州出身です。.";
	$targ_title = "アムリット";
}else if ($targetid == '355') {
	$targ_description = "ディーパック・スブラマニアンはフランス・レンヌのCentraleSupelecの博士号課程の学生です。彼はシンガポールに住んでいたことがあり、もともとはインドのチェンナイ出身です。";
	$targ_title = "ディーパック・スブラマニアン";
}
else if ($targetid == '366') {
	$targ_description = "プリーティ・マーガはマレーシアにあるマレーシア工科大学の発展情報科学学部の古参の講師です。彼女はオーストラリア・メルボルンのロイヤルメルボルン工科大学で博士号を取得しました。マレーシア人でジョホール州のスクダイ出身です。ハイキングや旅行、キャンプが大好きで趣味はバドミントンとサイクリングです。";
	$targ_title = "プリーティ・マーガ";
}
else if ($targetid == '377') {
	$targ_description = "サンディープ・ランジャンはインドのジャランダル出身です。彼はパンジャーブ工科大学で博士課程の学生をしていて、DAV Institute of Engineering and Technologyで学位を取得しました。7年間ラブリー大学（LPU）で働き、現在は二年前からジャランダルにあるカルーサ工科大学のコンピュータ科学学部の助教授（assistance professor）として働いています。";
	$targ_title = "サンディープ・ランジャン";
}
else if ($targetid == '388') {
	$targ_description = "ジアン・シャンは現在中国の成都技術大学の最高学年の生徒で、「モノのインターネット」について勉強しています。彼はかつてコンピュータ科学研究の学生団体のリーダーで、2014年にはコンピュータ研究室の責任者でした。もともとは中国河北省のチンホワンタオ出身です。背が高く、とても社交的で心の広い人間です。  ";
	$targ_title = "ジアン・シャン";
}
else if ($targetid == '399') {
	$targ_description = "ジェシカ・リービックはオーストラリア・メルボルンのロイヤルメルボルン工科大学での博士号取得を希望しています。彼女はドイツのブレーメンで生まれ、2007年にオーストラリアに来ました。2009年に学士研究を始める前にはオーストラリア中を旅行しました。人々は普通彼女をJessiまたはJessと呼びます。時間があるときには読書をしたりや絵を描いたりジョギングをしたりします。 ";
	$targ_title = "ジェシカ・リービック";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "ようこそ";
$HEAD_TITLE_RIGHT_REPLY = "項目を埋めてください";
$HEAD_TITLE_RIGHT_END = "リンク先へ進んでください";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "ようこそ";
$P_BUTTON_ACCEPT = "次へ";


$P_BODYPARAONE="私たちの研究にはあなたの協力が必要です。 &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;.もしも対象者を個人的にご存知の場合は、$targ_titleのメッセージをお読みください。そうでなければ$targ_titleを知っているかもしれないあなたの知り合いに（直接または間接的に）メッセージを転送してください。";
$P_BODYPARATWO ="<label>この調査に参加することによってiPad Airを手に入れるチャンスがあります。</label>";
$P_BODY_LOW = "何か質問があればお気軽にご連絡ください： <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = "この調査に協力するかどうかはあなた次第です。あなたには協力を断る権利があります。もし協力してくださるなら、理由を説明したり被害を被ることなく、いつでも協力をやめることができます。もし調査に協力すれば、あなたの回答がボローニャ大学のサーバーに保存されることをご了承ください。全ての情報は内密に保管されるので、調査者のみがアクセスすることができ（パスワードで守られているため）公表されることはありません。研究中、データがあなたのお名前と一緒に管理されることはないので、匿名性が守られます。調査の協力者が論文や公表物で特定されることはありません。
<br/>
調査を完成させることであなたは調査目的のデータ使用に同意したとみなされます。
<br/>
上記の情報を理解したことを示し、この研究に参加することに承諾してください。";

$P_CONSUS = "私はこの調査の内容を理解し協力します。";

/***************  PAGE TWO ******************/

$PP_QONE = "どうやってこのメッセージを受け取ったか教えてください。";
$PP_QTWO = "Eメールアドレスか携帯電話の電話番号をご記入ください。";
$PP_QTHREE = "私たちはこの情報を調査の際の連絡または抽選のために使用します。";
$PP_QFOUR = "このメッセージを受け取ったネットワークをお選びください。";
$PP_QSIX = "このメッセージを送るにあたってどのネットワークを使用予定ですか？";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "others(optional)";
$PP_BUTT1= "戻る";
$PP_BUTT2= "次へ";

$PP_WARNING2 = "このメッセージを受け取ったネットワークを一つ以上お選びください。";
$PP_WARNINGTOP = "一つ以上の項目の記入が未完了です。次のページに行くために全ての項目を埋めてください。";
$PP_WHICHYEAR = "何年生まれですか？";
$PP_WHICHNET = "このメッセージを送る際に使用予定のネットワークはどれですか？?";
$PP_SEX1 = "性別";
$PP_SEX2 = "男性";
$PP_SEX3 = "女性";
$PP_SEX4 = "明らかにしたくない";

/***************  PAGE THREE ******************/

$PPP_FIRST = "この調査はまもなく終了します！";

$PPP_MAIN = "以下のメッセージをコピー&ペーストして、あなたのお好きなネットワークを通じて、あなたの連絡先にお送りください。お好きなように変えていただいて構いません（ただしリンクを消さないでください！）";

$PPP_MAIN1 = "以下のメッセージをあなたのご友人が理解できる言語に変えてください。";


$PPP_LETTER = "こんにちは。今ボローニャ大学からの実験に参加しているのですが、私のお手伝いをしてくださいませんか？
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "ご協力ありがとうございます！もしもあなたが対象者のラッキーな繋がりの一部だったら、賞に当選するかもしれません。なので出来るだけ多くの人に上記のリンクを転送してくださるようお願い申し上げます。";



// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "あなたのご協力に感謝いたします。どんな形であれ、ありがとうございます！";



/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "Welcome | Milgram Experiment Project | Disi Unibo";
$PAGE2TITLE = "Message | Milgram Experiment Project | Disi Unibo";
$PAGE3TITLE = "Thank you | Milgram Experiment Project | Disi Unibo";
$PAGESTITLE = "We hope ... | Milgram Experiment Project | Disi Unibo";
$PAGEDRAWTITLE = "Lucky Draw | Milgram Experiment Project | Disi Unibo";


/***************  JS ******************/

$ERR_SENDER = "IDが正しくありません。もう一度あなたの受け取ったメッセージをご確認ください。";
$ERR_FORMAT = "正しいEメールアドレスか携帯電話の電話番号をご記入ください。";


/******** new added, 10 - 09 - 2015 ***************/
$PPP_CLICKEICON = "多くのネットワークで共有するため、アイコンをクリックしてください。";
$PALL_EXPINFO = "実験の情報";
$PALL_STATEMENT = "プライバシーポリシー";

?>