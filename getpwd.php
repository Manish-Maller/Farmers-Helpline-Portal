<?php
error_reporting(0);
include('config.php');
$uname=$_REQUEST["username"];
 $hintans=$_POST["hintans"];
 $hintans1=$_POST["hintans1"];
 $pwd=$_POST["pwd"];
if($hintans==$hintans1)
{
?>
<script type="text/javascript">
alert("Your password is : <?php echo $pwd;?>");
 
document.location="login.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Wrong Hint Answer try again");
document.location="forgot_password.php";
</script>
<?php

}
?>