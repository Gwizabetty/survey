<?php
include "database_connection.php";
if (isset($_POST["submit"])) {
    $svyname =$_POST["survey_name"];
    $desc =$_POST["survey_description"];
    $date =$_POST["survey_reg_date"];
    
    // $in=mysqli_query($connect," INSERT INTO `surveys`(`survey_id`, `survey_name`, `survey_description`, `survey_reg_date`, `question1`, `question2`, `question3`, `question4`, `question5`) VALUES ('','$svyname','$desc','$date','$que1','$que2','$que3','$que4','$que5')");

   $in=$connect->query("INSERT INTO surveys VALUES('','$svyname','$desc','$date')");
if($in){
    ?>
<script>
window.alert("survey recorded");
window.location.href='../survey_info.php';
</script>
<?php
}
}
?>