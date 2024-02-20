<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	    <!-- footer -->
	<footer class="footer_main">
        <div class="container">
            <div class="top">
                <div class="logo_and_social">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                              <?php 
        
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                                
                                ?></a>
                    </div>
                    <div class="social_media">
                        <ul>
                            <li>
                                <a href="<?php  dynamic_sidebar('social_facebook'); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?php  dynamic_sidebar('social_twitter'); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php  dynamic_sidebar('social_instagram'); ?>" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer_menu">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="footer_list">
                                <h3>&nbsp;</h3>
                                <ul>
                                    <li><a href="#">Ameritronics Innovations</a></li>
                                    <li><a href="#">Quality & Sustainability</a></li>
                                    <li><a href="#">The Ameritronics Community</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="<?= site_url('/contact'); ?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer_list">
                                <h3>Industrial Soldering</h3>
                                <ul>
                                    <li><a href="#">Soldering Stations</a></li>
                                    <li><a href="#">Soldering Irons</a></li>
                                    <li><a href="#">Soldering Tips</a></li>
                                    <li><a href="#">Solder Wire</a></li>
                                    <li><a href="#">Soldering Accessories</a></li>
                                    <li><a href="#">Robotic Soldering</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="footer_list">
                                <h3>Filtration</h3>
                                <ul>
                                    <li><a href="#">Soldering Fumes</a></li>
                                    <li><a href="#">Clean Room</a></li>
                                    <li><a href="#">Arms, Hoods & Accessories</a></li>
                                    <li><a href="#">Replacement Filter</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer_list">
                                <h3>Precision Tools</h3>
                                <ul>
                                    <li><a href="#">Cutters</a></li>
                                    <li><a href="#">Pliers</a></li>
                                    <li><a href="#">Special tools</a></li>
                                    <li><a href="#">Toolkits</a></li>
                                    <li><a href="#">Tweezers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer_list">
                                <h3>Soldering</h3>
                                <ul>
                                    <li><a href="#">Corded Soldering Irons</a></li>
                                    <li><a href="#">Soldering Stations</a></li>
                                    <li><a href="#">Cordless Soldering Irons</a></li>
                                    <li><a href="#">Soldering Guns</a></li>
                                    <li><a href="#">Project Kits</a></li>
                                    <li><a href="#">Soldering Tips</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_links">
                <div class="top_wapper">
                    <h3>Quick Links</h3>
                    <div class="quick_link_list">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                            <li class=""><a href="#">Services</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="#">Option 1</a></li>
                                    <li><a href="#">Option 2</a></li>
                                    <li><a href="#">Option 3</a></li>
                                    <li><a href="#">Option 4</a></li>
                                </ul> -->
                            </li>
                            <li><a href="<?php echo site_url('/products'); ?>">Products</a></li>
                            <li class=""><a href="#">Supplies</a></li>
                            <li><a href="#">Sales and Promotions</a></li>
                            <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                            <li><a href="#">Supplier Responsibility</a></li>
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                <p><?php  dynamic_sidebar('copyright_text'); ?></p>
                    <p>Design & Implement by <a href="https://www.businessprodigital.com/" target="_blank">Business Pro Digital</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <section class="login_popup" id="register_id" style="display: none;">
        <div class="heading text-center">`
            <h2>Register</h2>
            <h3>Connect with Us</h3>
        </div>
        <div class="login_form_main">
            <form id="registration_form" name="">
                <div class="form_group">
                    <span class="icon_user"></span>
                    <input type="text" name="username" id="username" placeholder="Enter your Full Name" required>
                </div>
                <div class="form_group">
                    <span class="icon_email"></span>
                    <input type="email" name="user_email" id="user_email" placeholder="Enter your Email Address" required>
                </div>
                <!-- <div class="form_group">
                    <span class="icon_number"></span>
                    <input type="number" name="" id="" placeholder="Enter your Phone Number">
                </div> -->
                <div class="form_group">
                    <span class="icon_password"></span>
                    <input type="password" name="password" class="password-field" id="pass" placeholder="Enter your Password" required>
                    <span class="icon_eye"></span>
					<div id="passwordError"></div>
                </div>
                <div class="form_group">
                    <span class="icon_password"></span>
                    <input type="password" name="confirm-password" id="confirm-pass" class="password_field" placeholder="Confirm Password" required>
                    <span class="icon_eye"></span>
					<div id="CheckPasswordMatch"></div>
                </div>
                <button class="a_btn" id="submit" type="submit">Register</button>
            </form>
			<div id="show_resp"></div>
          
        </div>
    </section>
    <!-- Register -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- extra js -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.6.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <!-- main-Js -->
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/fancybox.min.js"></script>
	<script>

$('#newsletter_form').submit(function(event){
 
 event.preventDefault();
  $('#result_msg').html('');
  var link="<?php echo admin_url('admin-ajax.php')?>";
  var form=$('#newsletter_form').serialize();
  var formData = new FormData;
  formData.append('action','newsletter');
  formData.append('newsletter',form);
  //$('#submit').attr('disabled',true);
  $.ajax({
      url:link,
      type:'post',
      data:formData,
      processData:false,
      contentType:false,
      success:function(result){
       
          var data = $.parseJSON(result)
          if(data.status == 1){
            $('#newsletter_form')[0].reset()
            $('#result_msg').html('<p style="color:green;">'+data.message+'</p>')
			setTimeout(function(){
				$('#result_msg').text('')
								}, 2000)
          }else{
            $('#newsletter_form')[0].reset()
            $('#result_msg').html('<p style="color:red;">'+data.message+'</p>')
			setTimeout(function(){
				$('#result_msg').text('')
								}, 2000)
          }
          
        
      }
  });
});   
 </script>
<script>

$("#confirm-pass").on('keyup', function(){
		var pass = $('#pass').val();
		var confirm_pass = $('#confirm-pass').val();

    if (pass != confirm_pass){
		$('#submit').attr('disabled','disabled');

		$("#CheckPasswordMatch").html("<p style='color:red;' id='check_pass_error'>Password does not match !<p>");
		
		
        
	}
    else{
		$('#check_pass_error').hide();
		$("#CheckPasswordMatch").html("<p style='color:green;' id='check_pass_success'>Password  match !<p>");
		$('#submit').removeAttr('disabled');

		setTimeout(function () {
			$('#check_pass_success').hide();
                 }, 2000);
	}
   });

    $('#registration_form').submit(function(event){
        event.preventDefault();
       var link     = "<?php echo admin_url('admin-ajax.php')?>";
       var form     = $('#registration_form').serialize();
    
        var formData = new FormData;
        formData.append('action','user_register');
        formData.append('user_register',form);
        $.ajax({
            url : link,
            type : 'post',
            data : formData ,
            processData : false,
            contentType : false ,
            success : function(result){
			
            var data = $.parseJSON(result)
              if(data.status == 1){
                $('#registration_form')[0].reset()
                $('#show_resp').html('<p style="color:green;">'+data.message+'</p>')
                setTimeout(function(){
							window.location.href = "<?php echo site_url('/my-account'); ?>" 
						}, 2000)
              }else{
                $('#registration_form')[0].reset()
                $('#show_resp').html('<p style="color:red;">'+data.message+'</p>')
              }
            }
           
           
       });
       
        
        
        
    });
    
</script>
<script>
$('#search_form').submit(function(event){
   
   event.preventDefault();
    $('#result_msg1').html('');
    var link="<?php echo admin_url('admin-ajax.php') ;?>";
    var form = $('#search_form').serialize();
    var formData = new FormData;
    formData.append('action','search_product');
    formData.append('search_product',form);
    $('#service_submit').attr('disabled',true);
    $.ajax({
        url:link,
        type:'post',
        data:formData,
        processData:false,
        contentType:false,
       
        success:function(resp){
          
            var data_product = $.parseJSON(resp)
        
            
             if(data_product.status == 1){
                
                 location.replace("<?php echo site_url('search/?title=');?>"+data_product.title);
                 return false;
            
             }     
           
        }
    });
});    
</script>

<?php wp_footer(); ?>

</body>
</html>
