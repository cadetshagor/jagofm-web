<?php 
include('../admin/connect.php');
error_reporting(0);
session_start();

$sql_rj="SELECT * FROM rj_info ORDER BY RAND() LIMIT 1";
$result_rj = mysqli_query($conn, $sql_rj);
$data_rj= mysqli_fetch_assoc($result_rj);

$sql_day="SELECT DISTINCT dname FROM program";
$results_day= mysqli_query($conn,$sql_day);
// echo "<pre>";
// while($data_program=mysqli_fetch_assoc($result_program)){
//     print_r($data_program);
// }
// exit();

$sql_all_rj="SELECT * FROM rj_info WHERE status='1'";
$results_all_rj= mysqli_query($conn,$sql_all_rj);


$sql_feedback="SELECT * FROM feedback WHERE status='1' ORDER BY id DESC";
$results_feedback= mysqli_query($conn,$sql_feedback);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Jago FM</title>
<link rel="stylesheet" href="css/reset.css" />

<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css" media="screen" />

<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />
<link rel="manifest" href="appmanifest.json" />
<script src="jquery-2.1.1.min.js"></script>
<script src="js/others.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="source/jquery.fancybox.js"></script>
<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
    
    <script type="text/javascript">
		
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			$("#close").click(function(){
				$("#black").fadeOut(500);
				})
			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
    
    <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({

      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	  
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

    });
    </script>

	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
		#black { display:none;}
		
	</style>
<script language="JavaScript">
//document.oncontextmenu =new Function("return false;")
</script>
</head>

<!--<body onselectstart="return false">-->
<body>

<div id="full_body_sideBarHover"></div>
        <div class="sideBar">
            <img src="img/nav_icon.svg" class="sideBarNav menu"/>
            <img src="img/cross.png" class="sideBarNav cross"/>
            
            <ul>
                <li class="nav_li home_nav active_li"> &nbsp; Home</li>
                <li class="nav_li about_nav"> &nbsp; About</li>
                <li class="nav_li schedule_nav"> &nbsp; Schedule</li>
                <li class="nav_li rj_pro_nav"> &nbsp; RJ Profile</li>
                <li class="nav_li gallery_nav"> &nbsp; Gallery</li>
                <li class="nav_li contact_nav"> &nbsp; Contact Us</li>
            </ul>
        </div>


		<div class="bird">
		<!-- The canvas must be inside a div called c2canvasdiv -->
		<div id="c2canvasdiv" style="margin: 0 auto; width: 350px; height: 300px;">
		
			<!-- The canvas the project will render to.  If you change its ID, don't forget to change the
			ID the runtime looks for in the jQuery ready event (above). -->
			<canvas id="c2canvas" width="350" height="300">
				<!-- This text is displayed if the visitor's browser does not support HTML5.
				You can change it, but it is a good idea to link to a description of a browser
				and provide some links to download some popular HTML5-compatible browsers. -->
				Your browser does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
				<br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
				<a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
				<a href="http://www.google.com/chrome/">Google Chrome</a><br/>
				<a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
				<a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/>
			</canvas>
			
		</div>

        <br />
        
        <!-- Pages load faster with scripts at the bottom -->
	
	<!-- Construct 2 exported games require jQuery. -->
	


	
    <!-- The runtime script.  You can rename it, but don't forget to rename the reference here as well.
    This file will have been minified and obfuscated if you enabled "Minify script" during export. -->
	<script src="c2runtime.js"></script>
    

    <script>
		// Size the canvas to fill the browser viewport.
		jQuery(window).resize(function() {
			cr_sizeCanvas(jQuery(window).width(), jQuery(window).height());
		});
		
		// Start the Construct 2 project running on window load.
		jQuery(document).ready(function ()
		{
			// Create new runtime using the c2canvas
			cr_createRuntime("c2canvas");
		});
		
		// Pause and resume on page becoming visible/invisible
		function onVisibilityChanged() {
			if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
				cr_setSuspended(true);
			else
				cr_setSuspended(false);
		};
		
		document.addEventListener("visibilitychange", onVisibilityChanged, false);
		document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("msvisibilitychange", onVisibilityChanged, false);
		
		if (navigator.serviceWorker && navigator.serviceWorker.register)
		{
			// Register an empty service worker to trigger web app install banners.
			navigator.serviceWorker.register("sw.js", { scope: "./" });
		}
    </script>
		

	</div>
   
	
	

<p id="logo"><img src="img/logo.png"></p>

<div id="listen">

	<img src="img/equalaizer.gif" class="equalizer">
	<div class="equalizer hidden"></div>

    <img src="img/icon4.gif" id="icon4" class="icon4">
    <img src="img/Play-button.png" id="icon5" class="icon4">
    <span class="listen_h">
        Listen live
    </span>
