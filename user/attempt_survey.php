<?php 
include "database_connection.php";
include "includes/header.php";
?>
    <!-- create a bootstrap card -->
    <div class="card">
        <div class="card-header">
            <h3>Attempt Survey</h3><hr>
            <?php
                $surv_name = "";
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $que = $id;
                $con=$connect->query("SELECT * FROM `surveys` WHERE `survey_id`='$id'");
                $row=mysqli_fetch_array($con);
                if(!isset($row['survey_name'])){
                    //display survey not found
                    echo "<script>alert('Survey not found');</script>";
                    //redirect user to survey page using js
                    echo "<script>window.location.href='survey_info.php';</script>";
                    exit();
                }
                $surv_name = $row['survey_name'];
                //survey id
                $survey_id = $row['survey_id'];
            ?>
                <h4>Survey Name: <?php echo $row['survey_name'];?></h4>
            <?php
            }else{
                //display survey not found
                echo "<script>alert('Survey not found');</script>";
                //redirect user to survey page using js
                echo "<script>window.location.href='survey_info.php';</script>";
                exit();
            }
            ?>
        </div>
        <div class="card-body">
            
                    <?php
                    $con=$connect->query("SELECT * FROM `questions` WHERE `survey_id`='$id'");
                    $i=1;
                    while($row=mysqli_fetch_array($con)){
                    ?>
                    <!-- <tr>
                        <td>
                            <?php //echo $i++;?>
                        </td>
                        <td>
                            <?php echo $row['que_text'];?>
                        </td>
                        <td>
                            <a href="ans_form.php?id=<?php echo $row['que_id'];?>">Add Answer</a>
                        </td>
                    </tr> -->

                    <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title">Q <?php echo $i++; ?> <?php echo $row['que_text'];?></h5>
                        </div>
                        <div class="card-body">
                           <ol type="1">

                           <?php
                            $q_id = $row['que_id'];
                            $conn= mysqli_query($connect,"SELECT * FROM `answers` WHERE `que_id`='$q_id'");
                            $b =1;
                            while($row2=mysqli_fetch_array($conn)){

                           ?>
                            <p><?php echo $b++; ?>, <?php echo $row2['ans_text']; ?></li>
                           <?php } ?>
                           </ol>
                        </div>
                        </form>
                    </div>
                    </div>
                        <br><br>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>


<?php include "includes/footer.php";?>