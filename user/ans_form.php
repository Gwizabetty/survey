<?php 
include "database_connection.php";
include "includes/header.php";?>
    <!-- create a bootstrap card -->
    <div class="card">
        <div class="card-header">
            <h3>Questions Answers</h3><hr>
            <?php
                $surv_name = "";
            if(isset($_GET['id'])){
                //get question info from id
                $id=$_GET['id'];
                $con=$connect->query("SELECT * FROM `questions` WHERE `que_id`='$id'");
                $row1=mysqli_fetch_array($con);
                if(!isset($row1['que_text'])){
                    //display survey not found
                    echo "<script>alert('Question not found');</script>";
                    //redirect user to survey page using js
                    echo "<script>window.location.href='survey_info.php';</script>";
                    exit();
                }
                $que_text = $row1['que_text'];
                $que_id = $row1['que_id'];
                ?>
                <h4>Question : <?php echo $row1['que_text'];?></h4>
                <?php
                //get survey info from question id
                $id = $row1['survey_id'];
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="4">
                            Registered Answers
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Answer
                        </th>
                        <th>
                            Answer Text
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = $connect->query("SELECT * FROM `answers` WHERE `que_id`='$que_id'");
                    $i=0;
                    while($row=mysqli_fetch_array($con)){
                    ?>
                    <tr>
                        <td>
                            <?php echo ++$i;?>
                        </td>
                        <td>
                            <?php echo $row['ans_text'];?>
                        </td>
                        <td>
                            <div class="btn-group btn-sm">

                            <!-- Create edit and delete buttons with icons -->
                            <a class="btn btn-success" href="ans_edit.php?id=<?php echo $row['ans_id'];?>">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" href="./action/ans_delete.php?ans_id=<?php echo $row['ans_id'];?>&id=<?php echo $que_id;?>">
                                <i class="fa fa-trash"></i>
                                Delete
                            </a>
                        
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>


    <!-- Create a form  -->
    
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Answer Form</h5>
        </div>
        <div class="card-body">
            <form id="form" form method="POST" action="./action/ans_insert.php">
                <input type="hidden" id="question_id" name="question_id" value="<?php echo $que_id;?>" readonly />

            <div class="mb-3">
              <label for="name" class="form-label">Question</label>
              <input type="text" id="question_text" class="form-control" name="question_text" value="<?php echo $que_text;?>" readonly />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Answer Text</label>
              <!-- multi-line text input control -->
            <textarea name="answer_text" class="form-control" id="answer_text" placeholder="answer description here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">
                <i class="fa fa-save"></i>
                Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "includes/footer.php";?>