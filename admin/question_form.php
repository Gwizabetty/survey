<?php 
include "database_connection.php";
include "includes/header.php";
?>
    <!-- create a bootstrap card -->
    <div class="card">
        <div class="card-header">
            <h3>Survey Questions Info</h3><hr>
            <?php
                $surv_name = "";
            if(isset($_GET['id'])){
                $id=$_GET['id'];
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="4">
                            Registered Questions
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Question
                        </th>
                        <th>
                            Question Text
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con=$connect->query("SELECT * FROM `questions` WHERE `survey_id`='$id'");
                    $i=1;
                    while($row=mysqli_fetch_array($con)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $i++;?>
                        </td>
                        <td>
                            <?php echo $row['que_text'];?>
                        </td>
                        <td>
                            <a href="ans_form.php?id=<?php echo $row['que_id'];?>">Add Answer</a>
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
          <h5 class="card-title">Add a Question</h5>
        </div>
        <div class="card-body">
            <form id="form" form method="POST" action="./action/quest_insert.php">
                <input type="hidden" id="survey_id" name="survey_id" value="<?php echo $survey_id;?>" readonly />

            <div class="mb-3">
              <label for="name" class="form-label">Survey Name</label>
              <input type="text" id="name" class="form-control" name="" placeholder="Enter survey name" value="<?php echo $surv_name ?>" readonly/>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Question Text</label>
              <!-- multi-line text input control -->
              <textarea name="question_text" id="question_text" class="form-control" placeholder="Question description here"></textarea>
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