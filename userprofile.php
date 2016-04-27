
<html>
    <head>
        <title>Goody</title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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
            #profile{
                margin-top: 80px;
                height: 400px;
                background-color: white;
            }
            input[type=submit] {
            padding:5px 15px; 
            background: #0122de; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            margin: 10px;
            
        }
        input[type=submit]:hover {
            padding:5px 15px; 
            background:  #a6add8; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            margin: 10px;
            
        }



    </style>
    </head>
    <body>

<?php include 'loggedheader.php';?>
        <div id="profile" class="container">
           


            
        </div>

        
        
        <div id="footer" > <?php include 'includes/footer.php';?> </div>
    </body>
</html>
//<?php
//            include 'includes/dbconnection.php';
//            
//            
//            
//                        if(isset($_POST['upload'])){
//                             $image_name = $_FILES['imageupload']['name'];
//                            $image_type = $_FILES['imageupload']['type'];
//                           $image_size = $_FILES['imageupload']['size'];
//                          $image_tmp = $_FILES['imageupload']['tmp_name'];
//
//                        $target_dir = "dp/";
//                         $filename = $_FILES["imageupload"]["name"];
//                         $path = $target_dir . $filename; 
//                        
//                        move_uploaded_file($_FILES["imageupload"]["tmp_name"], $path);
//                                echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
//                               
//                      
//                        }




//        if(isset($_POST['upload'])){
//        $image_name = $_FILES['image']['name'];
//        $image_type = $_FILES['image']['type'];
//        $image_size = $_FILES['image']['size'];
//        $image_tmp = $_FILES['image']['tmp_name'];
//        }
//?>