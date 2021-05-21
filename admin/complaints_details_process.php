<?php
include('config.php');
$c_id=$_REQUEST['c_id'];
$sql="update complaint_details set compalint_status='Processing' where compalint_id='$c_id'";
 mysqli_query($con,$sql);
?>

<script>
alert ("Complaint status changed to Process......!");
document.location="complaints_details_view.php";
</script>