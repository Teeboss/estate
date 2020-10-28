<?php
    include("DB.php");

// echo "ok it's working fine";

if (isset($_POST['datas'])) {
    $postid = $_POST['datas'];
    DB::query('DELETE FROM uploads WHERE id = :postid ',  array(':postid' => $postid));
    DB::query('DELETE FROM multiple WHERE postid = :postid ',  array(':postid' => $postid));
    echo "deleted";
}


if (isset($_POST['multiple'])) {
   $multiple = $_POST['multiple'];
   $image_path = '../admin/image/';

   foreach ($_FILES['files']['name'] as $key => $value) {
    $image = $_FILES['files']['name'][$key];
    DB::query('INSERT INTO multiple VALUES (\'\' , :image , :postid )', array(':image'=>$image , ':postid'=>$multiple));
    move_uploaded_file($_FILES['files']['tmp_name'][$key] , $image_path.basename($_FILES['files']['name'][$key]));
    
 }
 echo "yes";
} else {
    echo "no";
}

?>