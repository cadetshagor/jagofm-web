<?php 
error_reporting(0);
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

include('connect.php');

$sql_all_programs="SELECT * FROM program";
$results_program= mysqli_query($conn,$sql_all_programs);
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
                            Manage Program Schedule
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

                        
                        <h2>Program Schedule</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Day </th>
                                        <th>Program Time </th>
                                        <th>Program Name</th>
                                        <th>RJ Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $newday="";
                                    $trClass="";
                                    $rowclass="";
                                    $x=0;
                                    $display=""; 
                                    while($data_program= mysqli_fetch_assoc($results_program)){
                                        if($newday != $data_program['dname']){
                                           $x++;
                                           $trClass='class="parent"';
                                           $rowclass='id="row'.$x.'"';
                                           $display="";
                                        }else{
                                            $trClass='class="child-row'.$x.'"';
                                            $rowclass="";
                                            $display='style="display:none;"';
                                        }
                                        $newday=$data_program['dname'];
                                    ?>
                                    <tr <?php echo $trClass; ?> <?php echo $rowclass; ?> <?php echo $display; ?> >
                                        <td><?php echo $data_program['dname']; ?></td>
                                        <td><?php echo $data_program['slot_time']; ?></td>
                                        <td><?php echo $data_program['pname']; ?></td>
                                        <td><?php echo $data_program['rj_name']; ?></td>
                                        <td><?php echo $data_program['status']; ?></td>
                                        <td><a href="edit_program_form.php?pid=<?php echo $data_program['id']; ?>"><button>Edit</button></a></td>
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
    <script type="text/javascript">
        $(function() {
            $('tr.parent')
                .css("cursor","pointer")
                .attr("title","Click to expand/collapse")
                .click(function(){
                    $(this).siblings('.child-'+this.id).toggle();
                });
            $('tr[@class^=child-]').hide().children('td');
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
