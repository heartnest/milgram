<?php

/**
 *  MENU
 * Developer: Liu Tong
 * Email: granwit@gmail.com
 * all rights reserved
*/

include_once 'com.config.php';


$sid = $_GET['senderid'];
$query = "SELECT id FROM trace WHERE receiverid = '$sid' ";
$result = mysql_query($query);
if (!$result) {
	die("errore SQL $query");
} else {
	$row = mysql_fetch_row($result);
	if ($row == null) {
		echo 0;
	}else
	echo 1;
}

?>

