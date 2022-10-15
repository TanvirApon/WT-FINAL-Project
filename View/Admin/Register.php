<!DOCTYPE html>
<html>
  <head>

   <title>Register Form</title>

  </head>

  <body>      

 <?php include "../../includes/header.php" ;?>


       <fieldset>


        <center>

       
          <h3> <u>Register Here</u> </h3>

          <form action="" method="post">

          <table>
              <!-- First Name--->
               <tr>
                   <td><label><b>First Name:</b></label></td>
                <td>
                  <input type="text" name="user" placeholder="Enter First Name here" required>
                </td>
              </tr>

                
                    
              <!-- Last Name--->
               <tr>
                   <td><label><b>Last Name:</b></label></td>
                <td>
                  <input type="text" name="user" placeholder="Enter Last Name here"required>
                </td>
              </tr>
              
              

              <!-- User Name--->
               <tr>
                   <td><label><b>Username:</b></label></td>
                <td>
                  <input type="text" name="user" placeholder="Enter Username here"required>
                </td>
              </tr>
                 
                  

              <!-- Email-->

              <tr>
                 <td><label><b>Email:</b></label></td>
                 <td>

                   <input type="email" name="mail" placeholder="Enter email here" required>
                 </td>
               </tr>

                  
               
               <!-- Password--->
               <tr>
                   <td><label><b>Password:</b></label></td>
                <td>
                  <input type="password" name="user" placeholder="Enter Password here" required>
                </td>
              </tr>

              <br> 
              <!-- Confirm Password--->
               <tr>
                   <td><label><b>Confirm Password:</b></label></td>
                <td>
                  <input type="password" name="user" placeholder="Confirm Password here" required>
                </td>
              </tr>
              
                

               <!--Submit-->
                  <tr>
                   <td>
                    <input type="submit" name="submit" value="submit">
                   </td>
                   
                    <td>
                     Already a user?<a href="Login.php">Login Here</a>
                   </td>  
                 </tr>
                 
             </table>

       </form>
       </center>
       
       </fieldset>

 <?php include "../../includes/footer.php"; ?>


  </body>

</html>  
