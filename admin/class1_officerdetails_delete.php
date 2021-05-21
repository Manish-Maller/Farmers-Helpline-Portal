<?php
include('config.php');
$id=$_REQUEST['id'];

$sql="delete from class1officer  where class1officer_id='$id'";
mysqli_query($con,$sql);
?>
<script>
alert(" class1 Info Is Deleted.....");
document.location="class1_officerdetails_view.php";
</script>