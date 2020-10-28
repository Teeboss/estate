<?php
include("header.php");
?>
<br><br><br>
<h3 class="tittle">Latest Properties</h3><br><br><br>

<?php

function timeline ($to , $nums) {

 if ($to <= $nums)
  return $to;
 else
   return $nums;
}

include("model/DB.php");
$page= $_GET['page'];
$item = $_GET['item'];

$pagination_from = $item * $page - ($item - 1);
$pagination_to = $item * $page;

$items = DB::query('SELECT * FROM uploads ORDER BY id DESC' , array());
$nums = count($items);
$count = $pagination_from;
$total = ceil($nums/$item);
while ($count <= timeline($pagination_to , $nums)) {
      $post = $items[$count - 1];
      $piid = str_shuffle(time().'gdgdhjrririrjwh');
      if ($post['type'] == "house") {
         $type = "Big Luxury House For Sale";
      } else if ($post['type'] == "shop")  {
        $type = "Shop for rents";
      } else if ($post['type'] == "land") {
        $type = "land for sale";        
      }
      echo " 
      <div class = 'back' >
      <div class='tab1'>
            <div class='tab_info'>
                <div class='col-md-6 rep-img'>
                    <img src= 'admin/image/".$post['image']."' alt='what the ' class='img-responsive'>
                </div>
                <div class='col-md-6 rep-text'>
                    <h4>".$post['description']."</h4>
                    <p>".$post['about']."</p>
                    <div class='service_text'>
                    <h5>$".$post['price']."</h5>
                        <h3>".$type."</h3>
                        <ul>
                            <li><i class='fa fa-star' aria-hidden='true'></i></li>
                            <li><i class='fa fa-star' aria-hidden='true'></i></li>
                            <li><i class='fa fa-star' aria-hidden='true'></i></li>
                            <li><i class='fa fa-star' aria-hidden='true'></i></li>
                            <li><i class='fa fa-star-half-o' aria-hidden='true'></i></li>
                        </ul>
                    </div>
                </div>
                <button><a href='single.php?postid=".$post['id']."'>learn more about this property</a></button>
                <div class='clearfix'> </div>
            </div>
        </div>
    </div>
      <br><br><br>
      ";
      $count = $count + 1;

  }







  if ($pagination_from == 1) {
    $pagination_from = $page + 1;
      echo "<div class ='pagination w-75 p-3'><a href='properties.php?item=10&page=".$pagination_from."'><button class = 'next_button'>Next</button></a></div>"." ";
     } else if ($pagination_from <  $total) {
    $pagination_from = $page + 1;
    $mfrom = $page - 1;
      echo "<div class='pagination w-75 p-3'><a href='properties.php?item=10&page=".$mfrom."'><button class = 'next_button'>Previous</button></a>"." "."<a href='properties.php?item=10&page=".$pagination_from."'><button class = 'next_button'>Next</button></a></div>"." " ;
     } else if ( $item >= $total ) {
     $mfrom = $page - 1;
     echo  "<div class='pagination w-75 p-3'><a href='properties.php?item=10&page=".$mfrom."'><button class = 'next_button'>Previous</button></a></div>" ;
     } 


?>

<?php
include("footer.php");
?>