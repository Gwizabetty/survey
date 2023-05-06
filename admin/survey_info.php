<?php
include "database_connection.php";
include "includes/header.php";
?>

    <!-- create a bootstrap card -->
    <div class="card">
        <div class="card-header">
            <h3>Surveys Info</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Survey Name
                        </th>
                        <th>
                            Survey Description
                        </th>
                        <th>
                            Survey Date
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $con=$connect->query("SELECT * FROM `surveys`");
                        while($row=mysqli_fetch_array($con)){
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['survey_name'];?>
                            </td>
                            <td>
                                <?php echo $row['survey_description'];?>
                            </td>
                            <td>
                                <?php echo $row['survey_reg_date'];?>
                            </td>
                            <td>
                                <!-- <a href="survey_form.php?id=<?php echo $row['survey_id'];?>">Take Survey</a> -->
                                <!-- add add questiond nbutton to IDS form with survey id -->
                                <a href="question_form.php?id=<?php echo $row['survey_id'];?>">Add Question</a>
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
          <h5 class="card-title">Add new Survey</h5>
        </div>
        <div class="card-body">
            <form id="form" form method="POST" action="./action/survey_insert.php">
            <div class="mb-3">
              <label for="survey_name" class="form-label">Survey Name</label>
              <input type="text" id="survey_name" class="form-control" name="survey_name" placeholder="Enter survey name" />
            </div>

            <div class="mb-3">
              <label for="survey_description" class="form-label">Survey Description</label>
              <!-- multi-line text input control -->
                <textarea name="survey_description" class="form-control" id="survey_description" placeholder="answer description here"></textarea>
            </div>
            <div class="mb-3">
              <label for="survey_reg_date" class="form-label">Registration Date</label>
              <!-- multi-line text input control -->
              <input type="date" name="survey_reg_date" class="form-control" id="survey_reg_date" placeholder="Enter registration date" />
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