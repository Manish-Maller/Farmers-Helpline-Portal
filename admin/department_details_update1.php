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
                        <a href="department_details_view.php">Department Details</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                   <li class="active">
                        Edit Department Details <span class="divider"></span>
                    </li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <center><h4> Edit Department Details </h4></center>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<?php
include('config.php');
$d_id=$_REQUEST['d_id'];
  

$sql="select *  from department_details   where department_id='$d_id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
include('val.php');

?>
<form name="form1" method="post" action="department_details_update2.php"id="formID">
<input type="hidden" value="<?php echo $d_id; ?>" name="department_id">

  <p>&nbsp;</p>
  <div align="center">
<table  border="0" >
      
      <tr>
        <td>Department Name </td>
        <td><input name="department_name" type="text" id="department_name"class="validate[required,custom[onlyLetter]]" value="<?php echo $row['department_name'];?>"></td>
      </tr>
      <tr>
        <td>Department discreption</td>
        <td><input name="department_discreption" type="text" id="department_discreption" class="validate[required,custom[onlyLetter]]"value="<?php echo $row['department_discreption'];?>"></td>
      </tr>
      
    </table>
<input type="submit" name="Submit" value="Submit" class="btn btn-primary">
  </div>
  <p align="center">&nbsp;  </p>
</form>
</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php'); ?>
