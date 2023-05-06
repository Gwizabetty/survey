<?php
include "database_connection.php";
if (isset($_GET["ans_id"]) && isset($_GET["id"])) {
    $ans_id=$_GET["ans_id"];
    $que =$_GET["id"];
    
    //delete answer from database 
    $con=$connect->query("DELETE FROM `answers` WHERE `ans_id`='$ans_id'");
//    $con=$connect->query("INSERT INTO `answers`(`que_id`, `ans_text`) VALUES ('$que','$ans')");

if($con){
    ?>
<script>
window.alert("Answer Deleted");
window.location.href='../ans_form.php?id=<?php echo $que;?>';
</script>
<?php
}
}else{
    ?>
<script>
window.alert("Answer not Deleted");
window.location.href='../ans_form.php';
</script>
<?php
}
?>