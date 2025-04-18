<?php get_header(); ?>


<div class="container-flex content-after-menu">

<?php
            $theParent = wp_get_post_parent_id(get_the_ID());
            $test_array = get_pages(array(
                'child_of' => get_the_ID()
            ));
            
            if ($theParent or $test_array) { ?>             

      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
        <ul class="min-list">
          <?php 
          
            if ($theParent) {
                $findChildrenOf = $theParent;
            } else {
                $findChildrenOf = get_the_ID();
            }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
          ));

          ?>
        </ul>
      </div>
<?php } ?>

    <?php if (the_post_thumbnail()) { ?>
        <div class="featured-image-container">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php } ?>

    <?php while(have_posts()) {
        the_post(); ?>
        <div class="page-content">
            <h2><?php the_title() ?></h2>
            <div class="content-box">
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
                <div class="generic-content"><?php the_content(); ?></div>
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
            </div>
        </div>

        <?php } ?>   
        
</div>

</div>


<?php get_footer(); ?>