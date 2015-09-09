<?php 
include('../admin/connect.php');
$sql_day="SELECT DISTINCT dname FROM program";
$results_day= mysqli_query($conn,$sql_day);
while($data_day= mysqli_fetch_assoc($results_day)){
$day_name=$data_day['dname'];

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
                            }
                        ?>

                        <li class="<?php echo $liclass; ?>"> 
                            <h4><?php echo $data_program['slot_time']; ?></h4>
                            <p><?php echo $data_program['pname']; ?></p>
                            <p><?php echo $data_program['rj_name']; ?> </p>
                        </li>
                        <?php $i++; } 

                        if($day_name=='Wednesday' || $day_name =='Thursday' || $day_name=='Friday'){
                                // echo $day_name;
                        ?>
                        <li class="m_l" style="width:99%;"> <p>তোমায়   গান শোনাবো (1st and last weeks of each months  10.00pm- 11.00pm)</p>
                        <?php }?> </li>
                    </ul>
                </div>
                <?php }?>

