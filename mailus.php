<?php
include("header.php");
include("model/DB.php");
?>
<div class="inner_sec_info_w3ls_agile">
				<div class="col-md-8 map">
					<iframe src="../../../../../../../external.html?link=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
					    style="border:0"></iframe>
				</div>
				<div class="col-md-4 contact_grids_info">
					<div class="contact_grid">
						<div class="contact_grid_right">
							<h4> OUR OFFICE </h4>
							<p>3-9 olukoleosho street ,
                            off medical road , ikeja
                              </p>
							<p>Lagos , Nigeria</p>
						</div>
					</div>
					<div class="contact_grid">
						<div class="contact_grid_right">
							<h4> mail us directly</h4>
						<a href="mailto:support@ABproperties.com">support@AB-homes.com</a>
						</div>
					</div>
					<div class="contact_grid" data-aos="flip-up">

						<div class="contact_grid_right">
							<h4>you can call us </h4>
						<a href="tel:+2348165798986">+2349024297804</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>

             <div class="mail_form">
				<h3 class="tittle mail">Send Us <span>a Message </span></h3>
				<div class="inner_sec_info_w3ls_agile">
					<form  method="post" id="contact_form">
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="name" type="text" id="name" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-13">
							<span class="input__label-content input__label-content--chisato" data-content="name">Name</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="email" type="email" id="email" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-14">
							<span class="input__label-content input__label-content--chisato" data-content="email">Email</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="subject" type="text" id="subject" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-15">
							<span class="input__label-content input__label-content--chisato" data-content="subject">Subject</span>
						</label>
						</span>
						<textarea name="message" id="message" placeholder="Your comment here..." required=""></textarea>
						<input type="submit" value="Submit">
					</form>

				</div>
			</div>
			<div class="clearfix"> </div>
			
<?php
include("footer.php");
?>

<script type="text/javascript">
				$(document).ready(function(){

                 
                 $("#contact_form").submit(function(e){
                   e.preventDefault()
                   $.ajax({
                   	url: "form_control.php",
                   	type: "POST",
                   	data: new FormData(this),
                   	processData: false,
                   	cache: false,
                   	contentType: false,
                   	error: function () {
                   		alert("there's an error connecting to the internet")
                   	}, 
                   	success: function (data) {
                   		alert(data)
                   	}
                   })
                 })

                  	

				})
</script>