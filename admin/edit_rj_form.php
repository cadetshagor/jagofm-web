<?php 
error_reporting(0);
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

include('connect.php');
session_start();

$rjid= $_GET['rjid'];

$sql_rj="SELECT * FROM rj_info WHERE id='$rjid'";
$results_rj= mysqli_query($conn,$sql_rj);
$data_rj= mysqli_fetch_assoc($results_rj);

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
    <script type="text/javascript" src="js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
        // tinyMCE.init({
        //     // General options
        //     selector: "textarea#favourites",
        //     // mode: "textareas",
        //     theme: "advanced",
        //     plugins: "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
        //     // Theme options
        //     theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        //     theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        //     theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        //     theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
        //     theme_advanced_toolbar_location: "top",
        //     theme_advanced_toolbar_align: "left",
        //     theme_advanced_statusbar_location: "bottom",
        //     theme_advanced_resizing: true,
        //     // Example content CSS (should be your site CSS)
        //     content_css: "css/content.css",
        //     // Drop lists for link/image/media/template dialogs
        //     template_external_list_url: "lists/template_list.js",
        //     external_link_list_url: "lists/link_list.js",
        //     external_image_list_url: "lists/image_list.js",
        //     media_external_list_url: "lists/media_list.js",
        //     // Style formats
        //     style_formats: [
        //         {title: 'Bold text', inline: 'b'},
        //         {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        //         {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        //         {title: 'Example 1', inline: 'span', classes: 'example1'},
        //         {title: 'Example 2', inline: 'span', classes: 'example2'},
        //         {title: 'Table styles'},
        //         {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        //     ],
        //     // Replace values for the template plugin
        //     template_replace_values: {
        //         username: "Some User",
        //         staffid: "991234"
        //     }
        // });
    </script>

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
                            Add RJ Info
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

                        <form role="form" action="update_rj_info.php?rjID=<?php echo $data_rj['id']; ?>" method="post" enctype="multipart/form-data">

                            
                            <div class="form-group">
                                <label>Short Name</label>
                                <input class="form-control" type="text" name="short_name" value="<?php echo $data_rj['short_name']; ?>">
                                <p class="help-block">Example: RJ SHAHIN</p>
                            </div>

                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" type="text" name="full_name" placeholder="Full Name" value="<?php echo $data_rj['full_name']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Show</label>
                                <input class="form-control" type="text" name="show" placeholder="Show" value="<?php echo $data_rj['shows']; ?>">
                            </div>

                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="form-control" rows="3" name="about_me"><?php echo $data_rj['about_me']; ?></textarea>
                            </div>

                           

                            <div class="form-group">
                                <label>Favourites</label>
                                <textarea class="form-control" rows="3" id="favourites" name="favourites"> <?php echo $data_rj['favourites']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Hate Things</label>
                                <input class="form-control" type="text" name="hate_things" placeholder="Hate Things" value="<?php echo $data_rj['hate_things']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Philosophy  </label>
                                <input class="form-control" type="text" name="philosophy" placeholder="Philosophy" value="<?php echo $data_rj['philosophy']; ?>">
                            </div>
                            
                            <img src="../img/rj/<?php echo $data_rj['image']; ?>" width="250" height="250">    
                             <div class="form-group">
                                <label>RJ Photo</label>
                                <input type="file" name="photo">
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
