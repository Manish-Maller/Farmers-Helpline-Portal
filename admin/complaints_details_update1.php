<?php include('metatag.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
				               <!-- Pre Page Content -->

            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Class1 Officer Details</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">

  <?php
include('config.php');
$c_id=$_POST['c_id'];

$sql="select * from complaint_details where compalint_id='$c_id'");
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
include('val.php');

?>

<form action="complaints_details_update2.php" method="post" id="formID" >
<input type="hidden" value="<?php $_POST['complint_id'] ?>" name="compalint_id">

     <div align="center">
       <table width="256" border="1">
         <tr>
           <td colspan="2"><div align="center">Complaint Details</div></td>
         </tr>
         <tr>
           <td width="92">Complaints Name </td>
           <td width="148"><input name="compalints_name" type="text" id="compalints_name"  class="validate[required]">value="<?php echo $row['compalints_name']; ?>"></td>
         </tr>
         <tr>
           <td>Farmar Id </td>
           <td><input name="farmar_id" type="text" id="farmar_id" class="validate[required]">value="<?php echo $row['farmar_id']; ?>"></td>
         </tr>
         <tr>
           <td>Class1 Officer </td>
           <td><input name="class1officer_id" type="text" id="class1officer_id" class="validate[required]">value="<?php echo $row['class1officer_id']; ?>"></td>
         </tr>
         <tr>
           <td>Complaints Discreption </td>
           <td><input name="compalints_discription" type="text" id="compalints_discription" class="validate[required]">value="<?php echo $row['compalints_discription'];?>"></td>
         </tr>
         <tr>
           <td>Complaints Date</td>
           <td><input name="compalints_date" type="date" id="compalints_date" class="validate[required,custom[date]]"> value="<?php echo $row['compalints_date'];?>"></td>
         </tr>
         <tr>
           <td>Complaints Status </td>
           <td><input name="compalints_status" type="text" id="compalints_status" class="validate[required]"> value="<?php echo $row['compalints_status']?>"></td>
         </tr>
         <tr>
           <td>Atttached Flie </td>
           <td><input name="attached_file" type="file" id="attached_file" value="<?php echo $row['attached_file'];?>"></td>
         </tr>
         <tr>
           <td><input type="submit" name="Submit" value="Submit"></td>
           <td><input type="reset" name="Reset" value="Reset">
           </td>
         </tr>
       </table>
   </div>
     <div align="center"></div>
</form>
  <p align="center">&nbsp;</p>
<div align="center"></div>

   <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
</body>
</html>
<?php include('footer.php'); ?>