</div>

<div id="container">
<img src="img/headphone.png" id="headphone">

<section class="home_div">
    
 
	<div id="about">
    	
        <div id="about_text">
        	<span class="headings">ABOUT JAGO FM </span> <img src="img/icons1.png" class="icon1">
            <p class="paragraphs"> 
            	Enough of social pretensions; enough of propaganda's, it is high time to speak up; it is high time to raise the voice. ‘এবার জাগো’! ........ 
            </p>
            <a class="about_nav"><span class="see-more">see more..... </span></a>
        </div>
    
    </div>
    
    <div id="performence">
    	
        <div id="gallery_text">
    		<span class="headings2">Gallery </span> <img src="img/icons1.png" class="icon1"> <br>
    		<img src="img/gallery/pic_06.jpg" class="perf"> <br>
            
            <a class="gallery_nav"><span class="see-more">see more..... </span></a>
        </div>
    
    </div>
    
    <div id="about_rj">
    	
        <div id="rj_text">
        	<div id="rj_right">
        		<span class="headings2">Top RJ </span> <img src="img/icons1.png" class="icon1">
            	<p class="rj"> <img src="../img/rj/<?php echo $data_rj['image']; ?>"> </p>
            	<p class="rj_name"><?php echo $data_rj['full_name']; ?></p>
            </div>
            <div id="rj_left">
            	<p class="paragraphs"> 
            	<?php echo $data_rj['about_me']; ?>
            	</p>
            	<a class="rj_pro_nav"><span class="see-more">see more..... </span></a>
            </div>
        </div>
    
    </div>
    
    <div id="feedback">
    	
        <div id="feedback_text">
        	<span class="headings2">Discussion Forum </span> <img src="img/icons1.png" class="icon1">
            
            <table>
            	<tr>
                	<td> </td>
                    <td>FEEDBACK <img src="img/feedback.png" id="feedback_img"> </td>
                </tr>
                <?php while($data_feedback= mysqli_fetch_assoc($results_feedback)){ 
                    $exploded_name= explode(' ', $data_feedback['name']);
                    $exploded_desc= explode(' ', $data_feedback['description']);
                    $numDesc=count($exploded_desc);
                    $numvals= count($exploded_name);
                    $name='';
                    $description='';
                    if($numvals==1){
                        $name=$data_feedback['name'];
                    }elseif($numvals>1){
                        $name=$exploded_name[1];
                    }
                    
                    if($numDesc<=4){
                        $description=$data_feedback['description'];
                    }elseif($numDesc>4){
                        // $description='ddd';
                        $description = array_slice($exploded_desc, 0, 4);
                        $description= implode(" ",$description);
                    }
                    ?>
                <tr>
                	<td> <?php echo $name; ?> </td>
                    <td><?php echo $description; ?> </td>
                </tr>
                <?php }?>
            </table>
            
            <span class="see-more">see more..... </span>
        </div>
    
    </div>
</section>
    
    
    
    
<!--About page-->
    <div id="about_div">
    		<p class="headings_inner">ABOUT JAGO FM </p>
            <p class="paragraphs_inner"> 
            	Enough of social pretensions; enough of propaganda's, it is high time to speak up; it is high time to raise the voice. ‘এবার জাগো’!<br>

Let your mind speak up, let your voice raise to the fullest, scream out loud against all the odds of yesterday’s, today’s and tomorrow’s. Do not just remain silent and live a mediocre life.<br>

We, Jago Fm came here to raise our voice against all odds and immorals with a bunch of freshers. Our voices are our crucial dominance. We are YOU! We are the youth. So come and raise yourself up with us, let us be the voice of yours.<br>

We started our expedition on,2014. As a newest edition of this FM industry, we brought along our frequency on 94.4 fm.<br>

<a class="fancybox fancybox.iframe" href="about.html"><span class="see-more">see more..... </span></a>

            
			
    </div>
<!--About page-->

<!--schedule page-->
<div id="schedule_div">
			
