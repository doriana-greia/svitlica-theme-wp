<?php
/*
  * Template name: Home
  * */
get_header();
?>


<section class="services">
    <div class="container-fluid wraper">
        <h2>Наші послуги</h2>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="services-tiz-wrap">
                    <div class="services-tiz">
                        <div class="services-tiz-icon-hotel">
                        </div>
                        <h3>Проживання</h3>
                        <p>Якщо ви змучені і прагнете відпочити у затишних номерах подалі від шуму та галасу великого міста, то наш реколекційний центр в цьому вам допоможе.</p>
                    </div><!-- /.services-tiz -->
                    <a class="btn-black" href="#">дізнатись більше</a>
                </div><!-- /.services-tiz-wrap -->

            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services-tiz-wrap">
                    <div class="services-tiz">
                        <div class="services-tiz-icon-happy">
                        </div>
                        <?php
                        $type = 'services';
                        global $post;
                        $args = array( 'posts_per_page' => 1,'offset' => 0,  'post_type'=> $type, );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>

                            <h3><?php the_title(); ?></h3>

                        <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                    </div><!-- /.services-tiz -->
                    <a class="btn-black" href="<?php the_permalink(); ?>">Дізнатись більше</a>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- /.services-tiz-wrap -->
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services-tiz-wrap">
                    <div class="services-tiz">
                        <div class="services-tiz-icon-event">
                        </div>
                        <?php
                        $type = 'services';
                        global $post;
                        $args = array( 'posts_per_page' => 1,'offset' => 1,   'post_type'=> $type, );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                    </div><!-- /.services-tiz -->
                    <a class="btn-black" href="<?php the_permalink(); ?>">дізнатись більше</a>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- /.services-tiz-wrap -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="services-tiz-wrap">
                    <div class="services-tiz">
                        <div class="services-tiz-icon-eat">
                        </div>
                        <?php
                        $type = 'services';
                        global $post;
                        $args = array( 'posts_per_page' => 1,'offset' => 2,   'post_type'=> $type, );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <h3><?php the_title(); ?></h3>

                        <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                    </div><!-- /.services-tiz -->
                    <a class="btn-black" href="<?php the_permalink(); ?>">дізнатись більше</a>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- /.services-tiz-wrap -->
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services-tiz-wrap">
                    <div class="services-tiz">
                        <div class="services-tiz-icon-game">
                        </div>
                        <?php
                        $type = 'services';
                        global $post;
                        $args = array( 'posts_per_page' => 1,'offset' => 3,   'post_type'=> $type, );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <h3><?php the_title(); ?></h3>

                        <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                    </div><!-- /.services-tiz -->
                    <a class="btn-black" href="<?php the_permalink(); ?>">дізнатись більше</a>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- /.services-tiz-wrap -->
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services-tiz-wrap">
                    <div class="services-tiz">
                        <div class="services-tiz-icon-delivery">
                        </div>
                        <?php
                        $type = 'services';
                        global $post;
                        $args = array( 'posts_per_page' => 1,'offset' => 4,   'post_type'=> $type, );
                        $myposts = get_posts( $args );
                        foreach( $myposts as $post ){ setup_postdata($post);
                            ?>
                            <h3><?php the_title(); ?></h3>

                        <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                    </div><!-- /.services-tiz -->
                    <a class="btn-black" href="<?php the_permalink(); ?>">дізнатись більше</a>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- /.services-tiz-wrap -->
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.services -->
<section class="reviews">
    <div class="container-fluid wraper container-padding">
        <div class="reviews-content">
            <h2>Що думають про нас відвідувачі</h2>
            <div class="row">
                <div class="reviews-slider carousel">
                    <div class="visitors">
                        <div class="visitors-photo">
                            <img src="img/visitors-photo-1.png" alt="visitors-photo">
                        </div>
                        <div class="visitors-name">
                            <p>Дмитро порох</p>
                            <span>Черкаси</span>
                        </div>
                        <div class="visitors-comment">
                            <p>
                                One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
                            </p>
                        </div>
                    </div><!-- /.visitors -->
                    <div class="visitors">
                        <div class="visitors-photo">
                            <img src="img/visitors-photo-2.png" alt="visitors-photo">

                        </div>
                        <div class="visitors-name">
                            <p>Дмитро порох</p>
                            <span>Київ</span>
                        </div>
                        <div class="visitors-comment">
                            <p>

                                One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
                            </p>
                        </div>
                    </div><!-- /.visitors -->
                    <div class="visitors">
                        <div class="visitors-photo">
                            <img src="img/visitors-photo-1.png" alt="visitors-photo">
                        </div>
                        <div class="visitors-name">
                            <p>Дмитро порох</p>
                            <span>Черкаси</span>
                        </div>
                        <div class="visitors-comment">
                            <p>

                                One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
                            </p>
                        </div>
                    </div><!-- /.visitors -->
                    <div class="visitors">
                        <div class="visitors-photo">
                            <img src="img/visitors-photo-2.png" alt="visitors-photo">

                        </div>
                        <div class="visitors-name">
                            <p>Дмитро порох</p>
                            <span>Київ</span>
                        </div>
                        <div class="visitors-comment">
                            <p>

                                One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
                            </p>
                        </div>
                    </div><!-- /.visitors -->
                </div><!-- /.reviews-slider -->
                <a class="btn-white" href="#">Додати коментр</a>
            </div>


        </div>
</section>
<section class="apartments">
    <div class="container-fluid wraper">

        <h2>Наші кімнати</h2>
        <div class="row">
            <div class="apartments-slaider">
                <?php
                $type = 'rooms';
                global $post;
                $args = array( 'posts_per_page' => 5,'offset' => 0,'post_type'=> $type, );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){ setup_postdata($post);
                ?>




                <div class="apartments-item">
                    <div class="apartments-content">
                        <div class="apartments-img">
                            <div class="number-apartments">номерів<br><?php echo get_post_meta($post->ID, 'rooms_number', true); ?></div>
                            <?php if ( has_post_thumbnail()) {the_post_thumbnail("medium");} ?>
                        </div>
                        <div class="apartments-description">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="apartments-btn "><span>₴<?php echo get_post_meta($post->ID, 'rooms_price', true); ?></span>Замовити</a>
                    </div><!-- /.apartments-content -->
                </div><!-- /.apartments-item -->
            <?php
            }
            wp_reset_postdata();
            ?>
            </div><!-- /.apartments-slaider -->
        </div><!-- /.row -->
    </div>
