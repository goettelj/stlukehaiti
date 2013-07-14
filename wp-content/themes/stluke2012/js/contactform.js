   //AJAX Contact Form code by web.enavu.com.  Modified by nickroz.com
 $(document).ready(function(){
        $('#send_message').click(function(e){
            
            //stop the form from being submitted
            e.preventDefault();

            /* declare the variables, var error is the variable that we use on the end
            to determine if there was an error or not */
            var error = false;
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            
            /* in the next section we do the checking by using VARIABLE.length
            where VARIABLE is the variable we are checking (like name, email),
            length is a javascript function to get the number of characters.
            And as you can see if the num of characters is 0 we set the error
            variable to true and show the name_error div with the fadeIn effect. 
            if it's not 0 then we fadeOut the div( that's if the div is shown and
            the error is fixed it fadesOut. 
            
            The only difference from these checks is the email checking, we have
            email.indexOf('@') which checks if there is @ in the email input field.
            This javascript function will return -1 if no occurence have been found.*/
            if(name.length < 2){
                var error = true;
                $('#name_error').fadeIn(500);
            }else{
                $('#name_error').fadeOut(500);
            }
            if(phone.length < 10){
                var error = true;
                $('#phone_error').fadeIn(500);
            }else{
                $('#phone_error').fadeOut(500);
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(500);
            }else{
                $('#email_error').fadeOut(500);
            }
            
            //now when the validation is done we check if the error variable is false (no errors)
            if(error == false){
                //disable the submit button to avoid spamming
                //and change the button text to Sending...
                //$('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
                
                /* using the jquery's post(ajax) function and a lifesaver
                function serialize() which gets all the data from the form
                we submit it to send_email.php */
                $.post("http://yovinomd.com/contactform/send_email.php", $("#contact_form").serialize(),function(result){
                    //and after the ajax request ends we check the text returned
                    if(result == 'sent'){
                        //if the mail is sent remove the submit paragraph
                        //$('#cf_submit_p').remove();
			                  $('#cf_submit_p').fadeOut(500);
                        //and show the mail success div with fadeIn. fadeout by nickroz
                        $('#mail_success').fadeIn(500).delay(3000).fadeOut(1000);
                        //NICKROZ wait 2secs, #contact_form_holder removeClass displayMenu, slide up slow.
                      	//$('#contact_form_holder').delay(5000).slideToggle(1000).removeClass("displayMenu");
			                  //NICKROZ form fields are cleared on submit, re-show submit button
			                  $('#cf_submit_p').delay(3000).fadeIn(1000);
//                    }else{
          }else if(result == 'spamfailed'){
						//show the spam failed div. Delay and fadeOut by nickroz
                        $('#spam_fail').fadeIn(500).delay(4000).fadeOut(1000);
                        //reenable the submit button by removing attribute disabled and change the text back to Send
                        $('#send_message').removeAttr('disabled').attr('value', 'Send');
          }else{
 						//show the mail failed div. Delay and fadeout by nickroz
                        $('#mail_fail').fadeIn(500).delay(4000).fadeOut(1000);
                        //reenable the submit button by removing attribute disabled and change the text back to Send
                        $('#send_message').removeAttr('disabled').attr('value', 'Send');
    				}	
                });
            }
        });    
    });