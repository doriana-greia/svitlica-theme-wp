<?php
/**
 * Template Name: Template About
 */
get_header(); ?>
        <!-- Content -->
<div class="main">

    <section class="main-about">
        <div class="container-fluid wraper">
        <div class="row">
            <div class="breadcrumbs">
                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>

        <div class="col-md-12">
            <h2><?php the_title(); ?></h2>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>

    </div><!-- /.row -->
    </div>
  </section>
    </div>
<?php get_footer(); ?>