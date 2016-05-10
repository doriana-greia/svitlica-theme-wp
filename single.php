<?php get_header(); ?>
    <!-- Content -->
<?php /*?>
    <div class="blog-center-align">

    <!-- Blog Caption -->
    <div class="blog-single-caption">
        <a class="backblog" href="<?php echo home_url(); ?>/blog"><?php _e('&lt; Back to the Blog','aletheme'); ?></a>
    </div>

    <!-- Blog Line -->
    <div class="blog-line"></div>

    <!-- Blog Content -->
    <div class="blog-single">

        <!-- Right Menu -->
        <div class="right-side">
            <?php get_sidebar(); ?>
        </div>

        <!-- Left Content -->
        <div class="left-side">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p class="info"><?php _e('in','aletheme'); ?> <?php the_category(', '); ?> <?php _e('by','aletheme'); ?> <?php echo the_author_posts_link(); ?>  <span>|</span> <?php comments_number( 'no comments', 'one comment', '% comments' ); ?></p>
                <h3 class="caption"><?php the_title(); ?></h3>
                <div class="text">
                    <?php ale_part('posthead');?>
                    <?php ale_part('postfull');?>
                    <div class="cf"></div>
                    <?php ale_part('postfooter');?>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
            <!-- Line -->
            <div class="blog-line"></div>
            <?php comments_template(); ?>
        </div>
    </div>

    <!-- Blog Line -->
    <div class="blog-line"></div>

    <!-- Blog Nav  -->
    <div class="blog-single-footer">
        <div class="left"><?php if(get_previous_post_link()){ ?><span class="left"></span><?php } ?> <?php previous_post_link('%link'); ?> </div>
        <div class="right"><?php if(get_next_post_link()){ ?><span class="right"></span><?php } ?> <?php next_post_link('%link'); ?>  </div>
    </div>

    </div>
 <?php */?>


    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('>'); ?>
                </div>
            </div><!-- /.row -->
        </div>
        <section class="main-ewents-info">
            <div class="container-fluid wraper">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_title(); ?></h3>

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                                <?php ale_part('postfull');?>



                        <?php endwhile; else: ?>
                            <?php ale_part('notfound')?>
                        <?php endif; ?>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="#" class="btn-green">Розклад Програми</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="#" class="btn-red-light">Реєструватись</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="data-ewents-content">
                            <p class="">Сб, 22 Грудня</p>
                            <p class="">11:30 - 16:00</p>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="ewents-info-box">
                            <div class="ewents-info-img">
                                <img src="img/service- info/service-info-1.jpg" alt="service-info-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="ewents-info-box">
                            <div class="ewents-info-img">
                                <img src="img/service- info/service-info-2.jpg" alt="service-info-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="ewents-info-box">
                            <div class="ewents-info-img">
                                <img src="img/service- info/service-info-4.jpg" alt="service-info-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- /.main -->


<?php get_footer(); ?>