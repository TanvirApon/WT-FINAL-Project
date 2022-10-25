<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
</head>
<body>
 <?php include "Header.php"; ?>
 <?php include "Nav.php"; ?>
  <form action="../../Login.php" method="POST">
    <center>
      
      <fieldset style="text-align:center; height: 200px; width: 250px;">
      <legend>Login Here</legend>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Enter your Email"><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Enter your Password"><br><br>

    <input type="submit" name="login" value="Login">
    Didn't Register yet?<a href="Registration.php">Register Here</a>

   </fieldset>

    </center>
  </form>
  
<?php include "Footer.php"; ?>

</body>
</html>