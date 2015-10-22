<?php

/**
 *  MENU
 * Developer: Liu Tong
 * Email: granwit@gmail.com
 * all rights reserved
*/

include_once 'com.config.php';
include_once 'com.utils.php';


$code = $_GET['code'];


//safe code generation
$uid = $code;
$cnt = 1;
$taskdone = false;
while (!$taskdone) {
	
	// $uid = substr(md5($uidoriginal."$cnt"), 4, 7);
	$testq = "SELECT senderid FROM trace WHERE senderid = '$uid' ";
	$resq = mysql_query($testq);
	$res = mysql_fetch_row($resq);
	if ($res != NULL) {
		$uid = $uid."$cnt";
		echo "gonna repeate ... ";
	}else{
		$taskdone = true;
		echo "ok";
	}
	$cnt++;

	if ($cnt >= 100) {
		$taskdone = true;
		break;
	}else{
		echo "x";
	}
}

echo "' $uid ' $res <br/>";


?>