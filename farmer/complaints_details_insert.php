
<?php 
$fileTmpPath = $_FILES['attached_file']['tmp_name'];
$fileName = $_FILES['attached_file']['name'];
$uploadFileDir = '../complaint_attachments/';
$dest_path = $uploadFileDir . $fileName;
move_uploaded_file($fileTmpPath, $dest_path)
?>
<?php
include('config.php');
$compalint_name=$_POST['compalint_name'];
$farmar_id=$_POST['farmar_id'];
$class1officer_id=$_POST['class1officer_id'];
$compalint_discreption=$_POST['compalint_discreption'];
$compalint_date=$_POST['compalint_date'];

$sql="insert into complaint_details values('','$compalint_name','$farmar_id','$class1officer_id','$compalint_discreption','$compalint_date','Pending','$fileName')";

mysqli_query($con,$sql);
?>

<script>
alert("complaint_details inserted sucessfully");
document.location="complaints_details_view.php";
</script>