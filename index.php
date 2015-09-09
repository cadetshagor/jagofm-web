<?php 
include('admin/connect.php');
error_reporting(1);
session_start();

$sql_rj="SELECT short_name,full_name,shows,hate_things,philosophy,image,favourites, LEFT(about_me,100) AS about_me FROM rj_info ORDER BY RAND() LIMIT 1";
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

$sql_gallery="SELECT * FROM gallery WHERE status='1'";
$results_gallery= mysqli_query($conn,$sql_gallery);
$rows= mysqli_num_rows($results_gallery);

$sql_random_photo="SELECT * FROM gallery ORDER BY RAND() LIMIT 1";
$results_random_photo= mysqli_query($conn,$sql_random_photo);
$random_photo_data= mysqli_fetch_assoc($results_random_photo);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jago FM</title>
<link rel="icon" href="img/ico.png">
<link rel="stylesheet" href="css/reset.css" />

<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css" media="screen" />

<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="owl-carousel/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />
<link rel="manifest" href="appmanifest.json" />
<script src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js"></script>
<script src="js/others.js" type="text/javascript" charset="utf-8"></script>
<script src="js/script.js" type="text/javascript" charset="utf-8"></script>

	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

        .about_nav2{ right: 50px; position: absolute;}
        .address{ font-size: 12px;}
        .last_li_1 {margin-left: 55px;}
		
	</style>
<script language="JavaScript">
if (screen.width < 699) {
    document.location = "http://apps.goodluckbangladesh.net/jago/mobile/";
}
//document.oncontextmenu =new Function("return false;");
</script>
</head>

<body onselectstart="return false">


<script>
	// Issue a warning if trying to preview an exported project on disk.
	(function(){
		// Check for running exported on file protocol
		if (window.location.protocol.substr(0, 4) === "file")
		{
			alert("Exported games won't work until you upload them. (When running on the file:/// protocol, browsers block many features from working for security reasons.)");
		}
	})();
	</script>
		<div class="bird">
		<!-- The canvas must be inside a div called c2canvasdiv -->
		<div id="c2canvasdiv" style="margin: 0 auto; width: 550px; height: 750px;">
		
			<!-- The canvas the project will render to.  If you change its ID, don't forget to change the
			ID the runtime looks for in the jQuery ready event (above). -->
			<canvas id="c2canvas" width="550" height="750">
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
		

	</div>
   
	
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
<!--<img src="img/bird.png" id="bird">-->
<!--<img src="img/microphone.png" id="microphone">-->
<img src="img/logo.png" id="logo">



<div id="container">
<img src="img/equalaizer.gif" class="equalizer">
<div class="equalizer hidden"></div>
<!--Navigatoin-->
<img src="img/home.png" class="home">
<img src="img/about.png" class="about about_nav">
<img src="img/schedule.png" class="schedule schedule_nav">
<img src="img/rj_pro.png" class="rj_pro rj_pro_nav">
<img src="img/archive.png" class="archive">
<img src="img/gallery.png" class="gallery gallery_nav">
<img src="img/contact.png" class="contact contact_nav">

<img src="img/home2.png" class="home2">
<img src="img/about2.png" class="about2">
<img src="img/schedule2.png" class="schedule2">
<img src="img/rj_pro2.png" class="rj_pro2">
<img src="img/archive2.png" class="archive2">
<img src="img/gallery2.png" class="gallery2">
<img src="img/contact2.png" class="contact2">

<img src="img/home2.png" class="home3">
<img src="img/about2.png" class="about3">
<img src="img/schedule2.png" class="schedule3">
<img src="img/rj_pro2.png" class="rj_pro3">
<img src="img/archive2.png" class="archive3">
<img src="img/gallery2.png" class="gallery3">
<img src="img/contact2.png" class="contact3">

<a class="home_nav"><p id="home_nav_t">Home</p></a>
<a class="about_nav"><p id="about_nav_t">About Jago FM</p></a>
<a class="schedule_nav"><p id="schedule_nav_t">Program Schedule</p></a>
<a class="rj_pro_nav"><p id="rj_pro2_nav_t">RJ Profile</p></a>
<a class="archive_nav"><p id="archive_nav_t">Archive</p></a>
<a class="gallery_nav"><p id="gallery_nav_t">Gallery</p></a>
<a class="contact_nav"><p id="contact_nav_t">Contact Us</p></a>

<!--Navigatoin-->

<img src="img/headphone.png" id="headphone">


