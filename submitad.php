<html>
    <head>
        <title>Goody :: Submit Ad</title>
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
                margin-bottom: 0;
                width: 100%;
            }
            #form{
                margin-top: 50px;
                margin-bottom: 20px;
                height: 600px;
                background-color: #3bd9ef;
                width: 50%;
            
            background-color: #3bd9ef;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            }
           input[type=text] {
           width: 80%;
            padding:5px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 10px;
       }
       textarea[type=text] {
           width: 80%;
            padding:5px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 10px;
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
        select
        {
            display: inline-block;
            width: 150px;
            height: 30px;
            padding: 3px 6px;
            margin-bottom: 10px;
            font-size: 12px;
            line-height: 20px;
            color: #555555;
            vertical-align: middle;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            background-color: skyblue;
        }
        td{
            font-family: sans-serif;
            color: white;
        }
        td input{
            color: black;
        }
        td textarea{
            color: black;
        }
                </style>
    </head>
    <body>
        <?php include 'header.php';?> 
        
        <div id="form" class="container" align="center">
            <form method="post" enctype="multipart/form-data" action="signin.php">
            <table>
                 <tr>
                     <td colspan="2" align="center">Submit Ad</td>
                </tr>
                <tr>
                    <td>Ad Title*</td><td><input type="text" name="ad_title" placeholder="Title"></td>
                </tr>
                <tr>
                    <td>Ad Description*</td><td><textarea rows="3" cols="3" type="text" name="description"></textarea></td>
                </tr>
                <tr>
                    <td>Name*</td><td><input type="text" name="name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>Phone*</td><td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Full Address*</td><td><input type="text" name="address" placeholder="Address"></td>
                </tr>
                <tr>
                    <td>Zip Code*</td><td><input type="text" name="zipcode" placeholder="zip code"></td>
                </tr>
                <tr>
                    <td>Image</td><td align="center"><input type="file" name="imageupload" align="center"></td>
                </tr>
                <tr>
                    <td>Category*</td><td align="center">
                        <select name="ads">
                                    <option value="mobiles">Mobiles</option>
                                    <option value="electronics">Electronics & Appliances</option>
                                    <option value="car">car</option>
                                    <option value="bike">bike</option>
                                    <option value="furniture">Furniture</option>
                                    <option value="pets">Pets</option>
                                    <option value="books">Books, Sports & Hobbies</option>
                                    <option value="fashion">Fashion</option>
                                    <option value="kids">Kids</option>
                                    <option value="services">Services</option>
                                    <option value="houses">Houses , Land $ Appartment</option>
                     </select>
                    </td>
                </tr>
                <tr>
                    <td>State</td><td align="center"><input type="text" name="state" align="center"></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="frmsubmit" value="Submit"></td>
                </tr>
                
                
            </table>
        </form>
        
        
        </div>
        <div id="footer" > <?php include 'includes/footer.php';?> </div>
    </body>
</html>
<?php
            include 'includes/dbconnection.php';
            

            
            
            
                           if(isset($_POST['frmsubmit'])){
                           $image_name = $_FILES['imageupload']['name'];
                            $image_type = $_FILES['imageupload']['type'];
                           $image_size = $_FILES['imageupload']['size'];
                          $image_tmp = $_FILES['imageupload']['tmp_name'];

                        $target_dir = "dp/";
                         
                         $path = $target_dir . $image_name; 
                        
                       move_uploaded_file($image_tmp, $path);
                                echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
                               
                    $title=$_POST['ad_title'];
                    $description=$_POST['description'];
                    $name=$_POST['name'];
                    $phone=$_POST['phone'];
                    $address=$_POST['address'];
                    $zipcode=$_POST['zipcode'];
                    $path=$target_dir . $image_name;
                    $state=$_POST['state'];
                    $ads=$_POST['ads'];
                    
                  // $sql = "INSERT INTO ads (title, category, description, images, name, phone, state, zip) VALUES ($title, $ads, $description, $path, $name, $phone,$state, $zipcode)";
                                
                        }







?>