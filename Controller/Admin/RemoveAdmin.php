<?php


if (isset($_GET['index'])) {
            
              $id = $_GET['index'];

              $data = file_get_contents('../../Model/admin.json');
              $data = json_decode($data);
 
              unset($data[$id]);

             
            // $id = $_GET['index'];
			// $handle = fopen("../Model/product.json", "r");
			// $fr = fread($handle, filesize("../../Model/admin.json"));
			// $arr1 = json_decode($fr);
			// $fc = fclose($handle);

			 $handle = fopen("../../Model/admin.json", "w");
			// $arr2 = array();
			
			// for ($i = 0; $i < count($arr1); $i++) {
			// 	if ($id === $arr1[$i]->id) {
			// 		array_push($arr2, $arr1[$i]);
			// 	}
			// }
		

			 $data = json_encode($data);
			 $fw = fwrite($handle, $data);
			 $fc = fclose($handle);

             header("Location:../../View/Admin/Showadmin.php");

			
		
}
            function senitize($data)
            {
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
    
            }




?>