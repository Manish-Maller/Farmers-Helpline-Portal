<?php
include('config.php');

$department_name=$_POST['department_name'];
$department_discreption=$_POST['department_discreption'];

$sql="insert into department_details values('','$department_name','$department_discreption')";


mysqli_query($con,$sql);
?>

<script>
alert("department_details inserted sucessfully");
document.location="department_details_view.php";
</script>