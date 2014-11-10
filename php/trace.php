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
  $sid = $_SESSION['sender_id'];
  $outNetwork = $_POST['socials'];

  $uid = substr(md5($uidoriginal), 4, 7);

  $_SESSION['uidoriginal']=$uidoriginal;
  $_SESSION['useridcoded']= $uid;

  //echo "string bbbb".$substr(md5($uid), 4, 12);

  $time = time();
  $ip = getRealIpAddr();
  $ref = $_SESSION['referer']; 

  $operation = "INSERT INTO trace (senderid,receiverid,receiverip,ref_network,time,socials,receiveridoriginal) VALUES('$sid','$uid','$ip','$ref','$time','$outNetwork','$uidoriginal')";
    
  $res = mysql_query($operation);
  if (!$res) {
      echo "error $operation ";
  }else{
  	echo 1;
  }


?>