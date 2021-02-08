<?php get_header();?>

    
    <div class="hero-slide owl-carousel site-blocks-cover">
    <?php 
      // args
        $my_args_banner = array(
        'post_type' => 'banners',
        'posts_per_page' => 3,
        );
      // query
        $my_query_banner = new WP_Query ( $my_args_banner );
    ?>
    <?php if( $my_query_banner->have_posts()) : 
      $banner = $banners[0];
      $c = 0;
      while( $my_query_banner->have_posts() ) : 
      $my_query_banner->the_post(); 
    ?>
      <section class="intro-section <?php $c++; if($c == 1) { echo ' active'; } ?>"  >
      <style>
        <?php if(get_the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'))): ?>
          section {
          background-image: url('<?php the_post_thumbnail_url('post-thumbnail', array('class' => 'img-fluid'));?>');
        }
       <?php else:?>
          section {
            background-image: url('<?php the_post_thumbnail_url('post-thumbnail', array('class' => 'img-fluid'));?>');)
          }
        <?php endif;?>
      </style>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1><?php the_title();?></h1>
            </div>
          </div>
        </div>
        </section>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

    </div>
    

    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Why Academics Works</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Personalize Learning</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Trusted Courses</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Tools for Students</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Popular Courses</span>
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="owl-slide-3 owl-carousel">
            <?php 
      // args
        $my_args_banner = array(
        'post_type' => 'cursos',
        'posts_per_page' => 5,
        );
      // query
        $my_query_banner = new WP_Query ( $my_args_banner );
    ?>
    <?php if( $my_query_banner->have_posts()) : 
      $banner = $banners[0];
      $c = 0;
      while( $my_query_banner->have_posts() ) : 
      $my_query_banner->the_post(); 
    ?>
    <div class="course-1-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
      <figure class="thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?></a>
          <div class="price">$99.00</div>
            <div class="category"><h3><?php the_title();?></h3></div>  
            </figure>
              <div class="course-1-content pb-4">
                <h2>How To Create Mobile Apps Using Ionic</h2>
                  <div class="rating text-center mb-3">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                    <div class="card border-card-footer">
                      <div class="card-body">
                        <?php the_excerpt(); ?>
                      </div>
                      </div>
                        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>          
                    </div>
                  </div>
                  <?php endwhile; endif; ?>
                  <?php wp_reset_query(); ?>
              </div>
          </div>
        </div>
      </div>
    </div>

    


    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About Our University</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem nesciunt quaerat ad reiciendis perferendis voluptate fugiat sunt fuga error totam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->
  <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4">
            <h2 class="section-title-underline">
              <span>Testimonials</span>
            </h2>
          </div>
        </div>


        <div class="owl-slide owl-carousel">

        <?php 
      // args
        $my_args = array(
        'post_type' => 'depoimentos',
        'posts_per_page' => 8,
        );
      // query
        $my_query = new WP_Query ( $my_args );
    ?>
    <?php if( $my_query->have_posts()) : 
      $depoim = $depoims[0];
      $c = 0;
      while( $my_query->have_posts() ) : 
      $my_query->the_post(); 
    ?>

          <div class="ftco-testimonial-1 <?php $c++; if($c == 1) { echo ' active'; } ?> ">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid mr-3')); ?>
              <div>
                <h3><?php the_title(); ?></h3>
                <span>Designer</span>
              </div>
            </div>
            <div>
            <div class="card border-card-footer">
                      <div class="card-body">
                        <?php the_content(); ?>
                      </div>
                      </div>          
          </div>
          </div>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </div>
        
      </div>
    </div>
    

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-mortarboard"></span>
            <h3>Our Philosphy</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-school-material"></span>
            <h3>Academics Principle</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <span class="icon flaticon-library"></span>
            <h3>Key of Success</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="news-updates">
      <div class="container">
         
        <div class="row">
          
          <div class="col-lg-9">
             <div class="section-heading">
              <h2 class="text-black">News &amp; Updates</h2>
              <a href="#">Read All News</a>
            </div>
            <div class="row">
              <div class="col-lg-6">
                
                <?php 
                // args
                $my_args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 1,
                  'category_name' => 'Destaque'
                );

                // query
                $my_query = new WP_Query ( $my_args );
                ?>

                <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="post-entry-big">
                  <a href="news-single.html" class="img-link"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?></a>
                  <div class="post-content">
                    <div class="post-meta"> 
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html"><?php the_title();?></a></h3>
                  
                  </div>
                  <?php endwhile; endif; ?>
                  <?php wp_reset_query(); ?>
                </div>
              </div>
              <div class="col-lg-6">
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php get_template_part('content');?>
                  
                  <?php endwhile; ?>
                <?php else : get_404_template();  endif; ?>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="section-heading">
              <h2 class="text-black">Campus Videos</h2>
              <a href="#">View All Videos</a>
            </div>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="<?php bloginfo('template_url'); ?>/images/course_5.jpg" alt="Image" class="img-fluid">
            </a>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                <span class="play">
                  <span class="icon-play"></span>
                </span>
                <img src="<?php bloginfo('template_url'); ?>/images/course_5.jpg" alt="Image" class="img-fluid">
              </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Subscribe to us!</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
          </div>
          <div class="col-lg-5">
            <form action="" class="d-flex">
              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div> 


<?php get_footer();?>