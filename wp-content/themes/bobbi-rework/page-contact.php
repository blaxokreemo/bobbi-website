<?php get_header(); ?>


<div class="container-flex content-centered content-wide">

    <div class="box on-top">
        <h2 class="title-box"><?php the_title() ?></h2>
        <div class="post-box">
            <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>
            <div class="contact-form-container">
                <form class="contact-form" method="post" action="<?php echo site_url('/thankyou') ?>">
                        <div class="form-element">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="form-name" required>
                        </div>

                        <div class="form-element">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="form-email" required>
                        </div>

                        <div class="form-element">
                            <label for="message">Message:</label>
                            <textarea id="message" name="form-message" rows="5" required></textarea>
                        </div>

                        <div class="form-element">
                            <button type="submit">Send Message</button>
                        </div>

                </form>
            </div>
            <div class="flower-icon"><img src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt=""></div>  
        </div>    
    
    </div>

</div>


<?php get_footer(); ?>