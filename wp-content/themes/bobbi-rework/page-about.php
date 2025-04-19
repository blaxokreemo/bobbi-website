<?php get_header(); ?>


<div class="content-narrow container-flex about-page">

    <div class="headshot-container">
        <img class="headshot-large" src="<?php echo get_theme_file_uri('images/headshot-large.jpg') ?>" alt="">
    </div>

    <?php while(have_posts()) {
        the_post(); ?>
        <div class="box post-wrapper">
            <h2 class="title-box">About the Author</h2>
            <div class="post-box">
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
                <div class="post-content"><?php the_content();  echo wp_get_post_parent_id(); ?></div>
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
            </div>
        </div>

        <?php } ?>   
        
</div>

</div>


<?php get_footer(); ?>