<img src="img/icon3.png" id="icon3"  class="home_div">
    <div id="listen">
    	<img src="img/icon4.gif" id="icon4" class="icon4">
        <div class="icon4 hidden"></div>
        <span class="listen_h">
        	Listen live
        </span>
    </div>
 
	<div id="about" class="home_div">
    	<img src="img/icons1.png" class="icon1">
        <div id="about_text">
        	<span class="headings">About Jago FM </span>
            <p class="paragraphs"> 
            	Enough of social pretensions; enough of propaganda's, it is high time to speak up; it is high time to raise the voice. ‘এবার জাগো’! ........
            </p>
            <a class=" about_na fancybox fancybox.iframe" href="about.html"><span class="see-more">see more..... </span></a>
        </div>
    
    </div>
    
    <div id="performence"  class="home_div">
    	<img src="img/icons1.png" class="icon1">
        <div id="gallery_text">
    		<span class="headings2">Gallery: </span> <br>
    		<img src="img/gallery/<?php echo $random_photo_data['photo']; ?>" class="perf"> <br>
            
            <a class="gallery_nav"><span class="see-more">see more..... </span></a>
        </div>
    
    </div>
    
    <div id="about_rj" class="home_div">
    	<img src="img/icons1.png" class="icon1">
        <div id="rj_text">
        	<span class="headings2">Top RJ : </span>

            <p class="rj"> <img src="img/rj/<?php echo $data_rj['image']; ?>"> </p>
            <p class="rj_name"><?php echo $data_rj['full_name']; ?></p>
            <p class="paragraphs"> 
            	<?php echo $data_rj['about_me']; ?>
            </p>
            <a class="rj_pro_nav" ><span class="see-more">see more..... </span></a>
        </div>
    
    </div>
    
    <div id="feedback" class="home_div">
    	<img src="img/icons1.png" class="icon1">
        <div id="feedback_text">
        	<span class="headings2">Discussion Forum </span>
            
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
    
    <div id="request">
    	<p id="req_text">Song Request </p>
        <p style="color: white; font-weight: bold; ">
            <?php 
            if($_SESSION['msg']){
                echo $_SESSION['msg'];
            }
            ?>
        </p>
        <form action="save_song_request.php" method="post">
        	<label>Name : </label>
            <input type="text" name="name" required/>
            <label>Email : </label>
            <input type="email" name="email" required />
            <label>Mobile : </label>
            <input type="tel"  name="mobile" required />
            <label>Description : </label>
            <textarea  name="description" id="message" required></textarea>
            <p><input type="submit" value="Submit" class="submit"/> </p>
            
        </form>
    </div>
    
    <a href="https://www.facebook.com/JagoFM" target="_blank"><img src="img/facebook.png" id="facebook"></a>
    <a href="#"><img src="img/twitter.png" id="twitter"></a>
    <a href="#"><img src="img/youtube.png" id="youtube"></a>
    
<!--About page-->
    <div id="about_div">
    		<p class="headings_inner"><img src="img/icons1.png" class="icon1_"> About Jago FM </p>
            <p class="paragraphs_inner">
            
            	Enough of social pretensions; enough of propaganda's, it is high time to speak up; it is high time to raise the voice. ‘এবার জাগো’! <br> <br> 

                Let your mind speak up, let your voice raise to the fullest, scream out loud against all the odds of yesterday’s, today’s and tomorrow’s. Do not just remain silent and live a mediocre life.<br> <br> 

                We, Jago Fm came here to raise our voice against all odds and immorals with a bunch of .....<br> 
                <a class=" about_nav2 fancybox fancybox.iframe" href="about.html"><span class="see-more">see more..... </span></a>
                <br> 

            </p>
            
			<img src="img/icon3.png" class="icon3_">
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
                            <?php
							$new_rj_name=str_replace("&","||",$data_program['rj_name']);
                            $exployedRj= explode("||",$new_rj_name);
							$data_program['rj_name'];
							$exployedRj1= explode(" ",$exployedRj[0]);
							//echo "data_program[rj_name] is : ".$data_program['rj_name']."<br>";
							//echo "exployedRj[0] is : ".$exployedRj[0]."<br>";
							//echo "exployedRj[1] is : ".$exployedRj[1]."<br>";
                            $numRj= count($exployedRj);
							//echo "numRj is : ".$numRj."<br>";
                            $rjid1= get_rj_name($conn,$exployedRj1[1]);
                            if($rjid1 != ""){ 
                                $url1="rj_info.php?rjid=".get_rj_name($conn,$exployedRj1[1]);
                            }else{
                                $url1="#";
                            }
                            ?>
                            <p><a <?php if($url1!='#'){?>class="fancybox fancybox.iframe"<?php }?> href="<?php echo $url1; ?>"><?php echo $exployedRj[0]; ?></a> <!--</p>-->
                            <?php if($numRj==2){ 
								
                                $rjid2= get_rj_name($conn,$exployedRj[1]);
                                if($rjid2 != ""){
                                $url2="rj_info.php?rjid=".get_rj_name($conn,$exployedRj[1]);
                                }else{
                                    $url2="#";
                                }
                                ?>
                            <!--<p>-->& <a <?php if($url2!='#'){?> class="fancybox fancybox.iframe" <?php }?> href="<?php echo $url2; ?>"><?php echo $exployedRj[1]; ?></a> </p>
                            <?php } ?>
                        </li>
                        <?php $i++; } 

                        if($day_name=='Wednesday' || $day_name =='Thursday' || $day_name=='Friday'){
                                // echo $day_name; 
                            ?>
                            <p align="center" class="special_programe special_p" style="position:absolute; bottom:0px; left:0; width:100%; color:white; text-align:center; font-weight:bold; font-size:13px;">তোমায়   গান শোনাবো (1st and last weeks of each months  10.00pm- 11.00pm)</p>
                            <?php 
                        }
                        ?>
                        
                    </ul>
                </div>
                <?php }?>
                
                
                
              </div>
              <div class="customNavigation">
                <a class="prev prev1"><img src="img/pre.png"></a>
                <a class="next next1"><img src="img/next.png"></a>
              </div>
