<?php session_start(); ?>
<?php include('metatag.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
				               <!-- Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-home"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="farmar_details_view.php">Farmer Details</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                   <li class="active">
                        Edit Farmer Details <span class="divider"></span>
                    </li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <center><h4>Edit Farmer Details </h4></center>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content" align="center">
					<?php

include('config.php');

$id=$_REQUEST['id'];

$sql="select * from  farmar_details where farmar_id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
include('val.php');

?>

<form name="form1" method="post" action="farmar_details_update2.php"  id="formID">
<input type="hidden" value="<?php echo $id; ?>" name="farmar_id">
<table width="499" height="355" border="0" >
   
    <tr>
      <td width="96">Farmar Name</td>
      <td width="88"><input name="farmar_name" type="text" class="validate[required,custom[onlyLetter]]" id="farmar_name" value="<?php echo $row['farmar_name'];?>"></td>
    </tr>
    <tr>
      <td>Farmar Address </td>
      <td><input name="farmar_add" type="text" class="validate[required,custom[onlyLetter]]" id="farmar_add" value="<?php echo $row['farmar_add'];?>"> </td>
    </tr>
    <tr>
      <td>Farmar Contact Number</td>
      <td><input name="farmar_cno" type="text"class="validate[required,custom[mobile]]" id="farmar_cno" value="<?php echo $row['farmar_cno'];?>"> </td>
    </tr>
    <tr>
      <td>Farmar Email-id </td>
      <td><input name="farmar_emailid" type="text"class="validate[required,custom[email]]" id="farmar_emailid" value="<?php echo $row['farmar_emailid'];?>"> </td>
    </tr>
    <tr>
      <td>Farmar City </td>
      <td><input name="farmar_city" type="text"class="validate[required,custom[onlyLetter]]" id="farmar_city" value="<?php echo $row['farmar_city'];?>"> </td>
    </tr>
    <tr>
      <td>Farmar Code </td>
      <td><p>
          <input name="farmar_code" type="text" class="validate[required]" id="farmar_code" value="<?php echo $row['farmar_code'];?>">
          </p>
      </td>
    </tr>
    
  </table>
<input type="submit" name="Submit" value="Submit" class="btn btn-primary">
</form>

</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php'); ?>
