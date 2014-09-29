<?php

/**
 *  MENU
 * Developer: Liu Tong
 * Email: granwit@gmail.com
 * all rights reserved
*/

include_once 'com.config.php';
include_once 'com.utils.php';


  
  $uid = $_SESSION['uidoriginal'];
  $gender = $_POST['gender'];
  $yearborn = $_POST['yearborn'];
  $ethnic = $_POST['ethnic'];
  $socials = $_POST['socials'];


  $operation = "INSERT INTO trace2 (realid,gender,ethnic,born,socials) VALUES('$uid','$gender','$ethnic','$yearborn','$socials')";
    
  $res = mysql_query($operation);
  if (!$res) {
      echo "error $operation ";
  }else{
  	echo 1;
  }


?>