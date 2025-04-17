<?php get_header(); ?>


<div class="content-narrow container-flex">

    <?php while(have_posts()) {
        the_post(); ?>
        <div class="box post-wrapper">
            <h2 class="title-box"><?php the_title(); ?></h2>
            <div class="post-box">
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
                <div id="post-content"><?php the_content(); ?></div>
                <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
            </div>
        </div>

        <?php } ?>

    <div class="announcements">
        <div class="announcements-title">
            <h2>Announcements</h2>
        </div>
        <?php $homepageAnnouncements = new WP_Query(
            array(
              'posts_per_page' => -1,
              'post_type' => 'announcement',
              )
            );

        while($homepageAnnouncements->have_posts()) {
            $homepageAnnouncements->the_post(); ?>
            <div class="announcement">

                <div class="announcement-text">
                    <span class="title-and-date"><h3 class="announcement-title"><a href="<?php the_permalink(); ?>" class="announcement-link"><?php the_title(); ?></a></h3><span class="dipper post-date"><?php the_time('n/d/y'); ?></span></span>
                    <div class="announcement-info">
                        <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                        <p class="readmore"><a href="<?php the_permalink(); ?>">Read More</a></p>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>    
        
</div>

</div>


<?php get_footer(); ?>