</div>
<!--schedule page-->

<!--RJ profile-->
    <div id="rj_pro_div">
    		<p class="headings_inner">RJ Profile </p>
            <ul id="rj_ul" >
                
                 <?php 
                while($data_all_rj=mysqli_fetch_assoc($results_all_rj)){
                ?>
                <li class="item">
                    <a class="fancybox fancybox.iframe" href="rj_info.php?rjid=<?php echo $data_all_rj['id']; ?>">
                        <p class="rj"><img src="img/rj/<?php echo $data_all_rj['image']; ?>"></p>
                        <p class="rj_name"><?php echo $data_all_rj['short_name']; ?></p>
                    </a>
                </li>
                <?php }?>
               

             </ul>
             
             
    </div>
<!--RJ profile-->

<!--Gallery page-->
<div id="gallery_div" style="display:none;">
<img src="img/icon2.png" class="icon2_">
<img src="img/icon3.png" class="icon3_">
	<p class="headings_inner">Photo Gallery </p>
    <ul id="gallery_ul">
                
                <!--<li class="item">
                	<a class="fancybox" href="img/gallery/pic_01.jpg" data-fancybox-group="gallery"><img src="img/gallery/pic_01.jpg"></a>
                </li>-->
                <?php 
                while($data_gallery= mysqli_fetch_assoc($results_gallery)){
                    // print_r($data_gallery);
                ?>
                <li class="item">
                    <a class="fancybox" href="img/gallery/<?php echo $data_gallery['photo']; ?>" data-fancybox-group="gallery"><img src="img/gallery/<?php echo $data_gallery['photo']; ?>"></a>
                </li>
                <?php } ?>
                
                
                
                
  	 </ul>
          	
</div>


<!--Gallery page-->

<!--Contact page-->
    <div id="contact_div">
    		<img src="img/icons1.png" class="icon1_">
    		<img src="img/icon2.png" class="icon2_">
			<img src="img/icon3.png" class="icon3_">
            <p class="headings_inner">JAGO FM </p>
    	<p class="headings_inner" style="color:#fff; padding-top:0px;">
        
        PRAN-RFL Center <br>
        </p>
    	<p class="paragraphs address">
        	
            105 Middle Badda,  <br>
            Dhaka-1212, Bangladesh <br>
            Phone : 880-2-9881792 Ext. - 444 <br>
            Email : info@jago.fm<br>
            Web : www.jago.fm<br>
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0448355807043!2d90.42538229999997!3d23.781417700000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c796c7bbbcf5%3A0x792f8d5d1fe51aa1!2sPran+RFL+Center!5e0!3m2!1sen!2sbd!4v1438846532571" width="300" height="150" frameborder="0" style="border:2px solid #fff; margin-left: 133px" allowfullscreen></iframe>
    </div>
<!--Contact page-->
   
</div>

<p id="copyright"> 
Copyright 2015 <br>
Jago FM all right reserved
</p>

<div id="download">
	<div id="our_apps" style="margin-top: 26px">
    	<img src="img/our_apps.png">
    </div>
    <div id="apps_links">
        <a href="#"><img src="img/g_play.png" class="down_icon"></a>
        <a href="#"><img src="img/apple_st.png" class="down_icon"></a>
        <a href="#"><img src="img/windows.png" class="down_icon"></a>
    </div>
</div>

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
	  position:absolute;
	  top:210px;
	  width:100%;
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


    <script>
    $(document).ready(function() {

      var owl = $(".owl-carousel");

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
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

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
    
</body>
</html>

<?php
function get_rj_name($conn,$name){
    $sql="SELECT * FROM rj_info WHERE short_name LIKE '%$name%'";
    $results= mysqli_query($conn,$sql);
    // mysqli_num_rows($results);
    $data= mysqli_fetch_assoc($results);
    return $data['id'];
}

session_destroy();
?>