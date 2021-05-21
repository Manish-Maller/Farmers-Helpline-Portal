<?php

include('config.php');
$farmar_name=$_POST['farmar_name'];
$farmar_add=$_POST['farmar_add'];
$farmar_cno=$_POST['farmar_cno'];
$farmar_emailid=$_POST['farmar_emailid'];
$farmar_city=$_POST['farmar_city'];
$farmar_code=$_POST['farmar_code'];
$password=$_POST['password'];

$sql="insert into farmar_details values('','$farmar_name','$farmar_add','$farmar_cno','$farmar_emailid','$farmar_city','$farmar_code')";
mysqli_query($con,$sql);
$sql1="insert into login values('$farmar_emailid','$password','farmer','Enter your Code','$farmar_code','Active')";
mysqli_query($con,$sql1);
?>

<script>
alert("Farmer is registered sucessfully...");
document.location="login.php";
</script>