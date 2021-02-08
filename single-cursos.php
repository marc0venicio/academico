<?php get_header();?>
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0"><?php the_title();?></h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="courses.html">Courses</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
            <?php while(have_posts()): the_post(); ?>
                <div class="col-md-6 mb-4">
                    <p>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?></a>
                    </p>
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                        <h2 class="section-title-underline mb-5">
                            <span>Course Details</span>
                        </h2>
                        
                        <p><strong class="text-black d-block">Teacher:</strong> Craig Daniel</p>
                        <p class="mb-5"><strong class="text-black d-block">Hours:</strong> 8:00 am &mdash; 9:30am</p>
                        <div class="card">
                        <?php the_content(); ?>
                        </div>
                        <ul class="ul-check primary list-unstyled mb-5">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>consectetur adipisicing  </li>
                            <li>Sit dolor repellat esse</li>
                            <li>Necessitatibus</li>
                            <li>Sed necessitatibus itaque </li>
                        </ul>

                        <p>
                            <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">Enroll</a>
                        </p>
    
                    </div>
                    <?php endwhile; ?>
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

<?php get_footer();?>