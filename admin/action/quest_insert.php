<?php
include "database_connection.php";
if (isset($_POST["submit"])) {
    $surv = $_POST["survey_id"];
    $que = $_POST["question_text"];
    
   $con=$connect->query("INSERT INTO `questions`(`survey_id`, `que_text`) VALUES ('$surv','$que')");
if($con){
    ?>
<script>
window.alert("Question recorded");
window.location.href='../question_form.php?id=<?php echo $surv;?>';
</script>
<?php
}
}
?>