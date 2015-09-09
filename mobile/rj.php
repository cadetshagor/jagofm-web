<?php 
include('../admin/connect.php');

$rjid= $_GET['rjid'];
$sql_rj="SELECT * FROM rj_info WHERE id='$rjid'";
$result_rj= mysqli_query($conn,$sql_rj);
$data_rj= mysqli_fetch_assoc($result_rj);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Jago FM</title>
<link rel="stylesheet" href="css/reset.css" />


<link rel="stylesheet" href="css/style.css" />
<script src="jquery-2.1.1.min.js"></script>

	
</head>

<body id="rj_body">

<div id="rj_des_div">

<div id="rj_img">
	<p class="rj"> <img src="../img/rj/<?php echo $data_rj['image']; ?>"> </p>
</div>

<div id="rj_des">
	<p class="rj_name"><?php echo $data_rj['full_name']; ?></p>
    
    <p> 
    <mark>SHOW</mark> : <?php echo $data_rj['shows']; ?> <br>
    
    <?php echo $data_rj['about_me']; ?>  <br> <br>
    
    <mark>Favourites</mark> <br>
<?php echo $data_rj['favourites']; ?> <br> <br>

 <mark>Hated things</mark> <br>
<?php echo $data_rj['hate_things']; ?> <br> <br>

 <mark>Philosophy of life</mark> <br>
<?php echo $data_rj['philosophy']; ?>
    </p>

</div>

</div>
    
</body>
</html>
