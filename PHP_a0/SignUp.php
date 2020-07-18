<?php
  include ("StoreAccount.php");
?>
<html>
  <head>
      <link rel="stylesheet" href="stylesheet.css">
      <script src="eScripts.js"></script>
  </head>
  <body>
  <div align="center">
    <div style= "margin-top:50px; width:500px; border: 2px inset #467fa8; border-radius:10px">
      <p style="text-align: left; margin-left:10px; font-size:25px; color:midnightblue"> Sign Up</p>
      <form action="" method="post">
        <label id= "lbl"> Username </label> <input style="margin-right: -52px;" type="text" id="tbox" name="u_name" required><br>
        <label id= "lbl"> Password </label>
          <input style="margin-right: -48px;" type="password" id="tbox" name="u_pass" required><br>
        <label id="lbl"> Re-type Password </label>
          <input oninput="check();" type="password" id="tbox" name="re-pass" required> <br>
          <span style="margin-left: 220px" id="message"></span><br>
        <input type="submit" id="sb" name="submit" value="Submit" disabled> <br>
      </form>
    </div>
  </div>
  </body>
</html>
