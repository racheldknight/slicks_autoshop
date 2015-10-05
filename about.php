<?php get_header(); ?>

<?php /* Template Name: About */ ?>

<div class="container">
    <section class="row">
        <div class="eight columns">
        <!-- BEGIN PAGE PHP -->
                    <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php the_content();
                        endwhile;
                    endif; ?>
        <!-- END PAGE PHP -->
        </div>

        <div class="four columns sidebar">
            <?php dynamic_sidebar('about-widget'); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>