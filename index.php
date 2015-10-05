<?php get_header(); ?>

<div class="container">
<section class="row">
    <div class="twelve columns">
        <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '31' ); } ?>
    </div>
</section>

<section class="row border">
    <div class="six columns">
        <?php dynamic_sidebar('offers-widget'); ?>
    </div>

    <div class="six columns">
        <?php dynamic_sidebar('post-widget'); ?>
    </div>
</section>
</div>

<?php get_footer(); ?>