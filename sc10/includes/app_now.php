<?php
switch($position){
	case('index'):
		$x1='-150px';
		$y1='-250px';
		$x2='420px';
		$y2='-180px';
		$x3='300px';
		$y3='-500px';
		break;
	case('about'):
		$x1='-70px';
		$y1='-100px';
		$x2='420px';
		$y2='-280px';
		$x3='300px';
		$y3='-20px';
		break;
	default:
		$x1='-70px';
		$y1='-100px';
		$x2='420px';
		$y2='-400px';
		$x3='300px';
		$y3='-20px';
	
}
?>
<style type="text/css">
#app1, #app2, #app3 {
	font-family:Tahoma, Geneva, sans-serif;
	color:#999;
	font-size:14pt;
	text-decoration:none;
	position:relative;
	z-index:0;
}
#app1:hover, #app2:hover, #app3:hover {
	color:#000;
}
#app1 {
	top:<?php echo $y1 ?>;
	left:<?php echo $x1 ?>;
}
#app2 {
	top:<?php echo $y2 ?>;
	left:<?php echo $x2 ?>;
}
#app3 {
	top:<?php echo $y3 ?>;
	left:<?php echo $x3 ?>;
}
</style>
<a id="app1" onFocus="if (this.blur) this.blur();" href="http://best.eu.org/student/courses/event.jsp?activity=ibs50sm"><nobr>APPLY NOW!</nobr></a>
<a id="app2" onFocus="if (this.blur) this.blur();" href="http://best.eu.org/student/courses/event.jsp?activity=ibs50sm"><nobr>APPLY NOW!</nobr></a>
<a id="app3" onFocus="if (this.blur) this.blur();" href="http://best.eu.org/student/courses/event.jsp?activity=ibs50sm"><nobr>APPLY NOW!</nobr></a>