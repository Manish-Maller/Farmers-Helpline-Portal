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
                        <a href="class1_officerdetils_view.php">Class One Officer Details</a> <span class="divider"></span>
                    </li>
                    
              </ul>
                <!-- END Breadcrumb -->

                       
                  
         <!-- Table Options -->
                <div class="clearfix">
                   
                    
                </div>
				<br>
                <!-- END Table Options -->
   <table class="table table-bordered table-hover">  
   <thead>
    <tr>
   <th>Class One Officer Id</th>
    <th>Class One Officer Name</th>
      <th>Class One OfficerDesgnation</th>
      <th>Contact Number </th>
      <th>Email-Id </th>
      <th>Class One Officer Code</th>
     <th>Class One Officer Department</th>
    </tr>
	</thead>
	<tbody>
      <?php
include('config.php');
$sql="select * from class1officer";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res))
{
$id=$row['class1officer_id'];
?>
<tr>
<td><?php echo  $id;?></td>
<td><?php echo $row['class1_officername'];?></td>
<td><?php echo $row['desgnation'];?></td>
<td><?php echo $row['contact_number'];?></td>
<td><?php echo $row['email_id'];?></td>
<td><?php echo $row['class1_officercode'];?></td>
<td><?php echo $row['class1officer_dept'];?></td>	

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