</section>
<section class="invitation">
    <div class="container-fluid wraper">
        <div class="row">
            <h2>Ми чекаємо вас у нашому<br> затишному реколекційному центрі</h2>
        </div><!-- /.row -->
    </div>
</section><!-- /.invitation -->

<section class="chapel">
    <h2>Наша каплиця</h2>
    <div class="container-fluid wraper">
        <div class="row">
            <div class="chapel-slaider">
                <div class="chapel-item">
                    <div class="chapel-img">
                        <img src="<?php echo ale_get_option('1_img')?>" alt="chapel-img">
                    </div>
                </div><!-- /.chapel-item -->
                <div class="chapel-item">
                    <div class="chapel-img">
                        <img src="<?php echo ale_get_option('2_img')?>" alt="chapel-img">
                    </div>
                </div><!-- /.chapel-item -->
                <div class="chapel-item">
                    <div class="chapel-img">
                        <img src="<?php echo ale_get_option('3_img')?>" alt="chapel-img">
                    </div>
                </div><!-- /.chapel-item -->
                <div class="chapel-item">
                    <div class="chapel-img">
                        <img src="<?php echo ale_get_option('1_img')?>" alt="chapel-img">
                    </div>
                </div><!-- /.chapel-item -->
                <div class="chapel-item">
                    <div class="chapel-img">
                        <img src="<?php echo ale_get_option('2_img')?>" alt="chapel-img">
                    </div>
                </div><!-- /.chapel-item -->
                <div class="chapel-item">
                    <div class="chapel-img">
                        <img src="<?php echo ale_get_option('3_img')?>" alt="chapel-img">
                    </div>
                </div><!-- /.chapel-item -->


            </div><!-- /.chapel-slaider -->
        </div>

    </div><!-- /.chapel-slaider -->
    </div><!-- /.row -->
    <div class="container-fluid wraper">
        <div class="row">
            <div class="chapel-description">
                В каплиці ви зможете спокійно провести час, зібратись з думками. Відвідати службу і поспілкуватись з богом. В каплиці ви зможете спокійно провести час, зібратись з думками. Відвідати службу і поспілкуватись з богом. В каплиці ви зможете спокійно провести час, зібратись з думками. Відвідати службу і поспілкуватись з богом.
            </div>
        </div><!-- /.row -->
    </div>
    </div>
</section>
<section class="call-back">
    <div class="container-fluid wraper">
        <div class="row">
            <div class="call-back-content">
                <h2>Залиште свої контакти і ми
                    вам передзвонимо</h2>
                <form action="#">
                    <div class="input-grup">
                        <input type="text"placeholder="Імя" name="name" required/>
                        <input type="text" placeholder="Телефон" name="phone" required/>
                    </div>

                    <input class="btn-red" type="submit" value="Дзвонити">
                </form>
            </div>


        </div><!-- /.row -->
    </div>
</section><!-- /.call-back -->
<section class="contact">
    <div class="container-fluid ">
        <div class="row">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2569.4899512173874!2d23.940882615711786!3d49.90837837940424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473adeddf138d9d9%3A0x7ad661ee084328df!2z0LLRg9C7LiDQqNC40YDQvtC60LAsIDQsINCR0YDRjtGF0L7QstC40YfRliwg0JvRjNCy0ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1460564256115"  style="border:0" allowfullscreen></iframe>
            </div>
            <div class="address">
                <h3>наші контакти</h3>
                <ul>
                    <li>Реколекційно-Відпочинковий центр</li>
                    <li>79491 Україна</li>
                    <li>м. Львів-Брюховичі,  вул. Широка, 4</li>
                    <li>тел.: (380-32) 244-81-02</li>
                    <li>тел./факс: (380-32) 244-81-09</li>
                    <li>e-mail: info@svitlycia.org.ua</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>


