<?php include('metatag.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="home.php"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="class1_officerdetails_form.php">Form</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        <h4>Farmer Details</h4>
                  
         <!-- Table Options -->
              
				<br>
                <!-- END Table Options -->
   <table class="table table-bordered table-hover">  
   <thead>
  <tr>
    <th>Farmer id</th>
    <th>Farmar Name</th>
    <th>Farmar Add </th>
    <th>Farmar Cno</th>
    <th>Farmar Emailid </th>
    <th>Farmar City</th>
    <th>Farmar Code </th>
<th>Delete</th>
<th>Edit</th>
 
  </tr>
  </thead>
  <tbody>
 <?php
include('config.php');
$sql="select * from  farmar_details";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
$id=$row['farmar_id'];
?>
  <tr>
    <td>&nbsp;<?php echo $id;?></td>
    <td>&nbsp;<?php echo $row['farmar_name'];?></td>
    <td>&nbsp;<?php echo $row['farmar_add'];?></td>
    <td>&nbsp;<?php echo $row['farmar_cno'];?></td>
    <td>&nbsp;<?php echo $row['farmar_emailid'];?></td>
    <td>&nbsp;<?php echo $row['farmar_city'];?></td>
    <td>&nbsp;<?php echo $row['farmar_code'];?></td>
   <td><a href="farmar_details_delete.php?id=<?php echo $id;?>">delete</a></td>
    <td><a href="farmar_details_update1.php?id=<?php echo $id;?>">Edit</a></td>
  </tr>
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



