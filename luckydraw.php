<?php
session_start(); 
include_once 'php/com.config.php';
include_once 'php/com.utils.php';


$html = "";
$operation = "select senderid,receiverid,network,receiverip, time,ref_network from trace";
$result = mysql_query($operation);
$i = 0;
while ($row = mysql_fetch_row($result)) {
  $i ++;
                    $ids = $row[0];
                    $idr = $row[1];
                    $ntk = $row[2];
                    $ipr = $row[3];
                    $tm = $row[4];
                    $date = date('H:i d/m/Y',$tm);
                    $rnt = $row[5];

                    $html .= "<tr><td>$i</td><td>$ids</td><td>$idr</td><td>$ntk</td><td>$ipr</td><td>$date</td><td>$rnt</td></tr>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Results | Milgram Experiment Project | Disi Unibo</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='Description' content='a web app for the test of milgram experiment' />
  <meta name="author" content="liu tong">
  <link rel="shortcut icon" href="favicon.ico">
  
  <script type='text/javascript' src='js/lib/jquery-1.7.2.min.js'></script>
  <link type='text/css' href='css/bootstrap.css' rel='stylesheet' />
  <script type='text/javascript' src='js/lib/bootstrap.min.js'></script>

  <link href="css/style.css" rel="stylesheet">
</head>

<body >
	<div class='container'>
    <div class="content ">
    <div class="luckydraw">
      <h2>Lucky Draw</h2>
      <p class="lead"> <label>We will draw 2 prizes:</label>
        <br />

Scheme 1:
After the time period T, we will draw randomly user u, from all the users who have participated in the experiment. Then second draw will be the user from set of users such that these set of users who have either forwarded the message to the user u or received from user u. 
</p>
<p class="lead">
Scheme 2:
We divide the prizes in 2 sets. That is in total 4 prizes.
After the time period T (say 2 months), we draw one 2 prizes in same fashion as above. Then at the end of 4 months (starting of the experiment), we again draw another 2 prizes (excluding the winners of the first draw)
</p>

<p>
<label>Lucky Draw Rules:</label>
<br />
<br />1) Estimated time period of the draw is 2 months*.
<br />2) We will update the users at their contact information (email id or phone no) in advance about the exact date of the lucky draw.
<br />3) We will also update all the users if they have won the draw or not.
<br />4) The name of the winner will be posted on the site to make it fair.
<br />5) No immediate knowns of the people associated with this experiment can be considered for lucky draw.
<br />6) The decision of the experiment organizers will be final. No claims or counter claims can be made either at public courts. 
<br />7) By participating you agree to the above rules of the lucky draw.
<br />
*: This time period can be extended depending on the response of the experiment.
We will keep you posted
</p>
</div>
  </div>
</body>
</html>