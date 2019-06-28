<?php 
    include("dbconfig.php");
    session_start();
?>
<?php 
  
	
    if($_SESSION["name"]=="")
    {
        header("location:reg.php");

    }
?>

<?php 
  if(isset($_POST["submit_comment"]))
  {  
     error_log(print_r($_POST, true));
     $us_id=$_SESSION['uid'];
     $ps_id=$_POST['pid'];
     $comment=$_POST['comment'];
     $sql=mysqli_query($con,"insert into comments(post_id_c,user_id_c,comment,comment_time) 
     	values('$ps_id','$us_id','$comment',now());");    
	  // sla de post op en bewaar het resultaat in $sql
     if($sql)
     {
     	echo '<script>alert("comment inserted successfully..");</script>';
          header("location:project_description.php?id=$ps_id");
     }
  }

           


?>