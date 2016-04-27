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
    <title>Sign In</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(img/clearsky.jpg) repeat;
        }
        #signin{
            margin: 5% auto 3% auto;
            width: 15%;
            height: 250px;
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
       input[type=password]{
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
            width: 82%;
        }
        input[type=submit]:hover {
            padding:5px 15px; 
            background:  #a6add8; 
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px; 
            margin: 10px;
            width: 82%;
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
        <div id="signin">

            <form method="post" action="signin.php">
            <table align="center" >
                <tr>
                    <td style="color:white;font-family: sans-serif;" align="center">Sign In</td>
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="Email" ></td>
                </tr>
                <tr>
                    <td></label><input type="password" name="password" placeholder="Password" ></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" value="Sign in" name="onsubmit" ></td>
                </tr>
                <tr>
                    <td align="center"><p style="text-decoration: none;font-family: sans-serif;">If You new Then <a href="signup.php">Register</a></p></td>
                </tr>
                <tr>
                    <td>
                                        <?php
                        include 'includes/dbconnection.php';
                        
                        if(isset($_POST['onsubmit'])){
                            
                            $email =$_POST['email'];
                            $password= $_POST['password'];
                            
                             $check_user="SELECT * FROM signup WHERE email='$email' AND password='$password'";
                             
                             $run1=mysqli_query($link,$check_user);
                             
                             
                         //    $sql="SELECT first_name FROM signup WHERE email='$email' limit 1";
                        //   $result = mysqli_query($link,$sql);
                           // $value = mysqli_fetch_field($result);
                          //$row = mysqli_affected_rows($result);
                             
                             if(mysqli_num_rows($run1)>0){
                                  echo "<script>window.open('userprofile.php','_self')</script>"; 
                                 $_SESSION['email']=$email;
                              //   $_SESSION['user_name']=$result;
                             }
 else {
                                 echo "<span  style='color:red; text-align: center;'>wrong email and password</span>";
 }
                        }
                        
                ?>

                    </td>
                </tr>
            </table>
            </form>
        </div>
 <div id="footer" > <?php include 'includes/footer.php';?> </div>
    </body>
</html>
