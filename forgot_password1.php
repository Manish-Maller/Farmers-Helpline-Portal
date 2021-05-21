<?php
include('config.php');
include('val.php');
 $uname=$_POST["username"];

$sql="select * from login where username='$uname'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
    $hintq=$row["hintq"];
	$hinta=$row["hint_answer"];
	$pwd=$row["password"];
?>
<html>
<head>
 <meta charset="UTF-8">
 <title>Farmer complaints management</title>
        <style>
      

body {
  background: #999;
  padding: 40px;
  font-family: "Open Sans Condensed", sans-serif;
}

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(images/reg.jpg) no-repeat center center fixed;
  background-size: cover;
     
}

form {
  position: relative;
  width: 280px;
  margin: 0 auto;
  background: rgba(255, 255, 255,.8);
  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4);
}

form input, form button {
  width: 248px;
  border: 1px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(1,1,1,.2);
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  letter-spacing: .075em;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 19px;
}

form input:focus { background-color: rgba(138, 231, 8, 0.87); }

form input.email {
  background-image: url(data:image/png);
background-color: rgba(14, 121, 138, 0.87);
  background-position: 260px 10px;
}

form input.pass {
  background-image: url(data:image/png);
background-color: rgba(14, 121, 138, 0.87);
  background-position: 248px 8px;
}

::-webkit-input-placeholder { color: #08E7D4;  }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }

form button[type=submit] {
  width: 248px;
  margin-bottom: 0;
  color: #3f898a;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #225556;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
    </style>
</head>
<body>
<div id="bg"></div>
				
<form id="formID" action="getpwd.php" method="post">
<center><h1>Please Enter Your Hint Answer.</h1></br>				
Hint Question: <?php echo " ".$hintq; ?>	
<input name="hintans1" autofocus="autofocus" type="text" id="hintans1" placeholder="Enter your answer" class="email validate[required]">
<input name="hintans" type="hidden" id="hintans" value="<?php echo $hinta; ?>">
<input name="pwd" type="hidden" id="pwd" value="<?php echo $pwd; ?>">
<button type="submit" >Get Password</button>						
</form>
</body>
</html>
<?php		
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username");
document.location="login.php";
</script>
<?php
}
?>

