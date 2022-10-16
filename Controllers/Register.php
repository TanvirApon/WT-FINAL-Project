<?php
   
  if(htmlspecialchars($_SERVER['REQUEST_METHOD']==="POST")){
  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];


   if(empty($fname) || empty($lname)|| empty($gender)|| empty($email)|| empty($password)||empty($cpassword))
      {
        echo "Field is required";
        
      }
      
      else
      {
        $fname=senitize($fname);
        $lname=senitize($lname);
        $gender=senitize($gender);
        $email=senitize($email);
        $password=senitize($password);
        $cpassword=senitize($cpassword);


        if($password != $cpassword)
        {
  
           echo "Password & Confirm Password Doesn't Match";

        }


        else{

          
           $file = fopen("../Model/Admin/Admin.json", "r"); 

          $data = "";

    if (filesize("../Model/Admin/Admin.json") > 0) {

    $data = fread($file, filesize("../Model/Admin/Admin.json"));
 }

 fclose($file);

 $file = fopen("../Model/Admin/Admin.json", "w");  

 if (empty($data)) {
    $content = array(array( "$fname", "lname" => "$lname", "gender" => $gender, "email" => $email, "password" => $password, "cpassword" => $cpassword ));   
    $content = json_encode($content);
    fwrite($file, $content);  
}
 else {  
    $data = json_decode($data);
    $new_content = array( "$fname", "lname" => "$lname", "gender" => $gender, "email" => $email, "password" => $password, "cpassword" => $cpassword );
    $data[] = $new_content;
    $data = json_encode($data);
    fwrite($file, $data);
}

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