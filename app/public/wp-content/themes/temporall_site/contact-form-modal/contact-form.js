// jQuery.expr[':'].i_contains = function(a, i, m) {
//     return jQuery(a).text().toUpperCase()
//         .indexOf(m[3].toUpperCase()) >= 0;
//     };

    // contact_us_button = jQuery('a[href="/contact-us"]');
    // if (contact_us_button.length>0) {
    //     contact_us_button.on('click',function(e) {
    //         e.preventDefault();
            
    //         jQuery('.block-screen').show();
    //     })
    // }

    document.addEventListener('click', function (event) {

        if (jQuery('.contact-us-modal:visible').length>0) {
            if (!event.target.closest('.contact-us-modal')) {
                jQuery('.block-screen').hide();
            } else return;
        }                
        // Otherwise, run our code...
    
    }, false);

    contact_us_buttons = jQuery('a[href="/contact-us"]');
    if (contact_us_buttons.length>0) {
        contact_us_buttons.on('click',function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            jQuery('.block-screen').show();
        })
    }

    jQuery('a.close').on('click',function(e){
        e.preventDefault();
        jQuery('.block-screen').hide();
    })

    function onRecaptchaLoadCallback() {
        var clientId = grecaptcha.render('inline-badge', {
            'sitekey': RECAPTCHA_SITE_KEY,
            'badge': 'inline',
            'size': 'invisible'
        });

        grecaptcha.ready(function() {
            grecaptcha.execute(clientId, {
                    action: 'action_name'
                })
                .then(function(token) {
                    console.log('Token ready: '+token)
                });
        });
    }    


    jQuery(document).ready(function($) {
    
        var acceptTermsLabel = $("label[for='contact_us[accept_terms]']")[0].innerHTML;        
        
        $('#contact_us button[type=submit]').on('click',function(e){
            e.preventDefault();
            console.log('Contact Form Submit Button pressed');

            // validate input fields
            var inputs = $('#contact_us :input');            
            // reset checkbox label
            $("label[for='contact_us[accept_terms]']")[0].innerHTML = acceptTermsLabel; 

            var fCounter;
            var formFailed=false;            
            for (fCounter = 0; fCounter < inputs.length; fCounter++) {                                
                if (inputs[fCounter].required) {                    

                    
                    if ((inputs[fCounter].type == 'text' && inputs[fCounter].value == "") || 
                        (inputs[fCounter].type == 'checkbox' && inputs[fCounter].checked == false)) {
                            inputs[fCounter].style.border = 'solid 1px #ed7401';
                            formFailed=true;

                            if (inputs[fCounter].type=='checkbox') {                                                                
                                inputs[fCounter].nextElementSibling.innerHTML = inputs[fCounter].nextElementSibling.innerHTML + ' <span style="color: #ed7401">Please accept Temporall Terms & Conditions</span>'                
                            } 
                        } else if (inputs[fCounter].name==="contact_us[email]") {                            
                            
                            function emailIsValid(email) {
                                return /\S+@\S+\.\S+/.test(email)
                            }

                            if (emailIsValid(inputs[fCounter].value)==false) {
                                inputs[fCounter].style.border = 'solid 1px #ed7401';
                                formFailed=true;
                            } else inputs[fCounter].style.border = '';                          
                        } else inputs[fCounter].style.border = '';                    
                };
            }

            data = {
                action: 'contact_us_form',
                code: 'hallo'
            };

            if (!formFailed) {

                data = {
                    action: 'contact_us_form',
                    form_data: $('#contact_us').serializeArray()
                }

                    jQuery.ajax({
                    type: 'POST',
                    url: '/wp-admin/admin-ajax.php',
                    data: data,
                    dataType: 'json',
                    success: function(result) {                        
                        try {                   
                            console.log('success');                                 
                            console.log(result);
                            jQuery('.block-screen').hide();

                            var inputs = jQuery('#contact_us :input');
                            var iC;
                            for (iC=0;iC<inputs.length;iC++) {
                                debugger;
                                if (inputs[iC].type!='checkbox') {                                    
                                    inputs[iC].value='';
                                    inputs[iC].style.border='';
                                } else {
                                    inputs[iC].checked=false;
                                }
                            }
                        } catch (err) {
                            console.log('error');                                 
                            console.log(result);                         
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error with Ajax request');
                        submit_error(errorThrown);
                    }
                });
            }         
        })

    
});