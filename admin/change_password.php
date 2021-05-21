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
                    <li class="active">
                        <a href="change_password.php">Change Password</a> <span class="divider"></span>
                    </li>
                    
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <center><h4>Set New Password</h4></center>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">


<form name="form1" method="post" action="changepassword.php" id="formID">
<div align="center">
  <table >
    
    <tr>
      <td >Old Password </td>
      <td >
        <input name="opas" type="text" id="opas">
      </td>
    </tr>
    <tr>
      <td>New Password </td>
      <td>
        <input name="npas" class="validate[required]" type="text" id="npas">
     </td>
    </tr>
    <tr>
      <td height="42">Confirm Password</td>
      <td>
        <input name="cpas" class="validate[required]" type="text" id="cpas">
      </td>
    </tr>
    <tr>
      <td>
        
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary"></td>
<td><input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
      
    </tr>
  </table>
  </div>
     <div align="center"></div>
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