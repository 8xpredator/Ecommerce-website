<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<?php include('header.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
	<br>
	<br>
	
        <h2><center>Contact Us</center></h2>
		<br>
		<br>
        <p>
            Send us your message and we will get back to you as soon as possible
        </p>
        <form role="form" method="post" id="reused_form">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname"  maxlength="50">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname"  maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="text" class="form-control" id="email" name="email"
                    maxlength="50">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required
                    maxlength="50">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name">
                        Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
                        <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs"><b>Contact <b></button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Sent your message successfully!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

        </div>
    </div>
</div>
<?php include('footer.php');?>
	

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>