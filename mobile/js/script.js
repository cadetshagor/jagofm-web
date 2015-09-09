$(document).ready(function(){
	//$(".icon4").click(function(){
//		testwindow = window.open("player.html", "mywindow", "location=0,status=0,scrollbars=0,toolbar=0,width=400,height=150");
//	    // testwindow.resizeBy(30, 0);   
//	    testwindow.moveTo(screen.width, 700);
//	});
	var audio = new Audio('http://192.240.102.3:9099/;');
	
	$('#icon4').click(function(){
		  audio.play();
		  $('#icon5').show();
		  $(this).hide();
	});
	
	$('#icon5').click(function(){
		  audio.pause();
		  $('#icon4').show();
		  $(this).hide();
	});
});