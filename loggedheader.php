<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: signin.php"); 
}  
  
?>
<!DOCTYPE html>
<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
<!--        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
</head>

    <div class="container" style="height: 70px;">
        <span ><a href="index.php"><img src="img/logo.png" alt="Goody"></a> </span> <span style="font-family: sans-serif;font-size: 20px;"> Exchange Every Thing Here</span>
        
        <a style="margin-left: 40%" class="btn btn-info">
            <?php
           
            include 'includes/dbconnection.php';

            $name = $_SESSION['email'];
            $sql="SELECT first_name FROM signup WHERE email='$name'";
             $result=mysqli_query($link,$sql);
               if(mysqli_num_rows($result)>0){
                   while($row=  mysqli_fetch_assoc($result)){
                       echo $row['first_name'];
                   }
               }  

?>
        </a><a href="logout.php" style="margin-left: 0" class="btn btn-info">Logout</a> <a href="submitad.php" style="margin-left: 0"  class="btn btn-success">Submit A Free Ad</a>
    </div>
</html>