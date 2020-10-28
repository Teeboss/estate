<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AD HOMES</title>
</head>
<body>
 <?php include("header.php");  ?>
 <br><br><br>
  <div class ="form_width" >
  <h2> ADMIN LOGIN </h2>
  <br><br><br>
      <form  id="upload" method= "post" enctype= "multipart/form-data" >
      <div class = "row">
       
        <div  class="form-group col-md-6">
            <label for="">USERNAME</label>
            <input type="text" name="admin" id="admin" placeholder="your username" class="form-control"  required>
        </div>
       
       </div>
        <div class="form-group col-md-6">
            <label for="">PASSWORD</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div><br><br>
       <button class="" id="submit">
							LOGIN
						</button>
    </form>
  </div><br><br><br>
   <br><br>
   <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>

  
 <script>

 $(document).ready(function() {


	  $("#submit").on("click", function(e) {
	    e.preventDefault()

	   var admin  =  $("#admin").val()
	   var password  =  $("#password").val()

	   if (admin == "") {
	   	alert("please input a  username")
	   } else if(password == "") {
	   alert("password field is empty")
	   } else {
	   	$.ajax({
	   		url: "controller.php",
	   		type: "POST",
	   	 //   dataType: "JSON",
		    data: "admin="+admin+"&password="+password,
	   		error: function () {
	   		alert("an error ocurred while trying to connect to the internet try again")
	   		},
	   		success: function (data) {
	         if (data == "false_user") {
	         	alert("this user is not registered as an admin ")
	         } else if (data == "false_password") {
	            alert("invalid password check and try again thanks")
	         } else {
	         	 location.replace("index.php?item=10&page=1")
	         }
	   		}
	   	})
	   }

	})


})


 </script>  
</body>
</html>