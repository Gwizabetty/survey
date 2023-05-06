<?php 
include "database_connection.php";
include "includes/header.php";?>
<?php
//if id is not set redirect back to ans_form.php
if(!isset($_GET['id'])){
    //display Answer Not Found
    echo "<script>alert('Answer Not Found');</script>";
    //redirect user to answer page
    echo "<script>window.location.href='ans_form.php';</script>";
    exit();
}
//get answer info from ans_id
$ans_id = $_GET['id'];
$con=$connect->query("SELECT * FROM `answers` WHERE `ans_id`='$ans_id'");
$row=mysqli_fetch_array($con);
if(!isset($row['ans_text'])){
    //display survey not found
    echo "<script>alert('Answer not found');</script>";
    //redirect user to answer page
    echo "<script>window.location.href='ans_form.php?id='".$id.";</script>";
    exit();
}
$ans_text = $row['ans_text'];
$que_id = $row['que_id'];
//get question info from que_id
$con=$connect->query("SELECT * FROM `questions` WHERE `que_id`='$que_id'");
$row1=mysqli_fetch_array($con);
if(!isset($row1['que_text'])){
    //display survey not found
    echo "<script>alert('Question not found');</script>";
    //redirect user to answer page
    echo "<script>window.location.href='ans_form.php?id='".$id.";</script>";
    exit();
}
$que_text = $row1['que_text'];

?>
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Edit Answer Form</h5>
        </div>
        <div class="card-body">
            <form id="form" form method="POST" action="./action/ans_edit.php">
                <!-- Answer id input -->
                <input type="hidden" id="ans_id" name="ans_id" value="<?php echo $ans_id;?>" readonly />
                <input type="hidden" id="question_id" name="question_id" value="<?php echo $que_id;?>" readonly />

            <div class="mb-3">
              <label for="name" class="form-label">Question</label>
              <input type="text" id="question_text" class="form-control" name="question_text" value="<?php echo $que_text;?>" readonly />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Answer Text</label>
              <!-- multi-line text input control -->
            <textarea name="answer_text" class="form-control" id="answer_text" placeholder="answer description here"><?php echo $ans_text; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">
                <i class="fa fa-save"></i>
                Save
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "includes/footer.php";?>