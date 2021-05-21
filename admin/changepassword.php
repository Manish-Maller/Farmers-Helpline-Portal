<?php session_start(); ?>
<?php
include('config.php');
$op=$_POST['opas'];
$np=$_POST['npas'];
$cp=$_POST['cpas'];

$uname=$_SESSION['uname'];

$sql="select * from login where username='$uname' and Password='$op'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
if($np==$cp)
{
$sql1="update login set password='$np' where username='$uname'";
$res=mysqli_query($con,$sql1);
?>
<script>
alert("Password Changed sucessfully");
document.location="home.php";
</script>
<?php
}
else
{
?>
<script>
alert("Check Confim Password");
history.back();
</script>
<?php

}

}
else
{
?>
<script>
alert("Invalid Old Password");
history.back();
</script>
<?php
}

?>