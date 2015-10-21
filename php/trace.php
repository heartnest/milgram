<?php

/**
 *  MENU
 * Developer: Liu Tong
 * Email: granwit@gmail.com
 * all rights reserved
*/

include_once 'com.config.php';
include_once 'com.utils.php';


$uidoriginal = $_POST['yourid'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$arrivalNetworks = $_POST['arrivalNetworks'];
$outwardNetworks = $_POST['outwardNetworks'];
$sid = $_SESSION['sender_id'];


//safe code generation mode
$uid = substr(md5($uidoriginal."$cnt"), 4, 7);
$cnt = 1;
$taskdone = false;
while (!$taskdone) {

	$testq = "SELECT * FROM trace WHERE senderid = '$uid' ";
	$resq = mysql_query($testq);
	$res = mysql_fetch_row($resq);
	if ($res != NULL) {
		$uid = $uid."$cnt";
		// echo "gonna repeate ... ";
	}else{
		$taskdone = true;
		// echo "ok";
	}
	$cnt++;

	if ($cnt >= 100) {
		$taskdone = true;
		break;
	}
}

$_SESSION['uidoriginal']=$uidoriginal;
$_SESSION['useridcoded']= $uid;


//echo "uidoriginal:$uidoriginal, age:$age, gender:$gender, arrivalNetworks:$arrivalNetworks, outwardNetworks:$outwardNetworks, sid:$sid";

$time = time();
$ip = getRealIpAddr();
$ref = $_SESSION['referer']; 

$operation = "INSERT INTO trace (senderid,receiverid,receiverip,ref_network,time,socials,receiveridoriginal) VALUES('$sid','$uid','$ip','$ref','$time','$arrivalNetworks','$uidoriginal')";
$res = mysql_query($operation);


$operation2 = "INSERT INTO trace2 (realid,gender,ethnic,born,socials) VALUES('$uidoriginal','$gender','','$age','$outwardNetworks')";
$res2 = mysql_query($operation2);


if (!$res) {
  echo "error $operation ";
}else if(!$res2){
  echo "error $operation2 ";
}else{
	echo 1;
}


?>