<?php
   
  if(htmlspecialchars($_SERVER['REQUEST_METHOD']==="POST")){
  
  $email=$_POST['email'];
  $password=$_POST['password'];
  

   if(empty($email) || empty($password))
      {
        echo "Field is required";
        
      }
      
      else
      {
        $email=senitize($email);
        $password=senitize($password);
        

       $val= file_get_contents("../../Model/Admin.json");
       $dec= json_decode($val,true);

        for($i=0; $i <count($dec); $i++)
        {
             if($email == $dec[$i]["email"] && $password == $dec[$i]["password"] )
             {
              
                //echo "login Successful";
                header("Location: ../../View/Admin/Profile.php");
                break;
             }
        }
         

     

}


function senitize($data)
    {
      $data=trim($data);
      $data=stripcslashes($data);
      $data=htmlspecialchars($data);
      return $data;

    }

?>