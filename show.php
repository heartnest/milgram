<?php
session_start(); 
include_once 'php/com.config.php';
include_once 'php/com.utils.php';


$html = "";
$operation = "select senderid,receiverid,t.socials,receiverip, time,ref_network,tt.socials from trace as t, trace2 as tt where t.receiveridoriginal = tt.realid";
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
                    $socials = $row[6];

                    $html .= "<tr><td>$i</td><td>$ids</td><td>$idr</td><td>$ntk</td><td>$ipr</td><td>$date</td><td>$socials</td></tr>";
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
  <div class="container">
    <div class="exp_result">
    <h1>Milgram Experiment Results</h1>
    <div class="table-responsive">
    <table class="table table-hover">
  <tr>
  <td>#</td>
  <td>Sender ID</td> 
  <td>Receiver ID</td>
  <td>Recv Network</td>
  <td>Recv IP</td>
  <td>Recv timestamp</td>
  <td>Out going socials</td>
</tr>
<tr><td>$i</td><td>$ids</td><td>$idr</td><td>$ntk</td><td>$ipr</td><td>$date</td><td>$socials</td></tr>
<?php echo $html; ?>
</table>
</div>
</div>
</div>
</body>
</html>