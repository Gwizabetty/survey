<?php
include "database_connection.php";
if (isset($_POST["submit"])) {
    $ans_id = $_POST["ans_id"];
    $que =$_POST["question_id"];
    $ans =addslashes($_POST["answer_text"]);
    //update the answer to the database
    $con=$connect->query("UPDATE `answers` SET `ans_text`='$ans' WHERE `ans_id`='$ans_id'");

if($con){
    ?>
<script>
window.alert("Answer Updated");
window.location.href='../ans_form.php?id=<?php echo $que;?>';
</script>
<?php
}
}
?>