<div id="owl-demo" class="owl-carousel">
                <?php
                while($data_day= mysqli_fetch_assoc($results_day)){
                    $day_name=$data_day['dname'];
                    // echo $day_name;
                ?>
                <div class="item">
                	<p class="headings_inner"><?php echo $data_day['dname']; ?></p>
                    <ul>
                    <?php 
                        $sql_program="SELECT * FROM program WHERE dname='$day_name'";
                        $result_program= mysqli_query($conn,$sql_program);
                        $numPgms= mysqli_num_rows($result_program);
                        $liclass="col-md-4 col-xs-4";
                        $i=1;
                        while($data_program= mysqli_fetch_assoc($result_program)){
                            if($numPgms==7 && $i>6){
                                $liclass="last_li";
                            }elseif($numPgms==8 && $i>6){
                                 $liclass="last_li_1";
                            }
                        ?>
                    	<li class="<?php echo $liclass; ?>"> 
                        	<h4><?php echo $data_program['slot_time']; ?></h4>
                            <p><?php echo $data_program['pname']; ?></p>
                            <a class="fancybox fancybox.iframe" href="rj_tahmina.html"><p><?php echo $data_program['rj_name']; ?> </p></a>
                        </li>
                        <?php $i++; } 

                        if($day_name=='Wednesday' || $day_name =='Thursday' || $day_name=='Friday'){
                                // echo $day_name;
                            ?>
                             <p align="center" class="special_programe special_p" style="position:absolute; bottom:0px; left:0; width:100%; text-align:center; font-weight:bold; font-size:10px;">তোমায়   গান শোনাবো (1st and last weeks of each months  10.00pm- 11.00pm)</p>
                            <?php 
                        }
                        ?>
                    </ul>
                </div>
                <?php }?>
                
                <!-- <div class="item">
                	<p class="headings_inner">Monday</p>
                    <ul>
                    	<li class="col-md-4 col-xs-4"> 
                        	<h4>06:00am - 08:00am</h4>
                            <p>First Morning</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00am - 12:00pm</h4>
                            <p>Eight One Two</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>12:00pm - 04:00pm</h4>
                            <p>Juzt Music</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>04:00pm - 08:00pm</h4>
                            <p>Jago Express</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00pm - 11:00pm</h4>
                            <p>Black n White</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>11:00pm - 02:00am</h4>
                            <p>TO TO Company</p>
                        </li>
                    </ul>
                </div>
                
                <div class="item">
                	<p class="headings_inner">Tuesday</p>
                    <ul>
                    	<li class="col-md-4 col-xs-4"> 
                        	<h4>06:00am - 08:00am</h4>
                            <p>First Morning</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00am - 12:00pm</h4>
                            <p>Eight One Two</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>12:00pm - 04:00pm</h4>
                            <p>Juzt Music</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>04:00pm - 08:00pm</h4>
                            <p>Jago Express</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00pm - 11:00pm</h4>
                            <p>Black n White</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>11:00pm - 02:00am</h4>
                            <p>TO TO Company</p>
                        </li>
                    </ul>
                </div>
                
                <div class="item">
                	<p class="headings_inner">Wednesday</p>
                    <ul>
                    	<li class="col-md-4 col-xs-4"> 
                        	<h4>06:00am - 08:00am</h4>
                            <p>First Morning</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00am - 12:00pm</h4>
                            <p>Eight One Two</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>12:00pm - 04:00pm</h4>
                            <p>Juzt Music</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>04:00pm - 08:00pm</h4>
                            <p>Jago Express</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00pm - 11:00pm</h4>
                            <p>Black n White</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>11:00pm - 02:00am</h4>
                            <p>TO TO Company</p>
                        </li>
                    </ul>
                </div>
                
                <div class="item">
                	<p class="headings_inner">Thursday</p>
                    <ul>
                    	<li class="col-md-4 col-xs-4"> 
                        	<h4>06:00am - 08:00am</h4>
                            <p>First Morning</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00am - 12:00pm</h4>
                            <p>Eight One Two</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>12:00pm - 04:00pm</h4>
                            <p>Juzt Music</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>04:00pm - 08:00pm</h4>
                            <p>Jago Express</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00pm - 11:00pm</h4>
                            <p>Black n White</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>11:00pm - 02:00am</h4>
                            <p>TO TO Company</p>
                        </li>
                    </ul>
                </div>
                
                <div class="item">
                	<p class="headings_inner">Friday</p>
                    <ul>
                    	<li class="col-md-4 col-xs-4"> 
                        	<h4>06:00am - 08:00am</h4>
                            <p>First Morning</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00am - 12:00pm</h4>
                            <p>Eight One Two</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>12:00pm - 04:00pm</h4>
                            <p>Juzt Music</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>04:00pm - 08:00pm</h4>
                            <p>Jago Express</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00pm - 11:00pm</h4>
                            <p>Black n White</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>11:00pm - 02:00am</h4>
                            <p>TO TO Company</p>
                        </li>
                    </ul>
                </div>
                
                <div class="item">
                	<p class="headings_inner">Saturday</p>
                    <ul>
                    	<li class="col-md-4 col-xs-4"> 
                        	<h4>06:00am - 08:00am</h4>
                            <p>First Morning</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00am - 12:00pm</h4>
                            <p>Eight One Two</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>12:00pm - 04:00pm</h4>
                            <p>Juzt Music</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>04:00pm - 08:00pm</h4>
                            <p>Jago Express</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>08:00pm - 11:00pm</h4>
                            <p>Black n White</p>
                        </li>
                        <li class="col-md-4 col-xs-4"> 
                        	<h4>11:00pm - 02:00am</h4>
                            <p>TO TO Company</p>
                        </li>
                    </ul>
                </div> -->
                
              </div>
              <div class="customNavigation">
                <a class="prev submit">Previous</a>
                <a class="next submit">Next</a>
              </div>
