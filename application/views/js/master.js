$(document).ready(function(){
	$('.modal-trigger').leanModal();
	$('.dropdown-button').dropdown();
	$('.button-collapse').sideNav({menuWidth: 240, activationWidth: 70, edge: 'left'});
	$('.slider').slider({full_width: true, indicators: true, transition: 500, interval: 5000});
	$(window).resize();
	changedate();
});
$( window ).resize(function() {
	$( ".slider" ).css( "height", $(".slides li img").height()+40);
	$( "ul.slides" ).css( "height", $(".slides li img").height());
});
function changedate(){
	var now = new Date().getDay()+1;  //0=Sun, 1=Mon, ..., 6=Sat
	$("#" + now).css("background-color", "rgb(142, 229, 150)");
}