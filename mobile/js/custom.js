$(document).ready(function(){

	//nav active

	$('.nav_li').click(function () {
		$('.nav_li').removeClass("active_li");
		$(this).addClass("active_li");
		$('.sideBar').animate({right: '-200px'});
		$('#full_body_sideBarHover').fadeOut(300);
		isOpen = 0;
		$('.cross').fadeOut();
		$('.menu').fadeIn();
	});
	
	//side bar
	var isOpen = 0;
	$('.sideBarNav').click(function(){
		if(isOpen==0){
			$('.sideBar').animate({right: '0px'});
			isOpen = 1;
			$('#full_body_sideBarHover').fadeIn(300);
			$('.menu').fadeOut();
			$('.cross').fadeIn();
		}
		else{
			$('.sideBar').animate({right: '-200px'});
			isOpen = 0;
			$('#full_body_sideBarHover').fadeOut(300);
			$('.cross').fadeOut();
			$('.menu').fadeIn();
		}
	});
	//page transition
	$('.sideBar ul a').click(function(e){
		e.preventDefault();
		var nextPageid = $(this).attr('href');
		$('.active').fadeOut(500);
		$(nextPageid).fadeIn(500);
		$('.active').removeClass('active');
		$(nextPageid).addClass('active');
		$('#sideBarNav').click();	
	});

	// audio control
	var audio = new Audio('http://192.240.102.3:9099/;');
	var preDefined_soundLevel = 2;
	$("#sound_slider_nob").css('left',$("#sound_slider_panel").width()*preDefined_soundLevel*10/100);
	var sound_panel_ratio = 1/$("#sound_slider_panel").width();
	audio.volume = preDefined_soundLevel/10;
	$( "#sound_slider_nob" ).draggable({
		axis:"x",
		containment: "#sound_slider_panel",
		drag: function( event, ui ){
			audio.volume = ui.position.left*sound_panel_ratio;
		}

	});
	// Play Pause Button Big
	//$('.play_pause').click(function(){
//		if($('.play_pause img').attr('src')=="img/play_button.svg"){
//				audio.play();
//				$('.play_pause img').attr('src','img/pause_button.svg');
//		}
//		else{
//			audio.pause();
//			$('.play_pause img').attr('src','img/play_button.svg');
//		}
//	});

	

});

