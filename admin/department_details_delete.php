<?php
include('config.php');
$d_id=$_REQUEST['d_id'];
$sql="delete from department_details where department_id='$d_id'";
mysqli_query($con,$sql);
?>

<script>
alert ("department Info Is deleted....");
document.location="department_details_view.php";
</script>