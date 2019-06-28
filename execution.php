<?php 
    include("dbconfig.php");
?>
<?php
    if(isset($_GET["yesdelete"]))
    {

         $del_id=$_GET["yesdelete"];
         // verwijder de notification

        
         if($result)
         {       echo '<script>alert("delete is gelukt");<script>';
                 header("location:notification.php");

         }

    }

?>