<?php
include('config.php');

$class1officer_id=$_POST['class1officer_id'];
$class1_officername=$_POST['class1_officername'];
$desgnation=$_POST['desgnation'];
$contact_number=$_POST['contact_number'];
$email_id=$_POST['email_id'];
$class1_officercode=$_POST['class1_officercode'];
$class1officer_dept=$_POST['class1officer_dept'];

$sql="update class1officer set class1_officername='$class1_officername',desgnation='$desgnation',contact_number='$contact_number',email_id='$email_id',class1_officercode='$class1_officercode',class1officer_dept='$class1officer_dept' where  class1officer_id='$class1officer_id'";

mysqli_query($con,$sql);
?>

<script>
alert("class1officer details updated sucessfully");
document.location="class1_officerdetails_view.php";
</script>