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
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
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
</head>

<!--<body onselectstart="return false">-->
<body>

<div id="black">
    <div id="pop_up">
    <!--<img src="img/close.png" id="close">-->
    
    <h1>For best user experience you can download our Android friendly app.</h1>
    <p> Continue in App </p>
    <p>	<a href="#"><img src="img/g_play.png" id="gplay"></a> </p>
    <p> <a href="home.php">Continute in website</a> </p>
    <p id="mobile_img"><img src="img/app_img.png" id="app_img"></p>
    
    </div>
</div>

 
    
    
</body>
</html>
