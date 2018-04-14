<?php
/*
@Page : contact.php
@Author : Renjith VR
@Author URL: https://renjithvr.in
@Date : Dec 18 2016
@Descrption: contact page.
*/

require_once("common/header.php");
// require_once "settings/recaptchalib.php";
?>
        <div class="container contact-body">
                <header class="bp-header cf">
                        <h2 class="bp-header__title">CONTACT ME</h2>
                        <p>
                </header>
                <h4 class="answers text-center">You can send messages from here! I will reply ASAP. If you want my other contacts(Skype or Hangout), please send a message from here.</h4>
                <span class="space2x"></span>
                <div class="row contact-form center-block">

                        <div class="text-center col-md-4 col-md-offset-4" id="panel">
                                <div class="contact-header"></div>
                                <form method="post" class="form-group">
                                        <div class="group">
                                                <input id="name" name="name" type="text" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Name</label>
                                        </div>
                                        <div class="group">
                                                <input id="email" name="email" type="email" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Email</label>
                                        </div>
                                        <div class="group">
                                                <input id="subject" name="subject" type="text" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Subject</label>
                                        </div>
                                        <div class="group">
                                                <input type="text" id="message" name="message" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Message</label>
                                        </div>
                                        <div class="group g-recaptcha" data-theme="dark" data-sitekey="6Ld9phYUAAAAAFig6OODmOfvIZ6Zy88SzaC_pM7E">
                                        </div>
                                        <div class="group">
                                                <div class="text-center"> <button name="sendMail" id="sendMail" type="submit" class="btn btn-danger">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button></div>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
        <!-- <div class="modal fade modal-skills" id="emailack" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body modal-spa">

				</div>
			</div>
		</div>
	</div> -->
        <!-- Modal -->
        <div class="modal fade modal-skills" id="emailack" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">message</h4>
                                </div>
                        </div>

                </div>
        </div>

<script type="text/javascript">
var onReturnCallback = function(response) {
    //alert('g-recaptcha-response: ' + grecaptcha.getResponse());
    var url='settings/recaptchalib.php?url=' + 'https://www.google.com/recaptcha/api/siteverify';
    $.ajax({ 'url' : url,
               dataType: 'json',
               data: { response: response},
               success: function( data  ) {
                var res = data.success.toString();
                        alert( "User verified: " + res);
                if (res ==  'true') {
                       document.getElementById('g-recaptcha').innerHTML = 'THE CAPTCHA WAS SUCCESSFULLY SOLVED';
                                }
                           } // end of success:
         }); // end of $.ajax
}; // end of onReturnCallback
</script>
<script src="js/contact.js"></script>
 <?php
 require_once("common/footer.php");
 ?>
