<?php
include('config.php');

$compalint_id=$_POST['compalint_id'];
$compalint_name=$_POST['compalint_name'];
$farmar_id=$_POST['farmar_id'];
$class1officer_id=$_POST['class1officer_id'];
$compalint_discreption=$_POST['compalint_discreption'];
$compalint_date=$_POST['compalint_date'];
$compalint_status=$_POST['compalint_status'];
$attached_file=$_POST['attached_file'];

$sql="update complaint_details set class1officer_id ='$class1officer_id',compalint_name='$compalint_name',farmar_id='$farmar_id',class1officer_id='$class1officer_id',compalint_discreption='$compalint_discreption',compalint_date='$compalint_date',compalint_status='$compalint_status',attached_file='$attached_file' where compalint_id='$compalint_id'";
mysqli_query($con,$sql);
?>

<script>
alert("complaint_details updated sucessfully");
document.location="complaints_details_view.php";
</script>