<div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4">   <?php
          
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

          if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid">';
          } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
            echo '<p class="lead">' . get_bloginfo('description') . '</p>';
          }
        
        ?></p>
            <p><?php echo get_theme_mod('footer_title', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.'); ?></p>  
            
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Campus</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Acedemic</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Leadership</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Math</a></li>
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <?php echo get_theme_mod('footer_text', 'Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >overlordintellectus</a>'); ?>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <?php wp_footer();?>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>



  <script src="<?php bloginfo('template_url');?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery-ui.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.stellar.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.countdown.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/aos.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.fancybox.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.sticky.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="<?php bloginfo('template_url');?>/js/main.js"></script>

</body>

</html>