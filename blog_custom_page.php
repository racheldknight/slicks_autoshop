<?php get_header(); ?>

<?php /* Template Name: Blog Posts */ ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>

<div class="container">
    <section class="row">
        <div class="twelve columns">
            <h2>Our Blog</h2>
            <p>Our blog features advice and helpful how-to's to give you the tools to keep your car in the best shape and keep you on the road. If you have a persisting problem or the problem is larger than expected, bring it in for a free estimate and we'll work with you to solve your problems quickly.</p> 
        </div>
    </section>
    <section class="row">
        <div class="eight columns">
        <!-- BEGIN PAGE PHP -->
                    <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <?php the_excerpt(__('Continue Reading >>', 'example')); ?>
                            <p><a href="<?php the_permalink(); ?>" class="btn">Read More</a></p>
                        <?php endwhile; ?>

                        <!-- Navigation -->
                        <div class="nav">
                            <span class="newer"><?php previous_posts_link(__('<< Newer', 'example')) ?></span>
                            <span class="older"><?php next_posts_link(__('Older >>', 'example')) ?></span>
                        </div>
                    <?php endif; 
                        wp_reset_query();
                    ?>
        <!-- END PAGE PHP -->
        </div>

        <!-- SIDEBAR -->
        <div class="four columns sidebar">
            <?php dynamic_sidebar('map-widget'); ?>
            <?php dynamic_sidebar('contact-widget'); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>