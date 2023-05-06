<?php
include "database_connection.php";
if (isset($_POST["submit"])) {
    $que =$_POST["question_id"];
    $ans =addslashes($_POST["answer_text"]);
    
   $con=$connect->query("INSERT INTO `answers`(`que_id`, `ans_text`) VALUES ('$que','$ans')");

if($con){
    ?>
<script>
window.alert("Answer recorded");
window.location.href='../ans_form.php?id=<?php echo $que;?>';
</script>
<?php
}
}
?>