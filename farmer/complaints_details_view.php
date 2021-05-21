
<?php include('metatag.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-home"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active">
                        <a href="complaints_details_view.php">Complaints Details</a> <span class="divider"></span>
                    </li>
                   
              </ul>
                <!-- END Breadcrumb -->

                      
                  
         <!-- Table Options -->
<div class="clearfix">
                    <a href="complaints_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Write New complaint</a>
                   
                </div>
              
				<br>
                <!-- END Table Options -->
   <table class="table table-bordered table-hover">  
   <thead>
  <tr>
    <th>Compalint Number</th>
    <th>Complaint Name </th>
    <th>Farmar Name </th>
    <th>Class One Officer Name</th>
    <th> Description </th>
    <th> Date</th>
    
    <th>Atttached Flie </th>
	<th> Status </th>
  </tr>
  </thead>
  <tbody>
    <?php
include('config.php');
$fmail=$_SESSION['uname'];

$sql="select * from  complaint_details cd,class1officer c, farmar_details fd where cd.farmar_id=fd.farmar_id and c.class1officer_id=cd.class1officer_id and fd.farmar_emailid='$fmail'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
$c_id=$row['compalint_id'];
$status=$row['compalint_status'];
?>
   <tr>
    <td><?php echo $c_id;?></td>
    <td><?php echo $row['compalint_name'];?></td>
    <td><?php echo $row['farmar_name'];?></td>
    <td><?php echo $row['class1_officername'];?></td>
    <td><?php echo $row['compalint_discription'];?></td>
    <td><?php echo $row['compalint_date'];?></td>
    <td><a href="../complaint_attachments/<?php echo $row['attached_file'];?>">Attached File</a></td>
   <td><a href="" <?php if($status=='Pending') { ?> class="btn btn-danger" <?php } ?> 
    <?php if($status=='Solved') {?> class="btn btn-success" <?php } ?> 
    <?php if($status=='Processing') {?> class="btn btn-primary" <?php }  ?>>
    <?php echo $status;?></a></td>
    

  </tr>
  <?php
  }
  ?>
</tbody>

  </table>
  </div>
            <!-- END Page Content -->
			
			 <script src="js/helpers/jquery.min.js"></script>
        <!-- ... but if something goes wrong get Jquery from local file -->
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

       
    </body>
</html>
<?php include('footer.php'); ?>
