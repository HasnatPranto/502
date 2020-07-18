<?php
    include('LogCred.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <div align="center">
            <div style= "margin-top:50px; padding-bottom:5px;  width:500px; border: 2px inset #467fa8; border-radius:10px">
                <p style="text-align: left; margin-left:10px; font-size:25px; color:midnightblue"> Log in to your account</p>
                <form action="" method="post">
             <label id= "lbl"> Username </label> <input type="text" id="tbox" name="u_name" required><br>
             <label id= "lbl"> Password </label> <input type="password" id="tbox" name="u_pass" required><br>
             <input type="submit" id="sb" name="submit" value="Log In"> <br>
             <a href="SignUp.php" id="lnk">Create a new Account</a><br>
                </form>
            </div>
        </div>
    </body>
</html>