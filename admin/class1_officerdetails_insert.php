<?php
include('config.php');
$class1_officername=$_POST['class1_officername'];
$desgnation=$_POST['desgnation'];
$contact_number=$_POST['contact_number'];
$email_id=$_POST['email_id'];
$class1_officercode=$_POST['class1_officercode'];
$class1officer_dept=$_POST['class1officer_dept'];

$sql="insert into class1officer values('','$class1_officername','$desgnation','$contact_number','$email_id','$class1_officercode','$class1officer_dept')";
mysqli_query($con,$sql);
?>

<script>
alert("class1officer details are inserted");
document.location="class1_officerdetails_view.php";
</script>