<?php

if ($_GET['lan'] == 'cn') {
	include "lang/cn.php";
	//$cacheEx = "$.cookie('setting_lang','cn');";
	//$langt = "?lan=cn&&t=$targetid";
	$lango = "form.php?lan=cn";
	$langs = "sorry.php?lan=cn";
}
else if ($_GET['lan'] == 'it') {
	include "lang/it.php";
	//$cacheEx = "$.cookie('setting_lang','it');";
	//$langt = "?lan=it&&t=$targetid";
	$lango = "form.php?lan=it";
	$langs = "sorry.php?lan=it";
}
else if ($_GET['lan'] == 'fr') {
	include "lang/fr.php";
	//$cacheEx = "$.cookie('setting_lang','fr');";
	//$langt = "?lan=fr&&t=$targetid";
	$lango = "form.php?lan=fr";
	$langs = "sorry.php?lan=fr";
}
else if ($_GET['lan'] == 'pt') {
	include "lang/pt.php";
	//$cacheEx = "$.cookie('setting_lang','pt');";
	//$langt = "?lan=pt&&t=$targetid";
	$lango = "form.php?lan=pt";
	$langs = "sorry.php?lan=pt";
}
else if ($_GET['lan'] == 'es') {
	include "lang/es.php";
	//$cacheEx = "$.cookie('setting_lang','es');";
	//$langt = "?lan=es&&t=$targetid";
	$lango = "form.php?lan=es";
	$langs = "sorry.php?lan=es";
}
else if ($_GET['lan'] == 'de') {
	include "lang/de.php";
	//$cacheEx = "$.cookie('setting_lang','de');";
	//$langt = "?lan=de&&t=$targetid";
	$lango = "form.php?lan=de";
	$langs = "sorry.php?lan=de";
}
 else if ($_GET['lan'] == 'ru') {
	include "lang/ru.php";
	//$cacheEx = "$.cookie('setting_lang','ru');";
	//$langt = "?lan=ru&&t=$targetid";
	$lango = "form.php?lan=ru";
	$langs = "sorry.php?lan=ru";
}
else if ($_GET['lan'] == 'pr') {
	include "lang/pr.php";
	//$cacheEx = "$.cookie('setting_lang','pr');";
	//$langt = "?lan=pr&&t=$targetid";
	$lango = "form.php?lan=pr";
	$langs = "sorry.php?lan=pr";
}
else if ($_GET['lan'] == 'pt') {
	include "lang/pt.php";
	//$cacheEx = "$.cookie('setting_lang','pt');";
	//$langt = "?lan=pt&&t=$targetid";
	$lango = "form.php?lan=pt";
	$langs = "sorry.php?lan=pt";
}
else if ($_GET['lan'] == 'ar') {
	include "lang/ar.php";
	//$cacheEx = "$.cookie('setting_lang','ar');";
	//$langt = "?lan=ar&&t=$targetid";
	$lango = "form.php?lan=ar";
	$langs = "sorry.php?lan=ar";
}
else{
	include "lang/en.php";
	//$cacheEx = "$.cookie('setting_lang','en');";
	//$langt = "?lan=en&&t=$targetid";
	$lango = "form.php?lan=en";
	$langs = "sorry.php?lan=en";
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>General Information | Milgram Experiment Project | Disi Unibo</title>
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
  <style>
  li{
  	list-style-type: none;
  }
  .texth:hover,.texth{
  	color:black;
  	text-decoration: none;
  }
  </style>
</head>

<body >
 <div class="container">
 	<h1 class="text-center"><a href='index.php' class='texth'>Welcome to the Experiment</a></h1>

 		<p class="text-center lead">
Thank you for participating in the experiment.
	</p>
	<p>
<label>Project title</label>: Milgram Reloaded!
</p>

<p>
<label>Study team</label>:
<ul>
<li>Danilo Montessi, Professor, University of Bologna. Email: danilo.montesi@unibo.it</li>
<li>Matteo Magnani, Associate Professor, Uppsala University. Email:matteo.magnani@it.uu.se</li>
<li>Luca Rossi, Assistant Professor, IT University of Copenhagen. Email:lucr@itu.dk</li>
<li>Rajesh Sharma, Research Fellow, University of Bologna. Email: rajesh.sharma@unibo.it</li>
<li>Tong Liu, PhD student, University of Bologna. Email: tong.liu2@studio.unibo.it</li>
</ul>
</p>

<p>
<label>Funding provided by:</label>
IMPACT Project, FIRB 2010-Ref:RBFR107725-001
</p>

<p>
<h3>Introduction</h3>
A lot of efforts have been made in the past to understand the process of navigation in a small world. We briefly describe the two important and related works. First is the Travers and <a href='http://en.wikipedia.org/wiki/Small-world_experiment' target='_blank'>Milgram experiment</a> [1], which is a seminal work and secondly, a follow up work by Dodds et al. [3] before describing our approach in section 2.
The classic 1969 field experiment by Travers and Milgram [1], was a huge step in the direction of understanding the navigation problem in the small world community. Arbitrarily (and as well as varying) individuals (from Nebraska and Boston) were asked to generate acquaintance chains for a single target person in Massachusetts, employing the small world method [2]. Only single medium of communication among acquaintances, the postcards were used to reach the target person.
On similar lines to that of Travers and Milgram experiment, an experiment was conducted by Dodds et al. in 2003 [3]. Instead of postcards, an email tracking system was employed to understand the navigation process. This web-based experiment was different from the previous experiment [1] in two ways. Firstly, it was on a global scale (compared to just the experiment in [1], which was just conducted in America) with participants covering 13 countries. Secondly, multiple targets (18) were selected (compared to just the experiment in [1], which had just 1 target).
The advancement of technology in the last decade has introduced various communication channels at the disposal of users. The presence of an individual at more than one network, assist in the formation of multilayer networks [4] so as to say.
The main \textbf{goal} of this experiment is to understand the effect of various communication channels on the navigation process. One of the parameters to be observed is the average path length. In the classic Milgram experiment [1], it was observed that the average path length from the originator to the target is 6. It would be interesting to observe the effect of various communication channels on average path length in multilayer networks.
</p>

<p>

	<hr />
<label>Who can participate in the study</label><br/>
All are welcome to participate in the study.
</p>

<p>
<label>Aim of the study</label><br/>
The main GOAL of this experiment is to understand the effect of presence of multiple social networks on the navigation process. The aim of the data collection using the experiment is solely for the research purpose. We have no commercial purpose in gathering this data.  It is important to note that, the aim of the experiment is not to perform individual analysis. However, rather quantitative analysis of the whole dataset. As a motivation to participate, we introduce reward in the form of two prizes which are drawn at the end of the experiment. These two prizes will be awarded to two participants, selected randomly from all the participants who have participated in the experiment. These two participants will be awarded <a href="make a link to http://www.apple.com/ipad/" target='_blank' >iPads</a>. Following we explain about the rules and the process of drawing of the lucky draws for the prizes.
</p>

<p>
<label>Potential risks of the study</label><br/>
The risks associated with this study are minimal, and there are no known risks for participating in this research.
No personal identifying information will be required in the survey.
</p>

<p> 
<label>How your information will be protected</label><br/>
Your anonymity and confidentiality will be respected!
</p>

<p>
The anonymity of participants will be achieved by not associating their names with data collected during the study. Participants will not be identified in any reports or publications. All information is kept confidential. That means it is accessible only by the investigators (i.e., password-protected). Data will only be shared with fellow researchers after applying privacy protection algorithms [5]. To put it in simple words, the readers will just see the numeric values for each of the publicly made entities. 
<br/>
This online survey is hosted by university of Bologna, Italy and as such is subject to that jurisdiction's laws. The websurvey company servers record incoming IP addresses of the computer that you use to access the survey but no connection is made between your data and your computer’s IP address. If you choose to participate in the survey, you understand that your responses to the survey questions will be stored in Italy. 

</p>
<p>
<label>Contact for information about the study</label>
<br/>
If you have any questions or concerns about the experiment, please contact us at connect@cs.unibo.it 
</p>
<p>
<label>Participant Consent</label>
<br/>
Taking part in this study is entirely up to you. You have the right to refuse to participate in this study. By participating in the survey you are providing your consent to use the data for purposes of research.

Please indicate that you understand the information presented above, and consent to participate in this study.
</p>
<p>
<p>

<label>Rules for Lucky draw</label>
The platform (web page) will be available for users (across the globe) to participate in the experiment. We will draw two prizes in total. Following are the Lucky Draw Rules:
<ul>
<li> The Estimated time period of the draw is 3 months* from the start of the experiment.</li>
<li> We will update the users in advance about the exact date of the lucky draw through their contact information (email id or phone no)</li>
<li> We will also update all the users if they have won the draw or not.</li>
<li> The name of the winners will be posted on the site to make it fair.</li>
<li> No immediate known of the people associated with this experiment can be considered for lucky draw.</li>
<li> The decision of the experiment organizers will be final. No claims or counter claims can be made through public courts.</li>
<li> By participating you agree to the above rules of the lucky draw.</li>
</ul>
*: This time period can be extended depending on the response to the experiment. We will keep posted about this to all the concerned people.

</p>

<label>Methodology to draw winners in Lucky Draw</label>
<p>All the users who have participated in the experiment, will be assigned a unique numeric value. 
	These numbers will be incremental in numbers. For the first draw, we will draw uniform at random a number.
	 The number corresponds to the unique numeric id of the user being selected for the first prize. For the second prize,
	  we select all the users excluding the winner of the first draw. We will again assign new incremental numeric values 
	  to this set of users. Again, a random number is selected from the set. The number corresponds to the second winner 
	  of the draw.</p>
<label>References</label>
<br/>
<ul>
<li>[1] Jeffrey Travers and Stanley Milgram, An experimental study of the Small World Problem, Psychology Today, 1967, Vol. 2, 60–67.</li>
<li>[2] Stanley Milgram, "The Small World Problem", Psychology Today, 1967, Vol. 2, 60–67.</li>
<li>[3] An Experimental Study of Search in Global Social Networks, Peter Sheridan Dodds , Roby Muhamad , Duncan J. Watts, Science, 2003, 301, page (827-829)</li>
<li>[4] Mikko Kivela, Alexandre Arenas, Marc Barthelemy, James P. Gleeson, Yamir Moreno, and Mason A. Porter, “Multilayer Networks,” in arXiv preprint arXiv:1309.7233 (2013) arXiv:1309.7233.</li>
<li>[5] Rui Chen, Noman Mohammed, Benjamin C. M. Fung, Bipin C. Desai, and Li Xiong. Publishing Set-Valued Data via Differential Privacy. PVLDB 4(11), 2011.</li>
</ul>
</p>
 		<div id="footer">
		<div class="container">
			<div class="text-muted pull-left"><a href='PrivacyStatement.pdf' target="_blank" >Legal</a> | <a href='http://en.wikipedia.org/wiki/Small-world_experiment' target='_blank'>Milgram</a> | <a href='info.php'>Milgram Reloaded</a></div>
			<div class="text-muted pull-right"><?php echo $FOOT_COPYRIGHT; ?></div>
		</div>
	</div>
</div>

</body>
</html>