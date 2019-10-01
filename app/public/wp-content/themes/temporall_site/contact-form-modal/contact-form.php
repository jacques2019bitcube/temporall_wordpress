<?php 
 echo '<style>';
    include 'contact-form.css'; 
echo '</style>';
?>
<div class="block-screen">
    <div class='contact-us-modal'>        
        <a href="#" class="close"></a>
        <div class="modal-col-left">
            <h2>Get in touch</h2>
            <p>Fill out the form and one of the team will be in touch as soon as possible</p>

            <form action="" class="clearfix" id='contact_us'>
                <div class="form-grouping">
                    <label>First name*
                    <input type="text" name="contact_us[first_name]" required>
                    </label>            
                </div>             

                <div class="form-grouping">
                    <label>Last name*
                    <input type="text" name="contact_us[last_name]" required>
                    </label>            
                </div>             
                
                <div class="form-grouping">
                    <label>Email*
                    <input type="text" name="contact_us[email]" required>
                    </label>            
                </div>             

                <div class="form-grouping">
                    <label>Position
                    <input type="text" name="contact_us[position]">
                    </label>            
                </div>             

                <div class="form-grouping full-width">
                    <label>Company
                    <input type="text" name="contact_us[company]">
                    </label>            
                </div>    
                
                <div class="form-grouping full-width">
                    <label>Description
                    <textarea type="text" name="contact_us[description]"></textarea>
                    </label>            
                </div>    

                <div class="form-grouping checkbox"> 
                <input type="checkbox" name="contact_us[subscribe]">                   
                    <label for="contact_us[subscribe]">                        
                        Send me periodic emails with news, insights and event invites:
                    </label>
                </div>

                <div class="form-grouping checkbox">
                    <input type="checkbox" name="contact_us[accept_terms]" required>
                    <label for="contact_us[accept_terms]">I accept the Terms of service and Privacy Policy.</label>
                </div>      
                
                <button class="primary-btns" type="submit">
                    Submit
                </button>
            </form>   
            
            <div id="inline-badge"></div>
        </div>
        <div class="modal-col-right">
            <h3>The leading Organisational Insights Platform</h3>
            <ul>
                <li>Helping our clients and partners think and act different.</li>
                <li>Generate unique and contextualised insights</li>
                <li>Utilise organisational intelligence for sustained performance and competitive edge</li>                
            </ul>
            <h5>The leading Organisational Insights Platform</h5>
        </div>
    </div>    
</div>

<script>var RECAPTCHA_SITE_KEY="<?php echo RECAPTCHA_SITE_KEY?>";</script>
<script type="text/javascript" src="wp-content/themes/temporall_site/contact-form-modal/contact-form.js"></script>