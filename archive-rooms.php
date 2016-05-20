<?php get_header(); ?>

    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
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
                                <li>
                                    <?php $image = get_post_meta($post->ID, 'rooms_img_1', true); ?>
                                    <?php if($image !== '') { ?>
                                        <img src="http://localhost/svitlica/wp-content/themes/svitlica/img/rooms/<?php echo $image ?>" />
                                    <?php }
                                    else { ?>
                                        <img src="http://placehold.it/299x291<?php echo $image ?>" alt="Изображение отсутствует"/>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php $image = get_post_meta($post->ID, 'rooms_img_2', true); ?>
                                    <?php if($image !== '') { ?>
                                        <img src="http://localhost/svitlica/wp-content/themes/svitlica/img/rooms/<?php echo $image ?>" />
                                    <?php }
                                    else { ?>
                                        <img src="http://placehold.it/299x291<?php echo $image ?>" alt="Изображение отсутствует"/>
                                    <?php } ?>
                                </li>
                                <li> <?php $image = get_post_meta($post->ID, 'rooms_img_3', true); ?>
                                    <?php if($image !== '') { ?>
                                        <img src="http://localhost/svitlica/wp-content/themes/svitlica/img/rooms/<?php echo $image ?>" />
                                    <?php }
                                    else { ?>
                                        <img src="http://placehold.it/299x291<?php echo $image ?>" alt="Изображение отсутствует"/>
                                    <?php } ?>
                                </li>
                                <li> <?php $image = get_post_meta($post->ID, 'rooms_img_4', true); ?>
                                    <?php if($image !== '') { ?>
                                        <img src="http://localhost/svitlica/wp-content/themes/svitlica/img/rooms/<?php echo $image ?>" />
                                    <?php }
                                    else { ?>
                                        <img src="http://placehold.it/299x291<?php echo $image ?>" alt="Изображение отсутствует"/>
                                    <?php } ?>
                                </li>
                            </ul>
                            <div class="rooms-description">
                                <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                                <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                                <div class="free-room">
                                    <p>Залишилось вільних номерів: <span><?php echo get_post_meta($post->ID, 'rooms_number', true); ?></span> номери</p>
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
                                    <div class="price">₴<?php echo get_post_meta($post->ID, 'rooms_price', true); ?><br><span>за ніч</span></div>

                                </div>
                                <a class="btn-price popap_c" href="#rooms-reservations">Бронювати</a>
                            </div>

                        </div>
                    </div><!-- /.rooms-box-wrap -->

<?php endwhile;  endif;  ?>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </div><!-- /.main -->
    </section><!-- /.contact-map -->

    <div class="hidden">

        <div class="rooms-reservations" id = "rooms-reservations" >
            <form  action="mail.php" >

                <label>
                    <span>Тип кімнати</span>
                    <select name="rooms" id="">
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