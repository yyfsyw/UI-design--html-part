<?php
// Start the session
session_start();
if(isset($_SESSION['email'])){
    header("Location: userprofile.php");
}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Goody</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- css library -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <script>
//         $(document).ready(function() {
//            $("#signin").click(function(){
//                $('#signcontainer').fadeOut('slow',function (){
//                    $('#signcontainer').load('signin.php',function (){
//                        $('#signcontainer').fadeIn('500');
//                });
//               
//                    
//               } );
//              
//            });
//         });
//         $(document).ready(function() {
//            $("#signup").click(function(){
//                $('#signcontainer').fadeOut('slow',function (){
//                    $('#signcontainer').load('signup.php',function (){
//                        $('#signcontainer').fadeIn('500');
//                });
//               
//                    
//               } );
//              
//            });
//         });
        </script>
              <script>
//                x=0;
//                function bg(){
//                     setInterval(function(){ 
//                    
//                    getElementById('bodybg').style.backgroundPosition =x+'% ' + '0px';
//                    x++;
//                     
//    }, 1000);}
                
                
                
                

            </script>
        <style>
            body{
                margin: 0;
                padding: 0;
                background: url(img/clearsky.jpg) repeat;
                
            }
            #footer{
                position: absolute;
                bottom: 0;
                width: 100%;
            }
            #bodybg{
                
                height:650px; 
                background:url(img/cloud-bg.png) repeat; 

            }
 </style>
    </head>
    <body>

         <?php include 'header.php';?>    
        
        
       
        <div id="signcontainer"></div>
        <div id="footer" > <?php include 'includes/footer.php';?> </div>
       

    </body>
</html>

