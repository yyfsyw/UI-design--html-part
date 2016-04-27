<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
            <title>Sign Up</title>
            
            
            <script>
        function validateForm() {
            var x = document.getElementById('emailvalidator').value;
            
            
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (x == null || x == "" && atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                document.getElementById('emailerror').innerHTML="Enter the valid email address";
                return false;
            }
            
            var y = document.getElementById('passwordvalidator').value;
            if(y == null || y == "" && y.length > 7 ){
                document.getElementById('passworderror').innerHTML="Enter the the 7 or above character";
                return false;
            }
            
            var n1 = document.getElementById('namevalidator1').value;
            
            if(n1 == null || n1 == "" ){
                document.getElementById('nameerror').innerHTML="You can not leave name fields null";
                return false;
            }
            var n2 = document.getElementById('namevalidator2').value;
            if(n2 == null || n2 == "" ){
                document.getElementById('nameerror').innerHTML="You can not leave name fields null";
                return false;
            }
            var num = document.getElementById('num').value;
            if(num == null || num == "" ){
                document.getElementById('numerror').innerHTML="Enter Phone no";
                return false;
            }
            }
        
            </script>

    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(img/clearsky.jpg) repeat;
        }
        #signup{
            
            margin: 20px auto 3% auto;
            width: 24%;
            
            background-color: #3bd9ef;
            -webkit-border-radius: 5px;
            border-radius: 5px;

       }
       input[type=email] {
           width: 80%;
            padding:5px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 10px;
       }
       input[type=password] {
           width: 80%;
            padding:5px; 
            border:2px solid #ccc; 
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 10px;
       }
       input[type=text] {
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
            width: 50%;
        }
        input[type=submit]:hover {
            padding:5px 15px; 
            background:  #a6add8; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            margin: 10px;
            width: 50%;
        }
                #footer{
                position: absolute;
                bottom: 0;
                width: 100%;
            }
       </style>
    </head>
    <body>
        <?php include 'header.php';?>
         <div id="signup">
             
             <form id="register-form" novalidate="novalidate" onsubmit="return validateForm()" method="post">
            <table align="center" action="main.php">
                <tr>
                    <td style="color:white;font-family: sans-serif;" align="center">Sign Up</td>
                </tr>
                <tr>
                    <td><input type="email" id="emailvalidator"  name="email" placeholder="Email" ></td>
                    
                </tr>

                <tr>
                    <td></label><input type="password" id="passwordvalidator" name="password" placeholder="Password" ></td>
                    
                </tr>

                <tr>
                    <td></label><input type="text" id="namevalidator1" name="f_name" placeholder="First Name" ></td>
                    
                </tr>
                <tr>
                <tr>
                    <td></label><input type="text" id="namevalidator2" name="l_name" placeholder="Last Name" ></td>
                    
                </tr>
                <tr>
                    <td></label><input type="text" id="num" name="number" placeholder="Phone Number" ></td>
                   
                </tr>
                <tr>
                    <td align="center"><input type="submit" name="submit" value="Sign in" ></td>
                </tr>
                <tr>
                    <td align="center"><p href="#" style="text-decoration: none;font-family: sans-serif;">By clicking sign up yor are agree to our policy?</p></td>
                </tr>
            </table>
            </form>
             <table>
                 <tr>
                     <td><span id="emailerror" style="color:red;"></span><td>
                 </tr>
                 <tr>
                     <td><span id="passworderror" style="color:red;"></span><td>
                 </tr>
                     <td><span id="nameerror" style="color:red;"></span><td>
                 </tr>                 <tr>

                 <tr>
                     <td><span id="numerror" style="color:red;"></span><td>
                 </tr>
                  <tr>
                              <td><span id="numerror" style="color:red;">
                         <?php 
        include 'includes/dbconnection.php';
        
        if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $number = $_POST['number'];
        
        $e_query = "SELECT * FROM signup WHERE email = '{$email}'";
        $run_e_query = mysqli_query($link,$e_query);
        
        if (mysqli_num_rows($run_e_query) > 0 )
        {
            /* Username already exists */
            echo 'This User is already exist';
        }
        else{
            $inser_query = "INSERT INTO signup (email, password, first_name, last_name,phone) VALUES ('$email','$password','$f_name','$l_name','$number')";
                    if (mysqli_query($link, $inser_query)) {
                    echo "<h4 style='color:green'>Register Succesfully</h4>";
                    echo "<script>window.open('userprofile.php','_self')</script>";
                            }                   
                        else {
                            echo "Error: ". mysqli_error($inser_query);
                    }
        }
        }
?>
                          </span><td>
                 </tr>
             </table>
             
        </div>
        <div id="footer" > <?php include 'includes/footer.php';?> </div>
    </body>
</html>
