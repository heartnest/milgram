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
$uid = substr(md5($uidoriginal), 4, 7);

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