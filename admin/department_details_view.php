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
                        <a href="department_details_view.php">Department Details</a> <span class="divider"></i></span>
                    </li>
                    
              </ul>
                <!-- END Breadcrumb -->
 <div class="clearfix">
                   
                    <a href="department_details_form.php" class="btn btn-success"><i class="icon-plus"></i> Add New Department</a>
                </div>
                        
                  
         <!-- Table Options -->
               
				<br>
                <!-- END Table Options -->
   <table class="table table-bordered table-hover">  
   <thead>
  <tr>
    
    <th>Department Name </th>
    <th>Department discreption</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
  </thead>
  <tbody>
 <?php
include('config.php');
$sql="select * from  department_details";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
$d_id=$row['department_id'];
?>
  <tr>
   
    <td>&nbsp;<?php echo $row['department_name'];?></td>
    <td>&nbsp;<?php echo $row['department_discreption'];?></td>
    <td align="center"><a href="department_details_delete.php?d_id=<?php echo $d_id;?>"><i class="glyphicon-bin"></i></a></td>
    <td><a href="department_details_update1.php?d_id=<?php echo $d_id;?>"><i class="glyphicon-edit"></i></a></td>
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

