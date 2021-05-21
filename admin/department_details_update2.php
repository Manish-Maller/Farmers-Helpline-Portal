<?php
include('config.php');

$department_id=$_POST['department_id'];
$department_name=$_POST['department_name'];
$department_discreption=$_POST['department_discreption'];


$sql="update department_details set department_name='$department_name',department_discreption='$department_discreption' where department_id='$department_id'";
mysqli_query($con,$sql);
?>

<script>
alert("department_details updated sucessfully");
document.location="department_details_view.php";
</script>