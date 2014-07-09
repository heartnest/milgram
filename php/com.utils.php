<?php
function getRealIpAddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function mail_text($to, $subj, $content) {
    $message = wordwrap($content, 50);

     //suject
    $subject = "=?UTF-8?B?".base64_encode($subj)."?=";

    $headers = "From: Milgram Resaerch <milgram@cs.unibo.it>\r\n";
    $headers .=   "Content-type: text/plain; charset=UTF-8 \r\n";
     // Send
    $rlt = mail($to, $subject, $message, $headers, '-fmilgram@cs.unibo.it');

    // if (!$rlt)
    //     echo "mail NOT sent to $to, conttata tong.liu2@studio.unibo.it";
    // else {
    //     echo "Mail mandata a $to con successo <br />";
    // }
}

?>
