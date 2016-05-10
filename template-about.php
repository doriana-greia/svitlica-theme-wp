<?php
/**
 * Template Name: Template About
 */
get_header(); ?>
        <!-- Content -->
<div class="main">
    <section class="main-contact">
        <div class="container-fluid wraper">
        <div class="row">
    <h2>Про нас</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>


    </div><!-- /.row -->
    </div>
  </section>
    </div>
<?php get_footer(); ?>