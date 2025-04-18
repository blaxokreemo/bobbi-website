<?php get_header(); ?>


<div class="content-narrow container-flex">

    <div class="headshot-container">
        <img class="headshot-large" src="<?php echo get_theme_file_uri('images/headshot-large.jpg') ?>" alt="">
    </div>

    <?php while(have_posts()) {
        the_post(); ?>
        <div class="book-description">
            <h2>About the Author</h2>
            <div class="book-description-container">
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
                <div id="book-description-content"><?php the_content(); ?></div>
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
            </div>
        </div>

        <?php } ?>   
        
</div>

</div>


<?php get_footer(); ?>
