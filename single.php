<?php
include("header.php");
include("model/DB.php");
?>

<?php
if (isset($_GET['postid'])) {

$postid = $_GET['postid'];

$post = DB::query('SELECT * FROM uploads WHERE id = :post', array(':post'=>$postid))[0];
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
              <img src= 'admin/image/".$post['image']."' alt='' class='img-responsive'>
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
          <div class='clearfix'> </div>
      </div>
  </div>
</div>
<br><br><br>
"; ?>
<?php
$post_images = DB::query('SELECT * FROM multiple WHERE postid = :post', array(':post'=>$postid));
$piids = str_shuffle(time()."yuhruireiurejkdsjdjhkfjf");
   $table =    "<div class='rowsmi'  id='".$piids."' >";

foreach ($post_images as $pst_img) {

   $table .= "
        <img src='admin/image/".$pst_img['image']."' id = '".$piids."' class='columnsmi' onclick='javascript: var images = document.getElementById(\"image\");    images.src = this.src; image.parentElement.style.display = \"block\";'>
    
   ";
}
$table .= "</div>";
echo $table;
 //  echo <div class='container'><img id='image' style='width: 80%;'></div>;
}

?>
 <div id="myModal" class="modal">
  <span class="close" id="close">&times;</span>
  <img class="modal-content" id="image">
  <div id="caption"></div>
</div>
 

<script type="text/javascript">
 var x =  document.getElementById("close");
 x.onclick = function (){
  document.getElementById("myModal").style.display = "none"
 }

</script>

<?php
include("footer.php");
?>