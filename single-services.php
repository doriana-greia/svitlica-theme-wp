<?php get_header(); ?>

    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div><!-- /.row -->
        </div>
        <section class="main-services-info">
            <div class="container-fluid wraper">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_title(); ?></h3>

                           <?php the_content(); ?>

                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="services-img">
                            <?php
                            if (get_post_meta($post->ID, 'gallery', true)) {
                                $shortcode = get_post_meta($post->ID, 'gallery', true);
                                echo do_shortcode("$shortcode");
                            } else { echo ''; }
                            ?>
                        </div>
                        <h4> <?php echo get_post_meta($post->ID, 'service_titel_1', true); ?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services-img">
                            <?php
                            if (get_post_meta($post->ID, 'gallery-2', true)) {
                                $shortcode = get_post_meta($post->ID, 'gallery-2', true);
                                echo do_shortcode("$shortcode");
                            } else { echo ''; }
                            ?>
                        </div>
                        <h4> <?php echo get_post_meta($post->ID, 'service_titel_2', true); ?></h4>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="services-img">
                            <?php
                            if (get_post_meta($post->ID, 'gallery-3', true)) {
                                $shortcode = get_post_meta($post->ID, 'gallery-3', true);
                                echo do_shortcode("$shortcode");
                            } else { echo ''; }
                            ?>
                        </div>
                        <h4> <?php echo get_post_meta($post->ID, 'service_titel_3', true); ?></h4>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-btn">
                            <a href="#services_f" class="btn-red-light popap_c">Бронювати</a>
                            <a href="#" class="btn-green">Переглянути прайс</a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </section>
    </div><!-- /.main -->

    <div class="hidden">
        <div class="services_f" id = "services_f" >
            <form  action="mail.php" >

                <label>
                    <span>Тип Послуги</span>
                    <select name="rooms" id="">
                        <option>Святкування урочистостей</option>
                        <option>Конференц-зал</option>
                        <option>Тримісний</option>
                        <option>Апартаменти</option>
                    </select>

                </label>
                <label >
                    <span>Дата</span>
                    <input type="text" placeholder="03,10,15" name="phone" required/>
                </label>

                <label >
                    <span>Кількість гостей</span>
                    <input type="text" placeholder="50 дорослих" name="adults" required/>
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
                <div class=" reqert_s">
                    <input class="btn-red-light" type="submit" value="Бронювати">
                </div>
            </form>
        </div>
    </div>


<?php get_footer(); ?>