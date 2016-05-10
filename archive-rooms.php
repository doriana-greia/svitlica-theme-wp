<?php get_header(); ?>

    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('>'); ?>
                </div>
            </div><!-- /.row -->
        </div>
        <section class="main-rooms">
            <div class="container-fluid wraper">
                <div class="row">
<?php global $query_string; query_posts($query_string.'&posts_per_page=-1');?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="rooms-box-wrap ">
                        <div class="rooms-box">
                            <ul class="rooms-img">
                                <li><img src="img/rooms/room-1.png" alt="rooms-img"></li>
                                <li><img src="img/rooms/room-1.png" alt="rooms-img"></li>
                                <li><img src="img/rooms/room-1.png" alt="rooms-img"></li>
                                <li><img src="img/rooms/room-1.png" alt="rooms-img"></li>
                            </ul>
                            <div class="rooms-description">
                                <h4><?php echo the_title(); ?></h4>
                                <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
                                <div class="free-room">
                                    <p>Залишилось вільних номерів: <span>2</span> номери</p>
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="rooms-price">
                                <div class="room-price-value">
                                    <div class="price">₴300<br><span>за ніч</span></div>

                                </div>
                                <a class="btn-price" href="">Бронювати</a>
                            </div>

                        </div>
                    </div><!-- /.rooms-box-wrap -->

<?php endwhile;  endif;  ?>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </div><!-- /.main -->
    </section><!-- /.contact-map -->


<?php get_footer(); ?>