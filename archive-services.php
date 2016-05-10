<?php get_header(); ?>
    <!-- Content -->
    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('>'); ?>
                </div>
            </div><!-- /.row -->
        </div>




        <section class="main-services">
            <div class="container-fluid wraper">
                <div class="row">

<?php global $query_string; query_posts($query_string.'&posts_per_page=-1');?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="services-box-wrap">
                        <div class="services-box clearfix">
                            <div class="col-md-4 pl-0">
                                <div class="services-img">
                                    <?php if(get_the_post_thumbnail($post->ID,'services-mini')){
                                        echo get_the_post_thumbnail($post->ID,'services-mini');
                                    }else{?>
                                        <img src="http://placehold.it/299x291" alt="ewent-img">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="services-description">
                                    <h4><?php echo the_title(); ?></h4>
                                    <p>
                                        <?php echo wp_trim_words( get_the_content(), 30 ); ?>
                                    </p>
                                </div><!-- /.ewents-description -->
                                <div class="btn_grup">
                                    <a href="#" class="btn-red-light">
                                        Замовити
                                    </a><!-- /.btn-red-light -->

                                    <a href="<?php the_permalink(); ?>" class="btn-grey">
                                        Дізнатись більше
                                    </a><!-- /.btn-gre -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.services-box-wrap -->
<?php endwhile;  endif;  ?>

                </div><!-- /.row -->
            </div>
        </section>
    </div><!-- /.main -->



<?php get_footer(); ?>