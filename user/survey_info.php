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
                                <!-- attempt Survey -->
                                <a href="attempt_survey.php?id=<?php echo $row['survey_id'];?>">Attempt Survey</a>
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
    

<?php include "includes/footer.php";?>