<?php get_header(); ?>


<div class="container-flex content-centered content-narrow">

<?php
  get_template_part('template-parts/side-menu');
?>

  <?php if (the_post_thumbnail()) { ?>
      <div class="featured-image-container">
          <?php the_post_thumbnail('medium'); ?>
      </div>
  <?php } ?>

  <?php while(have_posts()) {
      the_post(); ?>
      <div class="box on-top">
          <h2 class="title-box"><?php the_title() ?></h2>
          <div class="post-box content-centered">
              <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
              <div class="post-content">Thank you for reaching out!</div>
              <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
          </div>
      </div>

      <?php } ?>   
      
</div>

</div>


<?php get_footer(); ?>