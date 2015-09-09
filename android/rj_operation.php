<?php 
include('../admin/connect.php');
$sql_rjs="SELECT * FROM rj_info WHERE status='1'";
$results_rjs= mysqli_query($conn,$sql_rjs);
$output="[";
$data=array();
$i=0;
while($data_rjs= mysqli_fetch_assoc($results_rjs)){
	$data[$i]=$data_rjs;
	$i++;

	?>
	<div class="item">
                	
                    <p class="rj_name"><?php echo $data_rjs['full_name']; ?></p>
                    <p class="rj_text" style="padding-left:10px;">
                    <img src="img/rj/<?php echo $data_rjs['image'];?> " class="rj_pic">
                    	<mark>SHOW</mark> : <?php echo $data_rjs['shows']; ?> <br> <br>
    
                        <?php echo $data_rjs['about_me']; ?>  <br> <br>
                        
                        <mark>Favourites</mark> <br>
                    
					<?php echo $data_rjs['favourites']; ?>
                    <br><br>
                    
                     <mark>Hated things</mark> <br>
                       <?php echo $data_rjs['hate_things']; ?> <br> <br>
                    
                     <mark>Philosophy of life</mark> <br>
                    <?php echo $data_rjs['philosophy']; ?>
                    </p>
    </div>

<?php

}
// echo json_encode($data);
?>

