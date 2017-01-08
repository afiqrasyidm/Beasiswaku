<?php
include_once 'database.php';
if(!isset($_SESSION["user_id"])){
							
		$user_id=$_SESSION["user_id"];
								
}
if(isset($_POST['motivasi']))
{    
 $motivasi = $_POST['motivasi'];
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 $conn = connectDB();

 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO tbl_uploads_pencari_beasiswa(user_id,motivasi,file,type,size) VALUES('$user_id','$motivasi','$final_file','$file_type','$new_size')";
  $result = mysqli_query($conn, $sql);;
  ?>
  
  <?php
 }
 else
 {
  ?>
  <?php
 }
}
?>