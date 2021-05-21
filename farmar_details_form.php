
 <?php
include('val.php');
	include('config.php');
	
	$sql="select max(farmar_id) as fid  from  farmar_details";
	$res=mysqli_query($con,$sql);	
	$result = $res->fetch_array();
	$fid = (intval($result[0]))+1;
	$code="FCODE".$fid;
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
  color: black;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #4CAF50;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
form button[type=reset] {
  width: 248px;
  margin-bottom: 0;
  color: black;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #f44336;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
    </style>  
    <script type="text/javascript" src="js/validation.js"></script>
		<script type="text/javascript"></script>
</head>
<body>
  <div id="bg"></div>

<form name="form1" method="post" action="farmar_details_insert.php" id="formID">
<center><h2>REGISTRATION FORM</h2>
   <input name="farmar_name" type="text" id="farmar_name" autofocus="" placeholder="Enter farmer name" class="email validate[required,custom[onlyLetter]]">
     
    <input type="text"  name="farmar_add" id="farmar_add" placeholder="Enter farmer address" class="email validate[required]">
   
   
     <input name="farmar_cno" type="text" id="farmar_cno" placeholder="Enter farmer contact number" class=" email validate[required,custom[mobile]]">
     <input name="farmar_city" type="text" id="farmar_city" placeholder="Enter farmer village/town name" class="validate[required,custom[onlyLetter]]">
    <h3>Your Farmer Code(Please Remember for future reference)</h3>
      <input name="farmar_code" type="text" id="farmar_code" value="<?php echo $code; ?>" readonly="" >
     
      <input name="farmar_emailid" type="text" id="farmar_emailid" placeholder="Enter farmer mail-id" class="email validate[required,custom[email]]">
      
     <input name="password" placeholder="Enter password" type="password" id="password" class="pass validate[required]">
      
          <button type="submit" >Register</button> </br>   </br>         
          
          <button type="reset">reset</button>
</form>
</body>

</html>