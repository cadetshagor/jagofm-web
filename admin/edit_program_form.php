<?php 
error_reporting(0);
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

include('connect.php');

$pid= $_GET['pid'];
$sql_all_programs="SELECT * FROM program WHERE id='$pid'";
$results_program= mysqli_query($conn,$sql_all_programs);
$data_program= mysqli_fetch_assoc($results_program);



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('navigation.php'); ?>
        <!-- End Navigation -->



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update Program Schedule
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <?php 
                                if($_SESSION['msg'] !=''){
                                ?>
                                <h5>
                                    <?php 
                                    echo $_SESSION['msg'];
                                    $_SESSION['msg']="";
                                    ?>
                                </h5>
                                <?php 
                                }
                                
                                ?>
                            </li>
                        
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="update_programe.php?pid=<?php echo $pid; ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Day</label>
                                <select name="dayname" class="form-control">
                                    <option value="Saturday" <?php if($data_program['dname']=='Saturday'){echo "Selected";} ?>>Saturday</option>
                                    <option value="Sunday" <?php if($data_program['dname']=='Sunday'){echo "Selected";} ?>>Sunday</option>
                                    <option value="Monday" <?php if($data_program['dname']=='Monday'){echo "Selected";} ?>>Monday</option>
                                    <option value="Tuesday" <?php if($data_program['dname']=='Tuesday'){echo "Selected";} ?>> Tuesday</option>
                                    <option value="Wednesday" <?php if($data_program['dname']=='Wednesday'){echo "Selected";} ?>> Wednesday</option>
                                    <option value="Thursday" <?php if($data_program['dname']=='Thursday'){echo "Selected";} ?>>Thursday</option>
                                    <option value="Friday" <?php if($data_program['dname']=='Friday'){echo "Selected";} ?>>Friday</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Program Schedule</label>
                                <input class="form-control" type="text" name="ptime" value="<?php echo $data_program['slot_time']; ?>">
                                <p class="help-block">Example: 07:00am - 11:00am</p>
                            </div>

                            <div class="form-group">
                                <label>Program Name</label>
                                <input class="form-control" type="text" name="pname" value="<?php echo $data_program['pname']; ?>">
                            </div>

                            <div class="form-group">
                                <label>RJ Name</label>
                                <input class="form-control" type="text" name="rj_name" value="<?php echo $data_program['rj_name']; ?>">
                            </div>

                            
                            <br> 

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>

                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