</div>
<!--schedule page-->

<!--RJ profile-->
    <div id="rj_pro_div">
    		<p class="headings_inner">RJ Profile </p>
            <ul id="rj_ul">
                <?php 
                while($data_all_rj=mysqli_fetch_assoc($results_all_rj)){
                ?>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.php?rjid=<?php echo $data_all_rj['id']; ?>">
                        <p class="rj"><img src="../img/rj/<?php echo $data_all_rj['image']; ?>"></p>
                        <p class="rj_name"><?php echo $data_all_rj['short_name']; ?></p>
                    </a>
                </li>
                <?php }?>
                <!-- <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li>
                <li>
                	<a class="fancybox fancybox.iframe" href="rj.html">
                        <p class="rj"><img src="img/rj.png"></p>
                        <p class="rj_name">SARIRA HOSSAIN</p>
                    </a>
                </li> -->
             </ul>
    </div>
<!--RJ profile-->

<!--Gallery page-->
<div id="gallery_div">
<p class="headings_inner">Gallery </p>
	<ul id="gallery_ul">
                
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_02.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_02.jpg"></a>
                </li>
                
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_03.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_03.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_04.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_04.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_05.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_05.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_06.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_06.jpg"></a>
                </li>
               <li class="item">
                    <a class="fancybox" href="img/gallery/pic_07.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_07.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_08.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_08.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_09.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_09.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_10.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_10.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_11.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_11.jpg"></a>
                </li>
                <li class="item">
                    <a class="fancybox" href="img/gallery/pic_12.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_12.jpg"></a>
                </li>
                
                
  	 </ul>
              
</div>
<!--Gallery page-->

<!--Contact page-->
    <div id="contact_div">
    		
    	<p class="headings_inner" style="color:#fff; padding-top:80px;">
        JAGO FM <br>
        PRAN-RFL Center <br>
        </p>
    	<p class="paragraphs address">
        	
            105 Middle Badda,  <br>
            Dhaka-1212, Bangladesh <br>
            Phone : 880-2-9881792 Ext. - 444 <br>
            Email : info@jago.fm <br>
            Web : www.jago.fm
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0448355807043!2d90.42538229999997!3d23.781417700000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c796c7bbbcf5%3A0x792f8d5d1fe51aa1!2sPran+RFL+Center!5e0!3m2!1sen!2sbd!4v1438846532571" width="240" height="150" frameborder="0" style="border:2px solid #fff;" allowfullscreen></iframe>
    </div>
<!--Contact page-->
   
</div>

<div id="request">
    <p id="req_text">Song Request </p>
    <form action="save_song_request.php" method="post">
        <label>Name : </label>
        <input type="text" name="name" required/>
        <label>Email : </label>
        <input type="email" name="email" required />
        <label>Mobile : </label>
        <input type="tel"  name="mobile" required />
        <label>Description : </label>
        <textarea  name="description" id="message"></textarea>
        <p><input type="submit" value="Submit" class="submit"/> </p>
        
    </form>
</div>

<div id="socila_div">
    <a href="https://www.facebook.com/JagoFM" target="_blank"><img src="img/facebook.svg" id="facebook"></a>
    <a href="#"><img src="img/twitter.svg" id="twitter"></a>
    <a href="#"><img src="img/youtube.svg" id="youtube"></a>
</div>

<p id="copyright"> 
Copyright 2015 <br>
Jago FM all right reserved
</p>


<div id="download">
    <div id="apps_links">
        <a href="#"><img src="img/g_play.png" class="down_icon"></a>
        <a href="#"><img src="img/apple_st.png" class="down_icon"></a>
        <a href="#"><img src="img/windows.png" class="down_icon"></a>
    </div>
    <div id="our_apps">
    	<p>Our Apps </p>
    </div>
</div>


<script src="js/custom.js" type="text/javascript" charset="utf-8"></script>
<script src="owl-carousel/owl.carousel.js"></script>
<style>
    #owl-demo .item{
        padding: 0px;
        margin: 5px;
        color: #FFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        text-align: center;
    }
    .customNavigation{
      text-align: center;
    }
    .customNavigation a{
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    </style>


    
    
    
    
    
    
</body>
</html>
