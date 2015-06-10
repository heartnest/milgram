<?php

/**
 *  MENU
 * Developer: Liu Tong
 * Email: granwit@gmail.com
 * all rights reserved
*/

include_once 'com.config.php';
include_once 'com.utils.php';


$newsocial = $_POST['newsocial'];
$uidoriginal = $_SESSION['uidoriginal'];


//echo "1";

$operation = "UPDATE trace2 SET socials=concat(socials, ';$newsocial') WHERE realid ='$uidoriginal' ";
$res = mysql_query($operation);

if (!$res) {
  echo "error $operation ";
}else{
	echo "$newsocial";
}


?>