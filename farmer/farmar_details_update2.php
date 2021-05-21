<?php
include('config.php');


$farmar_id=$_POST['farmar_id'];
$farmar_name=$_POST['farmar_name'];
$farmar_add=$_POST['farmar_add'];
$farmar_cno=$_POST['farmar_cno'];
$farmar_emailid=$_POST['farmar_emailid'];
$farmar_city=$_POST['farmar_city'];
$farmar_code=$_POST['farmar_code'];


$sql="update farmar_details set farmar_name='$farmar_name',farmar_add='$farmar_add',farmar_cno='$farmar_cno',farmar_emailid='$farmar_emailid',farmar_city='$farmar_city',farmar_code='$farmar_code' where farmar_id='$farmar_id'";
mysqli_query($con,$sql);
?>
<script>
alert("farmar_details updated sucessfully");
document.location="farmar_details_view.php";
</script>