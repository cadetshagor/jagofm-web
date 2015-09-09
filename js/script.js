$(document).ready(function(){
	$(".icon4").click(function(){
		testwindow = window.open("player.html", "mywindow", "location=0,status=0,scrollbars=0,toolbar=0,width=400,height=150");
	    // testwindow.resizeBy(30, 0);   
	    testwindow.moveTo(screen.width, 700);
	});
});