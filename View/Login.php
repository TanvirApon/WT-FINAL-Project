<!DOCTYPE html>
<html>
  <head>

   <title>Login Form</title>

  </head>

  <body>      

     <?php 

     include "../includes/header.php";

     ?>


        <center>

         <fieldset>
          <h3> <u>Login Here</u> </h3>

          <form action="" method="post">

        
              <table>

              <!-- Login--->
               <tr>
                   <td><label><b>Email:</b></label></td>
                <td>
                  <input type="text" name="user" required>
                </td>
              </tr>

              <!--Password-->
                  <tr>
                     <td><label><b>Password:</b></label></td>
                   <td>
                    <input type="password" name="pass" required>
                   </td>
                 </tr>
  

               <!--Submit-->
                  <tr>
                   <td>
                    <input type="submit" name="submit" value="Login">
                   </td>
                    <td>
                     Not yet a Member?<a href="Register.php">Register</a>
                   </td>
                   
                 </tr>
                 
             </table>

       </form>
       </center>
       </fieldset>

  <?php include "../includes/footer.php"; ?>


  </body>

</html>  
