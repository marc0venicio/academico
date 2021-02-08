<?php if( is_single() ) : ?>
    <p class="mb-5"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?></p>
        <h3 class="mb-3 mt-4 pt-2 border-top"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <p class="text-muted"><span class="badge badge-my-color-4"><?php echo get_the_date('d/m/y'); ?></span></p>
        <hr>
<?php else:?>
    <div class="post-entry-big horizontal d-flex mb-4">
        <a href="<?php the_permalink(); ?>" class="img-link mr-4"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?></a>
            <div class="post-content">
              <div class="post-meta">
                <?php echo get_the_date('d/m/y'); ?>
                <span class="mx-1">/</span>
                <a href="#">Admission</a>, <a href="#">Updates</a>
              </div>
              <h3 class="post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>
<?php endif; ?>