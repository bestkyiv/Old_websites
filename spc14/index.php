<?php
if (isset($_GET['page'])) $page = $_GET['page'];
else $page = 'home';

function getPageTitle($page) {
	$titles = array
	( 'home' => 'Welcome!',
	  'sponsors' => 'Our sponsors',
	  'organizers' => 'OrgaNICErs!',
	  'participants' => 'PARTYcipants',
	  'promo' => 'Promo video'
	);
	if (isset($titles[$page])) return $titles[$page];
	else return '404';
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=getPageTitle($page).' - ';?>SpC'14: Nothing personal, just IT business!</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<style type="text/css">@import url("css/style.css");</style>
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="background">
	<a href="http://best-kyiv.org/"><img id="logo" class="img-link" src="images/best_kyiv_logo.png"></a>
	<a href="<?=($page == 'home' ? 'http://best.eu.org/student/courses/event.jsp?activity=gch1cxu' : '/spc14/')?>"><img id="speech-bubble" class="img-link" src="images/speech_bubble.png"></a>
	<a href="sponsors"><img id="sponsors-link" class="img-link" src="images/sponsors_link.png"></a>
	<a href="SpC14Kyiv_schedule.pdf"><img id="schedule-link" class="img-link" src="images/schedule_link.png"></a>
	<a href="SpC14Kyiv_survival.pdf"><img id="sg-flag" class="img-link" src="images/sg_flag.png"></a>
	<a href="promo#video"><img id="magic-promo" class="img-link" src="images/magic_promo.png"></a>
	<a href="organizers"><img id="organizers-link" class="img-link" src="images/organizers_link.png"></a>
	<a href="participants"><img id="participants-link" class="img-link" src="images/participants_link.png"></a>
	<div id="content">
		<?php
		if (isset($page) && file_exists($page.'.php')) include_once($page.'.php');
		else include_once('404.php');
		?>
		
	</div>
	<span id="footer">
		Designed by Lada Kurabtseva & Dmitry Fedorov, coded by Dmitry Fedorov &copy; LBG Kyiv, 2013
	</span>
</div>

<!-- Get Google CDN's jQuery and jQuery UI with fallback to local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.8.3.min.js"%3E%3C/script%3E'))</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9/jquery-ui.min.js"></script>
    <script>!window.jQuery.ui && document.write(unescape('%3Cscript src="js/jquery-ui-1.9.1.custom.min.js"%3E%3C/script%3E'))</script>
    <!-- mousewheel plugin -->
    <script src="js/jquery.mousewheel.min.js"></script>
    <!-- custom scrollbars plugin -->
    <script src="js/jquery.mCustomScrollbar.min.js"></script>
    <script>
      (function($){
        $(window).load(function(){
          $("#content").mCustomScrollbar();
        });
      })(jQuery);
    </script>
	
</body>
</html>