<?php include('includes/head.php'); ?>
<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td>&nbsp;</td><td width="1000">
<img id="background" src="images/bg.gif" border="0" width="1000" />
<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><td colspan="2" align="center" valign="top" height="180">
<?php include('includes/logo.php'); ?>
</td></tr><tr><td width="230" valign="top">
<?php include('./includes/menu.php'); ?>
</td><td align="left" valign="top" id="content" width="770">
<?php
switch(basename($_SERVER['PHP_SELF'])){
	case('index.php'):
		echo 
'<div style="font-family:Tahoma, Geneva, sans-serif;
position:relative;
left:250px;
top:40px;
width:300px;
font-size:14pt;">Participate in our Summer Course 
to find out smth interesting about aviation)))</div>
<div style="font-family:Tahoma, Geneva, sans-serif;
position:relative;
left:150px;
top:240px;
width:300px;
font-size:14pt;">Is your field of study aviation, or you just stare at the picture 
trying to guess which one 
of those above is a flying object)))?
PARTICIPATE!</div>';
		$position = 'index';
		include('includes/objects.php');
		include('includes/app_now.php');
		break;
	case('schedule.php'):
		echo '<h1>SCHEDULE</h1> <a class="big_link" href="downloads/schedule.xls">DOWNLOAD </a><br /><br />
		<table border="0" cellspacing="0" cellpadding="0" height="330"><tr><td width="600"><div id="schedule1"><img src="images/schedule1.jpg" width="600" /></div><div id="schedule2"><img src="images/schedule2.jpg" width="500" /></div></td><td valign="bottom">&nbsp;&nbsp;<a id="arrow" class="big_link" href="#">NEXT</a></td></tr></table>';
		break;
	case('about.php'):
		echo "<h2>Have you ever thought that you can fly? 2 wings and sky? Fly and fly higher than a butterfly!</h2>
<p>
During these summer days you'll explore the most fantastic dream of mankind - a dream to fly!<br />Wonderful world of small aircrafts, from the birth of ideas to real small unmanned aircrafts, hang gliders, paragliders, gliders.</p>

<p>You'll be one step closer to sky!</p>

<p>You'll open our winged Ukraine, where Delone, Sikorskyy, Korolev, Antonov and many other fathers of Ukrainian aviation lived and worked for the only one dream - to fly!</p>

<p>You'll discover our ancient Ukrainian culture and fabulous traditions, our 1500-year-old wonderful city Kyiv and our national food and drinks, our way of life and our friendly people!</p>

<p class=\"center\">We believe you can fly!!!</p>

<p class=\"center\">So just <a class=\"big_link\" href=\"http://best.eu.org/student/courses/event.jsp?activity=ibs50sm\">Apply</a>!!!</p>";
		$position = 'about';
		include('includes/app_now.php');
		break;
	case('survival.php'):
		echo "<br /><br /><a href=\"downloads/survival.pdf\" class=\"big_link\">DOWNLOAD SURVIVAL GUIDE</a>";
		include('includes/objects.php');
		break;
	case('sponsors.php'):
		echo '<h1>Our partners:</h1><center><img src="images/pg.png" width="150" /></center><br />';
		echo '<h1>Our sponsors:</h1><center style="font-size:18pt;">Coming soon...</center>';
		break;
	case('organizers.php'):
		echo '<h1>Organizers:</h1><center><img src="images/orgs.jpg" width="700" /></center>';
		break;
	case('participants.php'):
		$position = 'participants';
		echo '<h1>May be you!</h1><center><a style="font-size:48pt;font-weight:normal;color:#30C" href="http://best.eu.org/student/courses/event.jsp?activity=ibs50sm">Apply now!!!</a></center>';
		include('includes/objects.php');
		break;
	default:
		include('includes/objects.php');
		include('includes/app_now.php');
}?>
</td></tr></table>
</td><td>&nbsp;</td></tr></table>
<?php include('includes/foot.php'); ?>
