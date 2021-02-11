<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  
  <?php wp_head();?>
  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/aos.css">
  <link href="<?php bloginfo('template_url');?>/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

</head>

<body data-spy="scroll data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-black">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="login.html" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="<?php the_permalink();?>" class="d-block">
            <?php
          
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

          if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid">';
          } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
            echo '<p class="lead">' . get_bloginfo('description') . '</p>';
          }
        
        ?>
          </a>
      </div>
      <div class="mr-auto">
      <nav class="site-navigation position-relative text-right" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
              <?php
              wp_nav_menu( array(
                  'theme_location'    => 'principal',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'site-menu main-menu js-clone-nav mr-auto d-none d-lg-block',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
              ?>
          </div>
      </nav>
    </div>

      <div class="ml-auto">
          <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>