<?php

 session_start([
            'cookie_lifetime' => 86400,
              ]);
//header("location: index.php");
 if (!$_SESSION['admin']) {
   header("location: login.php");
 } else
include("controller.php");
  $userid = $_SESSION['admin'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AB HOMES</title>
</head>
<body>
 <?php include("header.php");  ?>
 <br><br><br>
  <div class ="form_width" >
  <h2>Add a new property </h2>
  <br><br><br>
      <form  id="upload" method= "post" enctype= "multipart/form-data" >
      <div class = "form-row">
        <div  class="form-group col-md-6">
            <label for="">Property type</label>
            <select type="text" name= "property_name" id="property_name" required  data-error = "please"  class="form-control" >
            <option value="house">House</option> 
            <option value="shop">Shop</option> 
            <option value="land">land</option> 
            </select>
        </div>
        <div  class="form-group col-md-6">
            <label for="">price</label>
            <input type="numbers" name= "price" id="price" class="form-control"  required>
        </div>
       
    </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name= "description" id="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">ABOUT this property</label>
            <textarea name= "about" id="about" class="form-control" required></textarea>
        </div>
        <div class="form-inline">
        <div  class="form-group">
            <label for="">image</label>
            <input type="file" name= "image" id="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Location</label>
           <select name="location" id="location" required class="form-control">
           <option value="">choose a location</option>
           <option value="lagos">lagos</option>
           <option value="Abuja">Abuja</option>
           <option value="Rivers">Rivers</option>
           <option value="Kano">Kano</option>
           </select>
        </div><br><br>
        <div class="form-group">
            <label for="">city</label>
            <input type="text" name="city" id="city" class="form-control">
        </div>
   </div><br><br>
        <div class="form-group "> 
            <button id="submit" name="submit" class="btn btn-primary">upload</button> <br> <br>
        </div>
    </form>
  </div><br><br><br>
  <h3 class="tittle">RECENT UPLOADS</h3>
   <br><br>
   <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>

   <?php

   function timeline ($to , $nums) {

    if ($to <= $nums)
     return $to;
    else
      return $nums;
  }
  
   $page = $_GET['page'];
   $item = $_GET['item'];

   $pagination_from = $item * $page - ($item - 1);
   $pagination_to = $item * $page;

   $items = DB::query('SELECT * FROM uploads ORDER BY id DESC' , array());
   $nums = count($items);
    $count = $pagination_from;
   while ( $count <= timeline($pagination_to , $nums)) {
         $post = $items[$count - 1];
         $piid = str_shuffle(time().'gdgdhjrririrjwh');
         $piids = str_shuffle(time().'gdgdhjrririrjwh');
         echo "
         <div class='post_handler'><hr>
         <img src= '".'image/'.$post['image']."' alt= 'image ' class = 'img-responsive img-rounded post_img'><br>
         <button class='btn btn-danger' value='".$post['id']."' onclick=' javascript: var datas= $(this).val();  $.ajax({url: \"../model/controller.php\" , type: \"POST\" , data: {datas : datas } ,error: function (error){alert(error);}, success: function (data) { alert(data);}});'>DELETE</button>
              <button class='btn btn-warning' value='".$post['id']."' id='".$post['id']."' onclick =' javascript:  if ($(\"#".$piid."\").attr(\"data\") == \"no\") { $(\"#".$piid."\").css(\"display\" , \"block\" ).slideDown(); $(\"#".$piid."\").attr(\"data\", \"yes\"); } else { $(\"#".$piid."\").css(\"display\" , \"none\" ).slideUp(); $(\"#".$piid."\").attr(\"data\", \"no\"); }'>Add more images</button>
              <div  id='".$piid."'  style='display: none;' data = 'no'><br><br><form method = 'post' enctype = 'multipart/form-data' id = '".$piids."' > <input value = '".$post['id']."' id='multiple' name='multiple' type='hidden' ><input type='file' name='files[]' id='files' class='form-control' style='width:inherit;' multiple><br><button class=' btn btn-success'>UPLOAD</button></form></div>
              <br><br>
         <div class='post_text'><span> DESCRIPTION: ".$post['description']."</span>
         <br><span> ABOUT PROPERTY: ".$post['about']."</span>
         <br><span> PRICE: $".$post['price']."</span>
         <br><span> LOCATION: ".$post['location']."</span>
         <br><span> PROPERTY TYPE : ".$post['type']."</span>
         </div><hr>
         <br><br>
         </div>
         ";
        
         ?>
    <script>

$("#<?php echo $piids; ?>").submit(function(e){
         e.preventDefault()
        var  multiple = $("#ltiplessmu").val();
        var  multiple_file = $("#multiple_file_id").val();
        $.ajax({ url: "../model/controller.php" , 
        type: "POST" ,
        data: new FormData(this),
        contentType: false,
        cache: false, 
        processData: false,
        success: function (data) { 
             alert(data)
             location.reload()
             } 
    })
})
</script>
   <?php
  $count = $count + 1;
 
  } 

if ($pagination_from == 1) {
    $pagination_from = $page + 1;
      echo "<div class ='pagination w-75 p-3'><a href='index.php?item=10&page=".$pagination_from."'><button class = 'btn'>Next</button></a></div>"." ";
     } else if ($pagination_from <= timeline($pagination_to , $nums)) {
    $pagination_from = $page + 1;
    $mfrom = $page - 1;
      echo "<div class='pagination w-75 p-3'><a href='index.php?item=10&page=".$mfrom."'><button class = 'btn'>Previous</button></a>"." "."<a href='index.php?item=10&page=".$pagination_from."'><button class = 'btn'>Next</button></a></div>"." " ;
     } else {
     $mfrom = $page - 1;
     echo  "<div class='pagination w-75 p-3'><a href='index.php?item=10&page=".$mfrom."'><button class = 'btn'>Previous</button></a></div>" ;
     } 

   ?>
 <?php include("footer.php"); ?> 
 <script>


 var form = document.getElementById("upload")
form.addEventListener("submit" , function (e) {
    e.preventDefault()
    $.ajax({
        url: "../model/form_controller.php",
        type: "POST",
        data: new FormData(this),
        processData: false,
        cache: false,
        contentType: false,
        error: function name(params) {
            alert("could not connect");
        },
        success: function (data) {
            if (data ==  "success") {
                location.reload()
            } else {
                alert(data)
            }
        }
    })	
})


 </script>  
</body>
</html>