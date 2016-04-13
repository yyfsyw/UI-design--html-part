<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Goody</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
         $(document).ready(function() {
            $("#signin").click(function(){
               $('#signcontainer').load('signin.php');
            });
         });
         $(document).ready(function() {
            $("#signup").click(function(){
               $('#signcontainer').load('signup.php');
            });
         });
        </script>
        <style>
            body{
                margin: 0;
                padding: 0;
                background: url(img/bg.png) repeat;
            }
            #footer{
                position: absolute;
                bottom: 0;
                width: 100%;
            }
 </style>
    </head>
    <body>
        <div><?php include 'includes/headerr.php';?></div>
        <div><?php include 'includes/header.php';?></div>
       
        <div id="signcontainer"></div>
        <div id="footer"> <?php include 'includes/footer.php';?> </div>
    </body>
</html>
