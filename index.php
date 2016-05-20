<?php get_header(); ?>


    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('>'); ?>
                </div>
            </div><!-- /.row -->
        </div>
        <section class="main-ewents">
            <div class="container-fluid wraper">
                <div class="row">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php ale_part('postpreview' );?>
                    <?php endwhile; else: ?>
                        <?php ale_part('notfound')?>
                    <?php endif; ?>


                </div><!-- /.row -->
            </div>
        </section>
    </div><!-- /.main -->

<?php get_footer(); ?>