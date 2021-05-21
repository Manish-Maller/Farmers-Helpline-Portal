<?php
	session_start();
	$username=$_POST["username"];
	$password=$_POST["password"];	
	include('config.php');
	$sql="select * from login where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	if($row=mysqli_fetch_array($res))
	{
	$type=$row["type"];

	$_SESSION['uname']=$_POST['username'];
	

	if($type=="admin")
	{
	?>
	<script>
	document.location="admin/home.php";
	</script>
	<?php
	}
	
	else if($type=="farmer")
	{
	$fmail=$_POST['username']; 	
	$sql="select farmar_name from farmar_details where farmar_emailid='$fmail'";
	$res=mysqli_query($con,$sql);
	$result = $res->fetch_array();
	$_SESSION['fname']=$result[0];
	
	?>
	<script>
	document.location="farmer/home.php";
	</script>
	<?php
	}
	}

	else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	}
	?>