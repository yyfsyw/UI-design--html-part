<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
            <title>Sign In</title>
            <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!--            <script>
            $(document).ready(function(){
                $("#register-form").validate({
                    rules:{
                        name:{
                            required:true,
                            minlength:6
                        }
                    }
                    messages:{
                        name:{
                            required : 'Please enter the total loyalty points you wish to apply to this ',
                            minlength : MAximum length
                        }
                    }
                });
            });
            </script>-->
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(img/bg.png) repeat;
        }
        #signin{
            margin: 20px auto 3% auto;
            width: 15%;
            height: 400px;
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
       </style>
    </head>
    <body>
         <div id="signin">

            <form id="register-form" novalidate="novalidate">
            <table align="center" action="main.php">
                <tr>
                    <td style="color:white;font-family: sans-serif;" align="center">Sign Up</td>
                </tr>
                <tr>
                    <td><input type="email" name="email" placeholder="Email" ></td>
                    
                </tr>

                <tr>
                    <td></label><input type="password" name="password" placeholder="Password" ></td>
                    
                </tr>

                <tr>
                    <td></label><input type="text" name="name" placeholder="First Name" ></td>
                    
                </tr>
                <tr>
                <tr>
                    <td></label><input type="text" name="name" placeholder="Last Name" ></td>
                    
                </tr>
                <tr>
                    <td></label><input type="text" name="text" placeholder="Phone Number" ></td>
                   
                </tr>
                <tr>
                    <td align="center"><input type="submit" value="Sign in" ></td>
                </tr>
                <tr>
                    <td align="center"><p href="#" style="text-decoration: none;font-family: sans-serif;">By clicking sign up yor are agree to our policy?</p></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>
