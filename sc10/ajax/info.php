<?php header('Content-Type: text/plain; charset=windows-1251'); ?>
<a href="#" onClick="exit()" id="close"><img src="images/stop.png" width="32" /></a>
<?php
switch($_GET['pers']){
	case('mo'):
		echo '<h1 style="margin:0px;">Main organizer:</h1><br /><center><img src="images/SC_mo.JPG" width="390" /></center><br />
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Svetlana Iezgor</b><br />
		email: <a href="mailto:svitlana.iezgor@BEST.eu.org">svitlana.iezgor@BEST.eu.org</a></p>';
		break;
	case('media'):
		echo '<h1 style="margin:0px;">Media responsible:</h1><br /><center><img src="images/SC_med.jpeg" width="390" /></center><br />
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Alona Shamedko</b><br />
		email: <a href="mailto:alona.shamedko@BEST.eu.org">alona.shamedko@BEST.eu.org</a></p>';
		break;
	case('smo'):
		echo '<h1 style="margin:0px;">Second MO:</h1><br /><center><img src="images/SC_smo.jpg" height="280" /></center>
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Olena Ignatovych</b><br />
		email: <a href="mailto:olena.ignatovych@BEST.eu.org">olena.ignatovych@BEST.eu.org</a></p>';
		break;
	case('fr'):
		echo '<h1 style="margin:0px;">FR responsible:</h1><br /><center><img src="images/SC_fr.jpg" height="280" /></center>
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Ania Arhipova</b><br />
		email: <a href="mailto:ania.arhipova@BEST.eu.org">ania.arhipova@BEST.eu.org</a></p>';
		break;
	case('cul'):
		echo '<h1 style="margin:0px;">Culture responsible:</h1><br /><center><img src="images/SC_cul.jpg" height="280" /></center>
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Mark Paslavskiy</b><br />
		email: <a href="mailto:mark.paslavskiy@gmail.com">mark.paslavskiy@gmail.com</a></p>';
		break;
	case('party'):
		echo '<h1 style="margin:0px;">Party responsible:</h1><br /><center><img src="images/SC_party.jpg" height="280" /></center>
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Anna Lokteva</b><br />
		email: <a href="mailto:anna.lokteva@BEST.eu.org">anna.lokteva@BEST.eu.org</a></p>';
		break;
	case('part'):
		echo '<h1 style="margin:0px;">Participant responsible:</h1><br /><center><img src="images/SC_par.jpeg" height="280" /></center>
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Julia Kralina</b><br />
		email: <a href="mailto:julia.kralina@BEST.eu.org">julia.kralina@BEST.eu.org</a></p>';
		break;
	case('log'):
		echo '<h1 style="margin:0px;">Logistics responsible:</h1><br /><center><img src="images/SC_log.jpg" width="390" /></center><br />
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Oleg Samulik</b><br />
		email: <a href="mailto:oleg.samulik@BEST.eu.org">oleg.samulik@BEST.eu.org</a></p>';
		break;
	case('it'):
		echo '<h1 style="margin:0px;">IT responsible:</h1><br /><center><img src="images/SC_it.jpg" width="390" /></center><br />
		<p class="center" style="font-size:16pt;margin:0px;padding:0px;"><b>Yegor Kulbachka</b><br />
		email: <a href="mailto:yegor.kulbachka@BEST.eu.org">yegor.kulbachka@BEST.eu.org</a></p>';
		break;
}
?>