<?php include('metatag.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
	
<html>
<body>			               <!-- Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-home"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="class1_officerdetails_view.php">Class One Officer Details</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                     <li class="active">
                       Edit Class One Officer Details<span class="divider"><</span>
                    </li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                       <center> <h4>Class One Officer Details</h4></center>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

  <?php
include('config.php');
$id=$_REQUEST['id'];

  
$sql="select * from class1officer where class1officer_id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
include('val.php');
?>
<form name="form1" method="post" action="class1_officerdetails_update2.php" id="formID">
<input type="hidden" value="<?php echo $id; ?>" name="class1officer_id">
  <p>&nbsp;</p>
  <div align="center">
    <table width="504" height="260" border="0">
  
      <tr>
        <td>Class One Officer Name </td>
        <td><input name="class1_officername" type="text" id="class1_officername" class="validate[required,custom[onlyLetter]]" value="<?php echo $row['class1_officername'];?>"></td>
      </tr>
      <tr>
        <td>Class One Officer Desgnation</td>
        <td><input name="desgnation" type="text" id="desgnation"  class="validate[required,custom[onlyLetter]]" value="<?php echo $row['desgnation'];?>"> </td>
      </tr>
      <tr>
        <td>Contact Number </td>
        <td><input name="contact_number" type="text" id="contact_number"   class="validate[required,custom[onlyNumber]]" value="<?php echo $row['contact_number'];?>"></td>
      </tr>
      <tr>
        <td>Email Id </td>
        <td><input name="email_id" type="text" id="email_id"  class="validate[required,custom[email]]" value="<?php echo $row['email_id'];?>"></td>
      </tr>
      <tr>
        <td>Class One Officer Code </td>
        <td><input name="class1_officercode" type="text" id="class1_officercode" class="validate[required]" value="<?php echo $row['class1_officercode'];?>"></td>
      </tr>
     <tr>
        <td>Class One Officer Department</td>
        <td><?php
$result = mysqli_query($con, "SELECT department_name from department_details");
?>
<select name="class1officer_dept" class="validate[required]">
<option value="">select</option>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<option value=<?=$row['department_name'];?>><?=$row['department_name'];?></option>
<?php
$i++;
}
?></td>
      </tr>
    </table>

       <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
  </div>
  <p align="center">&nbsp;</p>
</form>
</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->

</body>
</html>	
			
<?php include('footer.php'); ?>