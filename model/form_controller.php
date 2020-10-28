<?php
   $errmessage = "";

   if (empty($_POST['price'])) {
      $errmessage = "price input can't be empty ";
   }else {
     $price = $_POST['price'];
   }
   

   if (empty($_POST['description'])) {
    $errmessage .= "add description to the property ";
   } else {
       $description = $_POST['description'];
   }

   if (empty($_POST['about'])) {
    $errmessage .= "add about  to the property ";
   } else {
       $about = $_POST['about'];
   }


   if (empty($_POST['location'])) {
    $errmessage .= "please don't forget add location to the property ";
   } else {
       $location = $_POST['location'];
   }


   if (empty($_POST['city'])) {
    $errmessage .= "please add city";
   } else {
       $city = $_POST['city'];
   }


   if (empty($_FILES['image']['name'])) {
    $errmessage .= "please add image";
   } else {
   }
   $image = $_FILES['image']['name'];

   $property_name = $_POST['property_name'];
   if ($errmessage == "") {
       include("DB.php");
     DB::query('INSERT INTO uploads VALUES(\'\', :type , :description , :about ,  \'1\' , :price , :location , :image)' , array(":type" => $property_name, ":description" => $description, ":about" => $about ,  ":price" =>  $price , ":location"=> $location, ":image"=>$image));
     $image_dir = '../admin/image/'.basename($image);
     move_uploaded_file($_FILES['image']['tmp_name'], $image_dir); 
     echo "success";
    } else {
        echo $errmessage;
    }
?>