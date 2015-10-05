<?php get_header(); ?>

<?php /* Template Name: Contact */ ?>

<div class="container">
    <section class="row">
        <div class="twelve columns">
            <h2>Contact</h2>
            <p>Fill out our form below to schedule an appointment. We will email you back with a confirmation within an hour. Need to reach us sooner? Stop by our downtown location or give us a call. We will be happy to help!</p>
        </div>
    </section>
    <section class="row">
        <div class="eight columns">
        <!-- BEGIN PAGE PHP -->
                    <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?>
                            <?php the_post_thumbnail(); ?>
                            <?php the_content();
                        endwhile;
                    endif; ?>
        <!-- END PAGE PHP -->
        </div>

        <div class="four columns sidebar">
            <?php dynamic_sidebar('map-widget'); ?>
            <?php dynamic_sidebar('contact-widget'); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>