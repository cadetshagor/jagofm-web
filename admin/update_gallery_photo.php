<?php 
include('connect.php');
error_reporting(0);
session_start();


if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}


$imgId= $_GET['imgId'];


// $insert="INSERT INTO `rj_info` (short_name,full_name,about_me,shows,favourites,hate_things,philosophy) VALUES('$short_name','$full_name','$about_me','$show','$favourites','$hate_things','$philosophy')";
// $insertion= mysqli_query($conn,$insert) OR die(mysqli_error($conn));

######
if($_FILES['photo']['name']!=""){
$imageName=$_FILES['photo']['name'];
$imageSize=$_FILES['photo']['size'];
$imagetype=$_FILES['photo']['type'];
$photoTemp=$_FILES['photo']['tmp_name'];

	if($imagetype=="image/jpeg" || $imagetype=="image/jpg" || $imagetype=="image/gif" || $imagetype=="image/png" )
		{
			if($imageSize<10485760)
			{
				$imagepath="../img/gallery/".$photoName;
				
				if(file_exists($imagepath)){
				   $a=gmdate("Yzhis");
				   $imageName=$a.$imageName;
				   $imagepath="../img/gallery/".$imageName;
				   $moved= move_uploaded_file($photoTemp,$imagepath);
				   // return $imageName;
				   if($moved){
				   	$update="UPDATE gallery SET photo='$imageName' WHERE id='$imgId'";

				   	// $insert="INSERT INTO `rj_info` (short_name,full_name,about_me,shows,favourites,hate_things,philosophy,image) VALUES('$short_name','$full_name','$about_me','$show','$favourites','$hate_things','$philosophy','$imageName')";

					$insertion= mysqli_query($conn,$update) OR die(mysqli_error($conn));
					// echo "Uploaded Successfully <br>";
					// echo "<a href='gallery.php?pfbid=".$fbid."'> Visit Gallery<a>";
					$_SESSION['msg']='Uploaded Successfully';
				   }else{
				   	// echo "Not Uploaded, try again";
				   	$_SESSION['msg']='Not Uploaded, try again';
				   }
				    
				}else{
					$moved= move_uploaded_file($photoTemp,$imagepath);
					if($moved){
				   	$update="UPDATE gallery SET photo='$imageName' WHERE id='$imgId'";
					$insertion= mysqli_query($conn,$update) OR die(mysqli_error($conn));
					// echo "Uploaded Successfully <br>";
					// echo "<a href='gallery.php?pfbid=".$fbid."'> Visit Gallery<a>";
					$_SESSION['msg']='Uploaded Successfully';
				    }else{
				   	// echo "Not Uploaded, try again";
				   	$_SESSION['msg']='Not Uploaded, try again';
				    }
					// return $imageName;
				}
			}else{
				// echo "Your image is too large";
				$_SESSION['msg']='Your image is too large';
			}
			
		}else{
			// echo "Image format is incorrect.";
			$_SESSION['msg']='Image format is incorrect.';

		}
}else{
	// echo "Please choose an image.";
	// $update="UPDATE rj_info SET short_name='$short_name',full_name='$full_name',about_me='$about_me',shows='$show',favourites='$favourites',hate_things='$hate_things',philosophy='$philosophy' WHERE id='$rj_id'";
	// $insertion= mysqli_query($conn,$update) OR die(mysqli_error($conn));
}
######




header("location:manage_gallery.php");
// exit();
// mysqli_close($conn);

?>