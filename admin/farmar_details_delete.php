<?php
include('config.php');
$id=$_REQUEST['id'];
$sql="delete from farmar_details where farmar_id='$id'";
mysqli_query($con,$sql); 
?>

<script>
alert ("farmer details deleted sucessfully......!");
document.location="farmar_details_view.php";
</script>