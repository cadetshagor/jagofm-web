$(document).ready(function(){
	

	/*= = = navigation = = =*/
	
	$(".home_nav").click(function(){
		$("#headphone").show(500);
		
		$("#about_div").fadeOut();
		$("#schedule_div").fadeOut();
		$("#rj_pro_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#contact_div").fadeOut();
		setTimeout(function(){ 
			$("#headphone").hide(500);
			$(".home_div").fadeIn(500);
			
		}, 1000);
		
	});		
		
	$(".about_nav").click(function(){
		$("#headphone").show(500);
		
		$(".home_div").fadeOut();
		$("#schedule_div").fadeOut();
		$("#rj_pro_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#contact_div").fadeOut();
		setTimeout(function(){ 
			$("#headphone").hide(500);
			$("#about_div").fadeIn(500);
			
		}, 1000);
		
	});	
	
	$(".schedule_nav").click(function(){
		$("#headphone").show(500);
		
		$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#rj_pro_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#contact_div").fadeOut();
		setTimeout(function(){ 
			$("#headphone").hide(500);
			$("#schedule_div").fadeIn(500);
			
		}, 1000);
		
	});	
	
	$(".rj_pro_nav").click(function(){
		$("#headphone").show(500);
		
		$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#schedule_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#contact_div").fadeOut();
		setTimeout(function(){ 
			$("#headphone").hide(500);
			$("#rj_pro_div").fadeIn(500);
			
		}, 1000);
		
	});	
	
	$(".contact_nav").click(function(){
		$("#headphone").show(500);
		
		$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#schedule_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#rj_pro_div").fadeOut();
		setTimeout(function(){ 
			$("#headphone").hide(500);
			$("#contact_div").fadeIn(500);
			
		}, 1000);
		
	});	
	
	$(".gallery_nav").click(function(){
		$("#headphone").show(500);
		
		$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#schedule_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#contact_div").fadeOut();
		$("#rj_pro_div").fadeOut();
		setTimeout(function(){ 
			$("#headphone").hide(500);
			$("#gallery_div").fadeIn(500);
			
		}, 1000);
		
	});	
				
	/*= = = navigation = = =*/	
	
	//side bar
	var isOpen = 0;
	$('#our_apps').click(function(){
		if(isOpen==0){
			$('#download').animate({left: '0px'});
			isOpen = 1;
			
		}
		else{
			$('#download').animate({left: '-100px'});
			isOpen = 0;
			
		}
	});				
});

