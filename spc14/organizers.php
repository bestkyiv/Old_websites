<?php
$orgs = array
(
'MO1' => array ('name' => 'Anastasia Barbashina', 'PA_id' => 'jf5at2h', 'position' => 'Main Organizer', 'mobile' => '+380508087665', 'fb' => 'SimplyNasT9'),
'MO2' => array ('name' => 'Tetiana Arkhipova', 'PA_id' => 'jf5bbag', 'position' => 'Main Organizer', 'mobile' => '+380632422346', 'fb' => 'arhiphip'),
'PR' => array ('name' => 'Lada Kurabtseva', 'PA_id' => 'lada', 'position' => 'PR responsible', 'mobile' => '+380992655639', 'fb' => 'lada.kurabtseva'),
'FR' => array ('name' => 'Karina Azarian', 'PA_id' => 'fh32a3f', 'position' => 'FR responsible', 'mobile' => '+380963049999', 'fb' => 'karina.azarian'),
'Logistics' => array ('name' => 'Yaroslav Matviichuk', 'PA_id' => 'fh32mzv', 'position' => 'Logistics', 'mobile' => '+380636792050', 'fb' => 'yaroslav.matviichuk.7'),
'Parties' => array ('name' => 'Yurii Losinets', 'PA_id' => 'pc8mvpg', 'position' => 'Party responsible', 'mobile' => '+380638720630', 'fb' => 'yuri.losinets'),
'Participants' => array ('name' => 'Olga Biedova', 'PA_id' => 'hg46bw7', 'position' => 'Participant responsible', 'mobile' => '+380633047548', 'fb' => 'olya.bedova'),
'Food' => array ('name' => 'Dmitry Fedorov', 'PA_id' => 'le6eos5', 'position' => 'Food Responsible', 'mobile' => '+380663696596', 'fb' => 'fedorov.dmitry'),
'Social' => array ('name' => 'Ksenia Eleva', 'PA_id' => 'eleva', 'position' => 'Social responsible', 'mobile' => '+380932006260', 'fb' => ''),
);
?>

<!--<h2>.: Main Organizers :.</h2>-->
<?php
$i = 1;
foreach ($orgs as $k => $v) {
	if ($i % 2 == 1): ?>
<div class="org l rtl">
	<? else: ?>
<div class="org r">
	<? endif; ?>
	<img class="org-pic" src="images/orgs/<?=$v['PA_id']?>.jpg" /><br />
	<p class="org-info"><a href="http://private.best.eu.org/lbg/member/personalView.jsp?person=<?=$v['PA_id']?>"><?=$v['name']?></a><br />
	<?=$v['position']?><br />
	<?=$v['mobile']?> (<a href="https://www.facebook.com/<?=$v['fb']?>">fb</a>)<br /></p>
</div>
	<? $i++;
}
?>