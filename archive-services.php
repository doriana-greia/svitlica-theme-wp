<?php get_header(); ?>
    <!-- Content -->
    <div class="main">
        <div class="container-fluid wraper">
            <div class="row">
                <div class="breadcrumbs">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
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

                                        <?php echo wp_trim_words( get_the_content(), 30 ); ?>

                                </div><!-- /.ewents-description -->
                                <div class="btn_grup">
                                    <a href="#services_f" class="btn-red-light popap_c">
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

    <div class="hidden">
        <div class="services_f" id = "services_f" >
            <form  action="mail.php" >

                <label>
                    <span>Тип Послуги</span>
                    <select name="rooms" id="">
                        <option>Святкування урочистостей</option>
                        <option>Конференц-зал</option>
                        <option>Кейтерінг</option>
                        <option>Відпочинок</option>
                        <option>Виїздні фуршети</option>
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