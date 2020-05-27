var Intid;
var obj;
function blink(){
	obj.animate({"opacity": "-=0.5"}, 500)
	.animate({"opacity": "+=0.5"}, 500);
}
function splash(person) {
	$("#info").load('ajax/info.php?pers='+person);
	$("#info").fadeIn(500);
}
function exit() {
	$("#info").fadeOut(500);	
}
$(document).ready( function () {
	$(".smenu").hover( function () {
		obj = $(this);
		Intid = setInterval(blink, 1000);
//		blink($(this));
	},
	function () {
		$(this).animate({"opacity": "=1"}, 1);
		clearInterval(Intid);
	});
	$("#arrow").click( function () {
		if ($("#schedule1").is(":hidden")){
			$("#schedule2").animate({"width": "-=600px", opacity: "hide"}, "slow", function () {$("#schedule1").animate({"width": "+=600px"});});
			$("#arrow").html('<input type="button" value="NEXT" class="button" />');
			// $("#schedule2").slideUp("slow", function () {$("#schedule1").slideDown("slow");});
		}else {
			$("#schedule1").animate({"width": "-=600px", opacity: "hide"}, "slow", function () {$("#schedule2").animate({"width": "+=600px"});});
			$("#arrow").html('<input type="button" value="PREVIOUS" class="button" />');
			//$("#schedule1").slideUp("slow", function () {$("#schedule2").slideDown("slow");});
		}
	});
});