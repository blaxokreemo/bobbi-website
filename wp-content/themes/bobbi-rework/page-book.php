<?php get_header(); ?>


<div class="content-wide container-flex room-for-menu">

<?php
  get_template_part('template-parts/side-menu');
?>

<?php while(have_posts()) {
  the_post(); ?>
  <div class="box post-wrapper on-top">
      <h2 class="title-box"><?php the_title(); ?></h2>
      <div class="post-box">
          <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
          <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
      </div>
  </div>

  <?php } ?>   
        
</div>

</div>


<?php get_footer(); ?>
