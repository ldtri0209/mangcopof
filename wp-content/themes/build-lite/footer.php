<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Build Lite
 */
?>
<div id="footer-wrapper">
    	<div class="container">
             <div class="cols-4 widget-column-1">                  
              <?php if ( get_theme_mod( 'contact_title' ) !== "" ){  ?>
                <h5><?php echo esc_attr_e( get_theme_mod( 'contact_title', __('Contact Info','build-lite'))); ?></h5>              
			   <?php } ?>
                
               <?php if ( get_theme_mod('contact_add') !== "") { ?>
                <p><?php echo esc_attr_e( get_theme_mod( 'contact_add', __('100 King St, Melbourne PIC 4000, Australia','build-lite'))); ?></p>             
			   <?php } ?>
                
                
              <div class="phone-no">
              <!-- <p>Contact: Mrs. Thu Ha</p>	 -->
              <?php if ( get_theme_mod('contact_no') !== "") { ?>
                <p><?php echo esc_attr_e( get_theme_mod( 'contact_no', __('Phone:+123 456 7890','build-lite'))); ?></p>              
			   <?php } ?>  
              
                         
               <?php if( get_theme_mod('contact_mail') !== ""){ ?>
              <?php esc_attr_e('Email: ', 'build-lite'); ?><a href="mailto:<?php echo sanitize_email(get_theme_mod('contact_mail','contact@company.com')); ?>"><?php echo get_theme_mod('contact_mail','contact@company.com'); ?></a>			
			  <?php } ?>  
              
                     
           </div>
           <!-- <div class="phone-no"> 
              <p>Contact: Ms. My Tuyen</p>
                <p>Phone: (+84) 932 756 950</p> 
                Email: <a href="mailto:mytuyeniuh91@gmail.com">mytuyeniuh91@gmail.com</a>  
           </div> -->
            </div><!--end .widget-column-1-->                  
			         
             
             <div class="cols-4 widget-column-2"> 
              <?php if ( get_theme_mod('menu_title') !== "") { ?>
                <h5><?php echo esc_attr_e( get_theme_mod( 'menu_title', __('Main Navigation','build-lite'))); ?></h5>            
			  <?php } ?>
               
               
                <div class="menu">
                  <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div>                        	
                       	
              </div><!--end .widget-column-2-->     
                      
               <div class="cols-4 widget-column-3">                   
               <?php if ( get_theme_mod('about_title') !== "") { ?>
                <h5><?php echo esc_attr_e( get_theme_mod( 'about_title', __('About Us','build-lite'))); ?></h5>             
			   <?php } ?>
               
                <?php if ( get_theme_mod('about_description') !== "") { ?>
                <p><?php echo esc_attr_e( get_theme_mod( 'about_description', __('Donec ut ex ac nulla pellentesque mollis in a enim. Praesent placerat sapien mauris, vitae sodales tellus venenatis ac. Suspendisse suscipit velit id ultricies auctor. Duis turpis arcu, aliquet sed sollicitudin sed, porta quis urna. Quisque velit nibh, egestas et erat a, vehicula interdum augue.','build-lite'))); ?></p>
			   <?php } ?>    	
				
                    
                </div><!--end .widget-column-3-->
                
                <div class="cols-4 widget-column-4">                
                <?php if ( get_theme_mod('social_title') !== "") { ?>
                <h5><?php echo esc_attr_e( get_theme_mod( 'social_title', __('Follow Us','build-lite'))); ?></h5>              
			   <?php } ?> 
                             	
					<div class="clear"></div>                
                  <div class="social-icons">
					<?php if ( get_theme_mod('fb_link') != "") { ?>
                    <a title="facebook" class="fb" target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link','#facebook')); ?>"></a> 
                    <?php } else { ?>
                    <?php echo '<a href="#" target="_blank" class="fb" title="facebook"></a>'; } ?>
                    
                    <?php if ( get_theme_mod('twitt_link') != "") { ?>
                    <a title="twitter" class="tw" target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link','#twitter')); ?>"></a>
                    <?php } else { ?>
                    <?php echo '<a href="#" target="_blank" class="tw" title="twitter"></a>'; } ?> 
                    
                    <?php if ( get_theme_mod('gplus_link') != "") { ?>
                    <a title="google-plus" class="gp" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link','#gplus')); ?>"></a>
                    <?php } else { ?>
                    <?php echo '<a href="#" target="_blank" class="gp" title="google-plus"></a>'; } ?>
                    
                    <?php if ( get_theme_mod('linked_link') != "") { ?> 
                    <a title="linkedin" class="in" target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link','#linkedin')); ?>"></a>
                    <?php } else { ?>
                    <?php echo '<a href="#" target="_blank" class="in" title="linkedin"></a>'; } ?>
                  </div>  
              
                   
                </div><!--end .widget-column-4-->
                
                
            <div class="clear"></div>
        </div><!--end .container-->        
    </div>
    <footer id="footer">
    <div class="container">
      <div class="copyright-area-content">
        <div class="copyright">
          <div>Copyright 2016 | All Rights Reserved | Powered by <a href="https://www.mangcopof.com">Thành Lợi</a></div>
        </div>
    </div>
  </footer>
<?php wp_footer(); ?>
<script lang="javascript">
(function() {var _h1= document.getElementsByTagName('title')[0] || false;
var product_name = ''; if(_h1){product_name= _h1.textContent || _h1.innerText;}var ga = document.createElement('script'); ga.type = 'text/javascript';
ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=401d066980fca541c435bacc7d57b4e7&data=eyJzc29faWQiOjMzNzQwMTgsImhhc2giOiIyYjMxM2JjMGU4YmFjYTU5M2NkMmQ1Njg3ZDM1NDg5ZiJ9&pname='+product_name;
var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();
</script> 
</body>
</html>