var contact={
	init:function(){
		this.sendMail();
	},
        sendMail:function(){
                $('form').on('submit', function(e) {

                        if($("input[name=name]").val())
                        {
                                var name = $("input[name=name]").val();
                                name = name.trim();
                        }

                        if($("input[name=email]").val())
                        {
                                var email = $("input[name=email]").val();
                                email = email.trim();
                        }


                        if($("input[name=subject]").val())
                        {
                                var subject = $("input[name=subject]").val();
                                subject = subject.trim();
                        }

                        if($("input[name=message]").val())
                        {
                                var message = $("input[name=message]").val();
                                message = message.trim();
                        }

			if(grecaptcha.getResponse() == "")
			{
			   var captchaerror = "You can't proceed without CAPTCHA validation"
			   e.preventDefault();
			   $(".modal-title").html("");
			   $(".modal-title").html(captchaerror);
			   $('#emailack').modal('show');
			   return false;
			 }

                        if((name !=  "") && (email !=  "") && (subject !=  "") && (message !=  ""))
                        {
				var data = {};
				data['name'] = name;
				data['email'] = email;
				data['message'] = message;
				data['subject'] = subject;
				console.log(data);
                                $.ajax({
				type:"POST",
				url:"settings/email.php",
				data:data,
				success:function(data){
					console.log(data);

					if(data.success)
					{
						var message = "Email sent successfully";
						$(".modal-title").html("");
						$(".modal-title").html(message);
						$('#emailack').modal('show');
					}
					else
					{
						var message = "Email not send";
						$(".modal-title").html("");
						$(".modal-title").html(message);
						$('#emailack').modal('show');
						return false;
					}
				},
				error:function(xhr, status, errorThrown){
					console.log(xhr);
					var message = "Something is not working from backend!";
					$(".modal-title").html("");
					$(".modal-title").html(message);
					$('#emailack').modal('show');
					return false;
				},
				complete: function () {
					var message = "Email sent successfully";
					$(".modal-title").html("");
					$(".modal-title").html(message);
					$('#emailack').modal('show');	    
					$(".form-group")[0].reset();
					grecaptcha.reset();

		                }
				});
                        }
			 e.preventDefault();

                });
        },

}


$(document).ready(function(){
	contact.init();
});
