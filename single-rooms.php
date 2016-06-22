<?php get_header(); ?>

    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div><!-- /.row -->
        </div>
        <section class="main-rooms-info">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container-fluid wraper">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_title(); ?></h3>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="rooms-info-line clearfix">
                        <div class="col-md-3">
                            <a href="#rooms-reservations" class="btn-red-light popap_c">Бронювати</a>
                        </div>
                        <div class="col-md-7">
                            <div class="free-rooms">Залишилось вільних номерів:<span><?php echo get_post_meta($post->ID, 'rooms_number', true); ?> номера</span></div>
                        </div>
                        <div class="col-md-2">
                            <div class="price-info">
                                <span>ціна</span>
                                ₴<?php echo get_post_meta($post->ID, 'rooms_price', true); ?>
                            </div>
                        </div>
                    </div><!-- /.rooms-info-line -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="rooms-info-galeri-wrap clearfix">

                        <?php
                        if (get_post_meta($post->ID, 'gallery', true)) {
                            $shortcode = get_post_meta($post->ID, 'gallery', true);
                            echo do_shortcode("$shortcode");
                        } else { echo ''; }
                        ?>
                        </div><!-- /.rooms-info-galeri-wrap -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
<?php endwhile;  endif;  ?>
        </section><!-- /.contact-map -->
    </div><!-- /.main -->
    <div class="hidden">

        <div class="rooms-reservations" id = "rooms-reservations" >
            <form  action="mail.php" >

                <label>
                    <span>Тип кімнати</span>
                    <select name="rooms" >
                        <option>Одномісний</option>
                        <option>Двомісний</option>
                        <option>Тримісний</option>
                        <option>Апартаменти</option>
                    </select>

                </label>
                <label >
                    <span>Дата</span>
                    <div class="inputgrup">
                        <span>Заїзд</span><input type="text" placeholder="03,10,15" name="phone" required/>
                        <span>Виїзд</span><input type="text" placeholder="16,10,15" name="phone" required/>
                    </div>
                </label>

                <label >
                    <span>Дорослих</span>
                    <input type="text" placeholder="2-є дорослих" name="adults" required/>
                </label>
                <label >
                    <span>Дітей</span>
                    <input type="text" placeholder="1-на дитина" name="kids" required/>
                </label>
                <label >
                    <span>П.І.П</span>
                    <input type="text" placeholder="Байда Андрій Тарасович" name="last_name" required/>
                </label>

                <label >
                    <span>Телефон</span>
                    <input type="text" placeholder="+38 (093) 00 00 0000" name="phone" required/>
                </label>
                <label >
                    <span>E-MAIL</span>
                    <input type="text" placeholder="youremail@mail.com" name="email" required/>
                </label>
                <label >
                    <span class="textarea_c">Коментар</span>
                    <textarea placeholder="Ваш Коментар" name="comment"></textarea>
                </label>
                <div class=" reqert">
                    <input class="btn-red-light" type="submit" value="Бронювати">
                </div>
            </form>
        </div>



    </div>


<?php get_footer(); ?>