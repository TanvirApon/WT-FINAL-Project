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
        

       $val= read("../../Models/Admin/Admin.json");
        $dec= json_decode($readValue,true);

        for($i=0; $i <count($dec); $i++)
        {
             if($username == $dec[$i]["username"] && $password == $dec[$i]["password"] )
             {
              
                header("Location: ../../View/Admin/Admin.php");
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