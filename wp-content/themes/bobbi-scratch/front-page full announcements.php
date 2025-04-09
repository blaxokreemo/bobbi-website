<?php get_header(); ?>


<div class="content-narrow front-page-flex">

    <?php while(have_posts()) {
        the_post(); ?>
        <div class="welcome-content">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
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
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
        <?php } ?>
    </div>    
        
</div>

</div>


<?php get_footer(); ?>
