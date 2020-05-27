<?php
switch($position){
	case('index'):
		$x1='-40px';
		$y1='70px';
		$x2='200px';
		$y2='-220px';
		$x3='470px';
		$y3='-200px';
		break;
	case('participants'):
		$x1='-80px';
		$y1='-250px';
		$x2='230px';
		$y2='-190px';
		$x3='500px';
		$y3='-450px';
		break;
	default:
		$x1='10px';
		$y1='200px';
		$x2='230px';
		$y2='-70px';
		$x3='500px';
		$y3='-50px';
	
}
?>
<style type="text/css">
#obj1, #obj2, #obj3{
	position:relative;
	z-index:0;
}
#obj1{
	top:<?php echo $y1; ?>;
	left:<?php echo $x1; ?>;
}
#obj2{
	top:<?php echo $y2; ?>;
	left:<?php echo $x2; ?>;
}
#obj3{
	top:<?php echo $y3; ?>;
	left:<?php echo $x3; ?>;
}
</style>
<div id="obj1"><img src="images/bird.png" width="180" /></div>
<div id="obj2"><img src="images/ball.png" width="250" /></div>
<div id="obj3"><img src="images/fly.png" width="180" /></div>