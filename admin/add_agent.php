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
<?php
include("header.php");
?> 

	
<div class="form_width " >
  <h2>Add a new agent </h2>
  <br><br><br>
    <form  id="agent" method= "post" enctype= "multipart/form-data" >
        <div  class="form-group">
            <label for="">Agent name</label>
            <input type="text" value="" name="agent_name" id="agent_name" class="form-control" required>
       </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" name= "description" id="description" class="form-control" required>
        </div>
        <div class="form-inline">
        <div  class="form-group">
            <label for="">image</label>
            <input type="file" name= "image" id="image" class="form-control" required>
        </div>
        
            </div><br><br>
                    <div class="form-group "> 
                        <button id="submits" name="submits" class="btn btn-primary">upload</button> <br> <br>
                    </div>
    </form>
  </div><br><br><br>
  <h2>MY AGENTS</h2>
  <?php

function timeline ($to , $nums) {

 if ($to <= $nums)
  return $to;
 else
   return $nums;
}

include("../model/DB.php");
$page= $_GET['page'];
$item = $_GET['item'];

$pagination_from = $item * $page - ($item - 1);
$pagination_to = $item * $page;

$items = DB::query('SELECT * FROM agent ORDER BY id DESC' , array());
$nums = count($items);


while ($pagination_from <= timeline($pagination_to , $nums)) {
      $post = $items[$pagination_from - 1];
      echo "
      <div class='post_handler'><hr>
      <img src= '".'image/'.$post['image']."' alt= 'image ' class = 'img-responsive img-rounded post_img'><br>
      <div class='post_text'><span> ABOUT agent: ".$post['description']."</span>
      <br><span> AGent Name: ".$post['name']."</span>
      </div><hr>
      <br><br><br>
      </div>
      
      ";
      $pagination_from = $pagination_from + 1;

  }

?>
<script>
 var agent_form = document.getElementById("agent")


agent_form.addEventListener("submit" , function (e) {
    e.preventDefault()
    $.ajax({
        url: "../model/agent_controller.php",
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
<?php
include("footer.php");
?>
</body>
</html>






