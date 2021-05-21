<?php include('metatag.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php
	include('config.php');
	include('val.php');
	$sql="select max(class1officer_id) as cid  from  class1officer";
	$res=mysqli_query($con,$sql);	
	$result = $res->fetch_array();
	$cid = (intval($result[0]))+1;
	$code="COOCODE".$cid;
?>
			
				               <!-- Pre Page Content -->

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
<a href="class1_officerdetails_form.php">Add New</a> <span class="divider"></span>
                    </li>
                   
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <center> <h4>Add New Class One Office</h4></center>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

<form name="form1" method="post" action="class1_officerdetails_insert.php" id="formID">
  <p>&nbsp;</p>
  <div align="center">
    <table width="200" height="283" border="0">
      
      <tr>
        <td colspan="2">Class One Officer Name </td>
        <td><input name="class1_officername" type="text" id="class1_officername"   class="validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td colspan="2">Designation</td>
        <td><input name="desgnation" type="text" id="desgnation" class="validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td colspan="2">Contact Number </td>
        <td><input name="contact_number" type="text" id="contact_number"  class="validate[required,custom[onlyNumber]]"></td>
      </tr>
      <tr>
        <td colspan="2">Email Id </td>
        <td><input name="email_id" type="text" id="email_id" class="validate[required,custom[email]]"></td>
      </tr>
      <tr>
        <td colspan="2">Class One Officer Code </td>
        <td><input name="class1_officercode" type="text" id="class1_officercode" readonly="" value="<?php echo $code;?>"></td>
      </tr>
<tr>
        <td colspan="2">Class One Officer Department</td>
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
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
  </div>
  <p align="center">&nbsp;</p>
</form>
</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
<?php include('footer.php'); ?>
