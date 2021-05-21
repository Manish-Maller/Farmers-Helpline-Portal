
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
                        <a href="department_details_form.php">Add New</a> <span class="divider"></span>
                    </li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                      <center>  <h4>Add New Department</h4></center>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form name="form1" method="post" action="department_details_insert.php" id="formID">
  <p>&nbsp;</p>
  <div align="center">
    <table width="565" border="0">
     
      </tr>
      <tr>
        <td>Department Name </td>
        <td><input name="department_name" type="text" id="department_name" class="validate[required,custom[onlyLetter]]"></td>
      </tr>
      <tr>
        <td>Department description</td>
        <td><input name="department_discreption" type="text" id="department_discreption" class="validate[required,custom[onlyLetter]]"></td>
      </tr>
      
    </table></br>
<input type="submit" name="Submit" value="Submit" class="btn btn-primary">
   <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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
