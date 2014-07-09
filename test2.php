
<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
$rlt = mail('abc@a.com', 'My Subject', $message);
if ($rlt) {
	echo "sent";
}else
echo "faild in sending";
?>