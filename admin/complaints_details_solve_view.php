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
                        <a href="complaints_details_solve_view.php">Solved Complaints Details</a> <span class="divider"></span>
                    </li>
                    
              </ul>
                <!-- END Breadcrumb -->

                     
                  
         <!-- Table Options -->
              
				<br>
                <!-- END Table Options -->
   <table class="table table-bordered table-hover">  
   <thead>
  <tr>
   
    <th>Complaint Name </th>
    <th>Farmar Code </th>
    <th>Class One Officer </th>
    <th> Description </th>
    <th> Date</th>
    
    <th>Atttached Flie </th>
	<th> Status </th>
	
	
    <th>Delete</th>

  </tr>
  </thead>
  <tbody>
      <?php
include('config.php');

$sql="select * from  complaint_details cd, farmar_details fd,class1officer c where cd.farmar_id=fd.farmar_id and cd.class1officer_id=c.class1officer_id and cd.compalint_status='Solved'";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
$c_id=$row['compalint_id'];
$status=$row['compalint_status'];
?>
   <tr>
    
    <td>&nbsp;<?php echo $row['compalint_name'];?></td>
    <td>&nbsp<?php echo $row['farmar_name'];?></td>
    <td>&nbsp;<?php echo $row['class1_officername'];?></td>
    <td>&nbsp;<?php echo $row['compalint_discription'];?></td>
    <td>&nbsp;<?php echo $row['compalint_date'];?></td>
<td>&nbsp;<a href="../complaint_attachments/<?php echo $row['attached_file'];?>">Attached File</a></td>
    <td>&nbsp;<a href="#" <?php if($status=='Pending') { ?> class="btn btn-danger" <?php } ?> 
    <?php if($status=='Solved') {?> class="btn btn-success" <?php } ?> 
    <?php if($status=='Process') {?> class="btn btn-primary" <?php }  ?>>
    <?php echo $status;?></a></td>
    
    <td>&nbsp;<a href="complaints_details_delete.php?c_id=<?php echo $c_id;?>"><i class="glyphicon-bin"></i></a></td>

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
