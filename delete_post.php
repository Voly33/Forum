<?php 
 session_start();
 include("dbconfig.php");
if($_SESSION['name']=='')
  {
     header('location:reg.php');
  }

?>

<?php 

 	
 	


 if(isset($_GET['pid']))
 {  
 	$ps_id=$_GET['pid'];
 	// verwijder de post
        $sql3= mysqli_query($con,"delete from posts where post_id='$ps_id'");
		
       
      if($sql3)
      {
    	header("location:my_task.php");
                echo '<script>alert("post deleted successfully..");</script>';

      }

 }

?>