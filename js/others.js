$(document).ready(function(){
	
		
	
	$(".home_nav").hover(function(){
		$(".home2").fadeIn(100);
	}, function() {
		$(".home2").fadeOut(100);
	});	
	
	$(".about_nav").hover(function(){
		$(".about2").fadeIn(100);
	}, function() {
		$(".about2").fadeOut(100);
	});		
	
	$(".schedule_nav").hover(function(){
		$(".schedule2").fadeIn(100);
	}, function() {
		$(".schedule2").fadeOut(100);
	});		
	
	$(".rj_pro_nav").hover(function(){
		$(".rj_pro2").fadeIn(100);
	}, function() {
		$(".rj_pro2").fadeOut(100);
	});		
	
	$(".archive").hover(function(){
		$(".archive2").fadeIn(100);
	}, function() {
		$(".archive2").fadeOut(100);
	});		
	
	$(".gallery_nav").hover(function(){
		$(".gallery2").fadeIn(100);
	}, function() {
		$(".gallery2").fadeOut(100);
	});	
	
	$(".contact_nav").hover(function(){
		$(".contact2").fadeIn(100);
	}, function() {
		$(".contact2").fadeOut(100);
	});
	
	
	/*= = = navigation = = =*/
	
	$(".home_nav").click(function(){
		$("#headphone").fadeIn(500);
		$(".home3").fadeIn();
		$(".about3").fadeOut();
		$(".schedule3").fadeOut();
		$(".rj_pro3").fadeOut();
		$(".archive3").fadeOut();
		$(".gallery3").fadeOut();
		$(".contact3").fadeOut();
		
		setTimeout(function(){ 
			$("#headphone").fadeOut(500);
			$(".home_div").fadeIn(500);
			$("#about_div").fadeOut();
			$("#schedule_div").fadeOut();
			$("#rj_pro_div").fadeOut();
			$(".archive2_div").fadeOut();
			$("#gallery_div").fadeOut();
			$("#contact_div").fadeOut();
			
		}, 1000);
		
	});		
		
	$(".about_nav").click(function(){
		$("#headphone").fadeIn(500);
		$(".home3").fadeOut();
		$(".about3").fadeIn();
		$(".schedule3").fadeOut();
		$(".rj_pro3").fadeOut();
		$(".archive3").fadeOut();
		$(".gallery3").fadeOut();
		$(".contact3").fadeOut();
		
		setTimeout(function(){ 
			$("#headphone").fadeOut(500);
			$("#about_div").fadeIn(500);
			$(".home_div").fadeOut();
			$("#schedule_div").fadeOut();
			$("#rj_pro_div").fadeOut();
			$(".archive2_div").fadeOut();
			$("#gallery_div").fadeOut();
			$("#contact_div").fadeOut();
			
		}, 1000);
		
	});	
	
	$(".schedule_nav").click(function(){
		$("#headphone").fadeIn(500);
		$(".home3").fadeOut();
		$(".about3").fadeOut();
		$(".schedule3").fadeIn();
		$(".rj_pro3").fadeOut();
		$(".archive3").fadeOut();
		$(".gallery3").fadeOut();
		$(".contact3").fadeOut();
		
		setTimeout(function(){ 
			$("#headphone").fadeOut(500);
			$("#schedule_div").fadeIn(500);
			$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#rj_pro_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#contact_div").fadeOut();
		}, 1000);
		
	});	
	
	$(".rj_pro_nav").click(function(){
		$("#headphone").fadeIn(500);
		$(".home3").fadeOut();
		$(".about3").fadeOut();
		$(".schedule3").fadeOut();
		$(".rj_pro3").fadeIn();
		$(".archive3").fadeOut();
		$(".gallery3").fadeOut();
		$(".contact3").fadeOut();
		
		setTimeout(function(){ 
			$("#headphone").fadeOut(500);
			$("#rj_pro_div").fadeIn(500);
			$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#schedule_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#contact_div").fadeOut();
			
		}, 1000);
		
	});	
	
	$(".contact_nav").click(function(){
		$("#headphone").fadeIn(500);
		$(".home3").fadeOut();
		$(".about3").fadeOut();
		$(".schedule3").fadeOut();
		$(".rj_pro3").fadeOut();
		$(".archive3").fadeOut();
		$(".gallery3").fadeOut();
		$(".contact3").fadeIn();
		
		setTimeout(function(){ 
			$("#headphone").fadeOut(500);
			$("#contact_div").fadeIn(500);
			$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#schedule_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#gallery_div").fadeOut();
		$("#rj_pro_div").fadeOut();
			
		}, 1000);
		
	});	
	
	$(".gallery_nav").click(function(){
		$("#headphone").fadeIn(500);
		$(".home3").fadeOut();
		$(".about3").fadeOut();
		$(".schedule3").fadeOut();
		$(".rj_pro3").fadeOut();
		$(".archive3").fadeOut();
		$(".gallery3").fadeIn();
		$(".contact3").fadeOut();
		
		setTimeout(function(){ 
			$("#headphone").fadeOut(500);
			$("#gallery_div").fadeIn(500);
			$(".home_div").fadeOut();
		$("#about_div").fadeOut();
		$("#schedule_div").fadeOut();
		$(".archive2_div").fadeOut();
		$("#contact_div").fadeOut();
		$("#rj_pro_div").fadeOut();
			
		}, 1000);
		
	});	
				
	/*= = = navigation = = =*/	
	
	//side bar
	var isOpen = 0;
	$('#our_apps').click(function(){
		if(isOpen==0){
			$('#download').animate({right: '0px'});
			isOpen = 1;
			
		}
		else{
			$('#download').animate({right: '-100px'});
			isOpen = 0;
			
		}
	});		
});

