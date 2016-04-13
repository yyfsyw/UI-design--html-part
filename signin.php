<!DOCTYPE html>
<html>
    <head>
    <title>Sign In</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(img/bg.png) repeat;
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

    </style>
    </head>
    <body>
        
        <div id="signin">

            <form>
            <table align="center" action="main.php">
                <tr>
                    <td style="color:white;font-family: sans-serif;" align="center">Sign In</td>
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="Valid Email" ></td>
                </tr>
                <tr>
                    <td></label><input type="password" name="password" placeholder="Password" ></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" value="Sign in" ></td>
                </tr>
                <tr>
                    <td align="center"><p style="text-decoration: none;font-family: sans-serif;">If You new Then Register First</p></td>
                </tr>
            </table>
            </form>
        </div>

    </body>
</html>

