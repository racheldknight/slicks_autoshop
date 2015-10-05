<?php get_header(); ?>

<div class="container">
    <section class="row">
        <div class="eight columns">
        <!-- BEGIN PAGE PHP -->

                    <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();
                        endwhile;
                    endif; ?>

        <!-- END PAGE PHP -->
        </div>

        <!-- SIDEBAR -->
        <div class="four columns sidebar">
            <?php dynamic_sidebar('blog-widget'); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>