<?php

require 'cgi-bin/com.utils.php';


$userid = @"abc@a.com";
$pos = strpos($userid,"@");
if($pos === false){

}else{
	$content = "Keep in mind your id is $userid, please also forward milgram2014.web.cs.unibo.it /n many thanks \n Disi ";
	$subj =" Milgram test remind you";
	//so this's a mail
  mail_text($userid , $subj, $content);
}

?>