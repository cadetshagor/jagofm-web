<?php 
error_reporting(0);
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

include('connect.php');

$sql_all_rj="SELECT * FROM rj_info";
$results_rj= mysqli_query($conn,$sql_all_rj);
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
                            Manage RJ
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
                    <div class="col-lg-12">

                        
                        <h2>RJ Info</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Short Name </th>
                                        <th>Full Name </th>
                                        <th>Show</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Publish</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while($data_rj= mysqli_fetch_assoc($results_rj)){
                                    ?>
                                    <tr>
                                        <td><?php echo $data_rj['short_name']; ?></td>
                                        <td><?php echo $data_rj['full_name']; ?></td>
                                        <td><?php echo $data_rj['shows']; ?></td>
                                        <td><img width="150" height="150" src="../img/rj/<?php echo $data_rj['image']; ?>"></td>
                                        <td>
                                        <?php $status= $data_rj['status']; 
                                        if($status==0){
                                            echo "Unpublished";
                                        }else{
                                            echo "Published";
                                        }

                                        ?>

                                        </td>
                                        <td>
                                            <?php 
                                            if($status ==0){
                                                echo "<a href='rj_publish_operation.php?rjid=".$data_rj['id']."'> <button > Publish</button></a>";
                                            }else{
                                                echo "<a href='rj_publish_operation.php?rjid=".$data_rj['id']."'> <button > Unpublish</button></a>";
                                            }

                                            ?>
                                        </td>
                                        <td><a href="edit_rj_form.php?rjid=<?php echo $data_rj['id']; ?>"><button>Edit</button></a></td>
                                    </tr>
                                    <?php }?>
                                    
                                </tbody>
                            </table>
                        </div>
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
