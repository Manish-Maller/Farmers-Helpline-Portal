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
                        <a href="complaints_details_view.php">Complaints Details</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                   <li class="active">
                        <a href="complaints_details_form.php">Write New Complaint</a> <span class="divider"></span>
                    </li>
                </ul>
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                    <center>    <h4>Write New Complaint </h4></center>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<?php
include('config.php');
include('val.php');
$fmail=$_SESSION['uname'];
$sql="select farmar_id from farmar_details where farmar_emailid='$fmail'";
$res=mysqli_query($con,$sql);
$result = $res->fetch_array();
$fid = (intval($result[0]));
include('val.php');

?>

<form action="complaints_details_insert.php" method="post" id="formID" enctype="multipart/form-data" >
     <div align="center">
       <table width="499" height="355" border="0">
        
         <tr>
           <td width="92">Complaint Name </td>
           <td width="148"><input name="compalint_name" type="text" id="compalint_name"  class="validate[required]"></td>
         </tr>
         <tr>
           <td>Your Farmar Id </td>
           <td><input name="farmar_id" type="text" id="farmar_id" readonly="" class="validate[required]" value="<?php echo $fid;?> "> 
           </td>
         </tr>
         <tr>
           <td>Choose Class One Officer Id </td>
           <td><?php
$result = mysqli_query($con, "SELECT class1officer_id,class1officer_dept from class1officer");
?>
<select name="class1officer_id" class="validate[required]">
<option value="">select</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value=<?=$row["class1officer_id"];?>>  <?=$row["class1officer_id"];?>  <?=$row["class1officer_dept"];?></option>
<?php
}
?>
</select>
</td>
         </tr>
         <tr>
           <td>Complaint Description </td>
           <td><input name="compalint_discreption" type="text" id="compalint_discreption" class="validate[required]"></td>
         </tr>
         <tr>
           <td>Complaint Date</td>
           <td><input name="compalint_date" id="compalint_date" value="<?php echo date("d/m/Y");?>" readonly=""></td>
         </tr>
          
         <tr>
           <td>Atttached Flie </td>
           <td><input name="attached_file" type="file" id="attached_file"></td>
         </tr>
         
       </table>
<input type="submit" name="Submit" value="Submit" class="btn btn-primary">
<input type="reset" name="Reset" value="Reset" class="btn btn-danger">
   </div>
     <div align="center"></div>
</form>
</div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php'); ?>
