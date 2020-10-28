<?php
   $errmessage = "";

   if (empty($_POST['agent_name'])) {
      $errmessage = " ";
   }else {
     $agent_name = $_POST['agent_name'];
   }
   

   if (empty($_POST['description'])) {
    $errmessage .= "add description to the property ";
   } else {
       $description = $_POST['description'];
   }

   if (empty($_FILES['image']['name'])) {
    $errmessage .= "please add image";
   } else {
   }
   $image = $_FILES['image']['name'];

   if ($errmessage == "") {
       include("DB.php");
     DB::query('INSERT INTO agent VALUES(\'\', :name , :description , :image)' , array(":name" => $agent_name, ":description" => $description, ":image"=>$image));
     $image_dir = '../admin/image/'.basename($image);
     move_uploaded_file($_FILES['image']['tmp_name'], $image_dir); 
     echo "success";
    } else {
        echo $errmessage;
    }
?>