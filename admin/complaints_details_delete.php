<?php
include('config.php');
$c_id=$_REQUEST['c_id'];
$sql="delete from complaint_details where compalint_id='$c_id'";
mysqli_query($con,$sql);  
?>

<script>
alert ("details deleted......!");
document.location="complaints_details_view.php";
</script>